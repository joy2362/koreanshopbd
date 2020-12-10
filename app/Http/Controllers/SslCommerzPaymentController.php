<?php

namespace App\Http\Controllers;

use App\Order;
use App\orderDetails;
use App\Product;
use App\ShipmentInfo;
use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Support\Facades\Auth;
use Cart;
use Session;


class SslCommerzPaymentController extends Controller
{
    protected function AuthCheker(){
        if ( Auth::check()){
            return true;
        }else{
            return false;
        }
    }


    public function index(Request $request)
    {
        if (!$this->AuthCheker()){
            $notification=array(
                'messege'=>'Login your account to place order!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
        ]);
        $user= Auth::user();

        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $request->amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $user->name;
        $post_data['cus_email'] = $user->email;
        $post_data['cus_add1'] = $request->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = $request->country;
        $post_data['cus_phone'] = $request->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = $request->name;
        $post_data['ship_add1'] = $request->address;
        $post_data['ship_add2'] = "";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = $request->phone;
        $post_data['ship_country'] = $request->country;

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "cosmetic";
        $post_data['product_profile'] = "physical-goods";


        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = Order::where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'userId'=>$user->id,
                'name' => $post_data['ship_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'order_at' => now(),
                'currency' => $post_data['currency']
            ]);

        //store shipment information
        $shipment = new ShipmentInfo();
        $shipment->order_id = $post_data['tran_id'];
        $shipment->ship_name = $post_data['cus_name'];
        $shipment->ship_phone = $post_data['ship_phone'];
        $shipment->ship_email = $post_data['cus_email'];
        $shipment->ship_address = $post_data['ship_add1'];
        $shipment->save();

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        $store_amount = $request->input('store_amount');
        $card_type = $request->input('card_type');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $validation = $sslc->orderValidate($tran_id, $amount, $currency, $request->all());

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = Order::where('transaction_id', $tran_id)
                    ->update(['status' => 'Processing','card_type'=> $card_type,'store_amount'=>$store_amount]);

                $this->addOrderDetails($tran_id);
                $notification=array(
                    'messege'=>'Order Placed Successfully!',
                    'alert-type'=>'success'
                );
                return Redirect()->route('index')->with($notification);
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = Order::where('transaction_id', $tran_id)
                    ->update(['status' => 'Failed']);

                $notification=array(
                    'messege'=>'Something went Wrong try again!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            $update_product =Order::where('transaction_id', $tran_id)
                ->update(['card_type'=> $card_type,'store_amount'=>$store_amount,'status' => 'Processing']);

            $this->addOrderDetails($tran_id);
            $notification=array(
                'messege'=>'Order Placed Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('index')->with($notification);

        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }


    }

    protected function addOrderDetails($tran_id){
        $content=Cart::content();
        foreach ($content as $row) {
            $orderDetails = new orderDetails();
            $orderDetails->trans_id = $tran_id;
            $orderDetails->userId = Auth::user()->id;
            $orderDetails->product_id = $row->id;
            $orderDetails->quantity = $row->qty;
            $orderDetails->singleprice = $row->price;
            $orderDetails->totalprice = $row->qty * $row->price;
            $orderDetails->save();
            DB::table('products')
                ->where('id',$row->id)
                ->update(['product_quantity' => DB::raw('product_stock -'.$row->qty)]);
        }

            Cart::destroy();
            if (Session::has('coupon')) {
                Session::forget('coupon');
            }

    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product =Order::where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = Order::where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = Order::where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = Order::where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($tran_id, $order_details->amount, $order_details->currency, $request->all());
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = Order::where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed ign";
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = Order::where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    echo "validation Fail";
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

}
