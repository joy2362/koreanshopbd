<?php

namespace App\Http\Controllers;

use App\Mail\invoice;
use App\Order;
use App\orderDetails;
use App\SiteDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Cart;
use DB;
use Session;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    protected function delivery_cost ($value){

        if ($value == 2){
            return SiteDetails::first()->shiping_cost_outside_dhaka;
        }else{
             return SiteDetails::first()->shiping_cost_inside_dhaka;
        }
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'address' => 'required',
        ]);

        $order = new Order();
        $order -> userId = Auth::id();
        $order -> order_Id = "ksbd-".Str::random(10);
        $order -> name = $request->name;
        $order -> email = $request->email;
        $order -> phone = $request->phone;
        $order -> address = $request->address;
        $order -> amount = $request->amount;
        $order -> delivery_cost = $this->delivery_cost($request->location);
        $order -> status = "1";
        $order -> save();

        $content=Cart::content();
        foreach ($content as $row) {
            $orderDetails = new orderDetails();
            $orderDetails -> userId = Auth::id();
            $orderDetails->product_id = $row->id;
            $orderDetails->quantity = $row->qty;
            $orderDetails->unit_price = $row->price;
            $orderDetails->total_price = $row->qty * $row->price;
            $orderDetails->order_Id = $order->id;
            $orderDetails->save();

            DB::table('products')
                ->where('id',$row->id)
                ->update(['product_stock' => DB::raw('product_stock -'.$row->qty)]);

        }

        mail::to($request->email)->send(new invoice($order,$content));
        Cart::destroy();
        if (Session::has('coupon')) {
           Session::forget('coupon');
        }
        $notification=array(
            'messege'=>'Order Placed Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('index')->with($notification);

    }

   public function singleOrder($id){
        $details = Order::where('order_Id',$id)->first();
        $order =orderDetails::where('order_Id',$details->id)->get();
        return view('pages.single-order',compact('order','details'));
    }

    public function cancel($id){
        $order = Order::where('id',$id)->first();
        $product = orderDetails::where('order_Id',$id)->get();
        foreach ($product as $row){
            DB::table('products')
                ->where('id',$row->product_id)
                ->update(['product_stock' => DB::raw('product_stock +'.$row->quantity)]);
        }
        $order->status = "4";
        $order->save();
        $notification=array(
            'messege'=>'Order Canceled Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function return($id){

        $order = Order::where('id',$id)->first();
        if ($order->status == "3"){
            if (Carbon::parse($order->delivery_date)->diffInDays(now()) >3){
                $notification=array(
                    'messege'=>'Must be returned within 3 days ',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }else{
                $order->status = "5";
                $order->save();

                $notification=array(
                    'messege'=>'Return Request Added',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }
        }

    }

}
