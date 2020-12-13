<?php

namespace App\Http\Controllers\Admin\order;

use App\Http\Controllers\Controller;
use App\Order;
use App\orderDetails;
use App\Product;
use App\SiteDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use PDF;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $orders = Order::all();
        return view('admin.order.allOrder',compact('orders'));
    }
    public function todayOrder(){
        $orders = Order::whereDate('created_at',now())->where('status','<=',"3")->get();
        return view('admin.order.today',compact('orders'));
    }

    public function monthOrder(){
        $orders = Order::whereMonth('created_at',now())->where('status','<=',"3")->get();
        return view('admin.order.today',compact('orders'));
    }

    public function cancel(){
        $orders = Order::where('status',"4")->get();
        return view('admin.order.cancel',compact('orders'));
    }

    public function show($id){
        $order = Order::where('id',$id)->first();
        $product = orderDetails::where('order_Id',$order->id)->get();
        return view('admin.order.viewOrder')->with(compact('order','product'));
    }



    public function orderProgress($id)
    {
        Order::where('id',$id)->update(['status'=>'2']);
        $notification=array(
            'messege'=>'Order Picked',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function Delevered($id)
    {
        Order::where('id',$id)->update(['status'=>'3']);
        $notification=array(
            'messege'=>'Order Delivered',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function return(){
        $orders=Order::where('status',"5")->get();
        return view('admin.order.return-request',compact('orders'));
    }
    public function returnAccept(){
        $orders=Order::where('status',"6")->get();
        return view('admin.order.return_order',compact('orders'));
    }
    public function returnConfirm($id){
        Order::where('id',$id)->update(['status'=>6]);
        $notification=array(
            'messege'=>'Order Return accept',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function multiOperation(Request $request){
        if ($request->operation == '2'){
            foreach ($request->id as $id){
                $order = Order::where("id",$id)->first();
                if ($order->status == "2"){
                    $order->status ="3";
                    $order->save();
                }
            }
            return response()->json("ok",200);

        }
        if ($request->operation == '1'){
            foreach ($request->id as $id){
                $order = Order::where("id",$id)->first();
                if ($order->status == "1"){
                    $order->status ="2";
                    $order->save();
                }
            }
            return response()->json("ok",200);

        }
    }

    public function generatePdf(){
       dd(Auth::guard('admin')->check());
        $order = Order::whereDate('created_at',now())->where('status','<=',"2")->get();
        foreach ($order as $row){
            $orderCheck = Order::where("id",$row->id)->first();
            if ($orderCheck->status == "1"){
                $orderCheck->status ="2";
                $orderCheck->save();
            }
        }
        $site = SiteDetails::where('id','1')->first();

        $pdf=PDF::loadView('pdf.delivery',compact('site','order'));
        return $pdf->download(now().".pdf");
    }

    public function add(){
        $product = Product::where('status',1)->get();
        return view('admin.order.add-order')->with(compact('product'));
    }

    public function storeOrder(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'location' => 'required',
        ]);
        return view('admin.order.quentity')->with(compact('request'));
    }


    public function orderSrore(Request $request){
        $order_Id = "ksbd-".Str::random(10);
        $amount=0;
        $delivery_cost =$this->delivery_cost($request->location);
       for ($i = 0 ;$i <count($request->product);$i++){
           $amount += $request->unit_price[$i] * $request->quantity[$i];
       }
       $amount += $delivery_cost;

        $order = new Order();
        $order -> userId = Auth::id();
        $order -> order_Id = $order_Id;
        $order -> name = $request->name;
        $order -> email = $request->email;
        $order -> phone = $request->phone;
        $order -> address = $request->address;
        $order -> amount = $amount;
        $order -> delivery_cost = $delivery_cost;
        $order -> status = "1";
        $order -> user_type = "admin";
        $order -> save();

        for ($i = 0 ;$i <count($request->product);$i++){
            $orderDetails = new orderDetails();
            $orderDetails -> userId = Auth::id();
            $orderDetails->product_id = $request->product[$i];
            $orderDetails->quantity = $request->quantity[$i];
            $orderDetails->unit_price = $request->unit_price[$i];
            $orderDetails->total_price = $request->quantity[$i] * $request->unit_price[$i];
            $orderDetails->order_Id = $order->id;
            $orderDetails->save();
        }
        $notification=array(
            'messege'=>'Order Added Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.order.add')->with($notification);
    }


    protected function delivery_cost ($value){

        if ($value == 2){
            return SiteDetails::first()->shiping_cost_outside_dhaka;
        }else{
            return SiteDetails::first()->shiping_cost_inside_dhaka;
        }
    }
}
