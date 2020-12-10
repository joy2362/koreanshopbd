<?php

namespace App\Http\Controllers\Admin\order;

use App\Http\Controllers\Controller;
use App\Order;
use App\orderDetails;
use App\Product;
use App\SiteDetails;
use Illuminate\Http\Request;
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
        $order = Order::whereDate('created_at',now())->where('status','<=',"2")->get();

        $site = SiteDetails::where('id','1')->first();
        $pdf=PDF::loadView('pdf.delivery',compact('site','order'));
        return $pdf->download(now().".pdf");
    }

}
