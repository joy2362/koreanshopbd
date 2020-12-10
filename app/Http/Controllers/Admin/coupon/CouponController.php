<?php

namespace App\Http\Controllers\Admin\coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    //view coupons
    public function coupons(){
        $coupon=Coupon::where('newsletter','0')->get();
        return view('admin.coupon.coupon',compact('coupon'));
    }

    //save new coupon
    public  function  storecoupon(Request $request){
        $validatedData = $request->validate([
            'code' => 'required|unique:coupons|max:10|min:3',
            'amount' => 'required_if:discount,null',
            'limit' => 'required|integer',
            'discount' => 'required_if:amount,null',
            'status' => 'required',
        ]);
            if (!$request->amount && !$request->discount ){
                $notification=array(
                    'messege'=>'Discount or amount required!',
                    'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
            }
            $coupon=new Coupon();
            $coupon->code=$request->code;
            if ($request->discount){
                $coupon->discount=$request->discount;
            }
            if ($request->amount){
                $coupon->amount=$request->amount;
            }
            $coupon->limit=$request->limit;
            $coupon->status=$request->status;
            $coupon->save();
            $notification=array(
                'messege'=>'Coupon Saved Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    //edit coupon
    public function editcoupon($id){
        $coupon = Coupon::where('id', $id)->firstOrFail();
        return view('admin.coupon.edit_coupon',compact('coupon'));
    }

    //update coupon
    public  function updatecoupon(Request $request){
        $validatedData = $request->validate([
            'code' => 'required|max:10|min:3',
            'amount' => 'required_if:discount,null ',
            'limit' => 'required|integer',
            'discount' => 'required_if:amount,null  ',
            'status' => 'required',
        ]);

        if (!$request->amount && !$request->discount ){
            $notification=array(
                'messege'=>'Discount or amount required!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

        $coupon =  Coupon::where('id', $request->id)->first();

        if($coupon->amount){
            if ($request->amount){
                Coupon::where('id', $request->id)->update(['code' => $request->code ,'amount'=>$request->amount ,'limit'=>$request->limit, 'status'=>$request->status]);
            }
            if ($request->discount){
                Coupon::where('id', $request->id)->update(['code' => $request->code ,'discount'=>$request->discount ,'limit'=>$request->limit,'amount'=>null, 'status'=>$request->status]);
            }
        }
        if ($coupon->discount){
            if ($request->amount){
                Coupon::where('id', $request->id)->update(['code' => $request->code ,'amount'=>$request->amount ,'limit'=>$request->limit,'discount'=>null, 'status'=>$request->status]);
            }
            if ($request->discount){
                Coupon::where('id', $request->id)->update(['code' => $request->code ,'discount'=>$request->discount ,'limit'=>$request->limit, 'status'=>$request->status]);
            }
        }

        $notification=array(
            'messege'=>'Coupon Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->route('coupons')->with($notification);
    }

    //delete a coupon
    public function deletecoupon($id){
        Coupon::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Coupon Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
