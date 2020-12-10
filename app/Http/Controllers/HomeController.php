<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function SuccessList()
    {
        $order=Order::where('userId',Auth::id())->where('status',"deleveryprogress")->orderBy('id','DESC')->limit(10)->get();
        return view('pages.returnorder',compact('order'));
    }

    public function RequestReturn($id)
    {
        Order::where('id',$id)->update(['return_order'=>1]);
        $notification=array(
            'messege'=>'Order Return request done please wait for our confirmation email',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
