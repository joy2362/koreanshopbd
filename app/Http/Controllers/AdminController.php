<?php

namespace App\Http\Controllers;

use App\AdminAccess;
use App\Brand;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use DB;
use Str;
use Image;
use Mail;
use App\Mail\AdminDetails;


class AdminController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Order::whereDate('created_at', now())->sum('amount');
        $delevery = Order::whereDate('created_at', now())->where('status','3')->sum('amount');
        $product = Product::count();
        $user = User::count();
        $low_stock =Product::where('status',1)->where('product_stock','<',20)->get();
        $recent_order = Order::orderByDesc('id')->take(10)->get();
        return view('admin.home')->with(compact('user','today','delevery','product','low_stock','recent_order'));
    }

    public function ChangePassword()
    {
        return view('admin.auth.passwordchange');
    }

    public function Update_pass(Request $request)
    {
      $password=Auth::user()->password;
      $oldpass=$request->oldpass;
      $newpass=$request->password;
      $confirm=$request->password_confirmation;
      if (Hash::check($oldpass,$password)) {
           if ($newpass === $confirm) {
                      $user=Admin::find(Auth::id());
                      $user->password=Hash::make($request->password);
                      $user->save();
                      Auth::logout();
                      $notification=array(
                        'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                        'alert-type'=>'success'
                         );
                       return Redirect()->route('admin.login')->with($notification);
                 }else{
                     $notification=array(
                        'messege'=>'New password and Confirm Password not matched!',
                        'alert-type'=>'error'
                         );
                       return Redirect()->back()->with($notification);
                 }
      }else{
        $notification=array(
                'messege'=>'Old Password not matched!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
      }
    }

    public function logout()
    {
        Auth::logout();
            $notification=array(
                'messege'=>'Successfully Logout',
                'alert-type'=>'success'
                 );
             return Redirect()->route('admin.login')->with($notification);
    }

    public function allAdmin(){
        $admin = Admin::where('id','!=',Auth::id())->get();
        return view('admin.access.all',compact('admin'));
    }
    public function newAdmin(){
        return view('admin.access.add');
    }
    public function storeAdmin(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $check = Admin::where('email',$request->email)->first();
        if ($check){
            $notification=array(
                'messege'=>'Admin Already present',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }else{
            if ($request->img_1){
                $img_1_name='public/media/admin/'. Str::random(10).'.'.Str::lower($request->img_1->getClientOriginalExtension());
                Image::make($request->img_1)->resize(1860,1860)->save($img_1_name);
            }else{
                $img_1_name = '';
            }
            $pass  =  Str::random(8);

            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->avatar = $img_1_name;
            $admin->password = Hash::make($pass);
            $admin ->save();

            $access = new AdminAccess();
            $access->user = $admin->id;
            if ($request->category){
                $access->category = 1;
            }
            if ($request->coupon){
                $access->coupon = 1;
            }
            if ($request->product){
                $access->product = 1;
            }
            if ($request->order){
                $access->order = 1;
            }
            if ($request->blog){
                $access->blog = 1;
            }
            if ($request->site_setting){
                $access->site_setting = 1;
            }
            if ($request->other){
                $access->other = 1;
            }
            if ($request->access){
                $access->access = 1;
            }
            $access ->save();

            Mail::to($request->email)->send(new AdminDetails($pass , $request));

            $notification=array(
                'messege'=>'Admin Added',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function removeAdmin($id){
        $admin = Admin::where('id',$id)->first();
        if ($admin->avatar){
            unlink($admin->avatar);
        }
        AdminAccess::where('user',$id)->delete();
        $admin->delete();
        $notification=array(
            'messege'=>'Admin Removed',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function editAdmin($id){
        $admin = Admin::where('id',$id)->first();
        return view('admin.access.edit',compact('admin'));
    }
    public function updateAdmin(Request $request){
        $access = AdminAccess::Where('user',$request->id)->first();

        if ($request->category){
            $access->category = 1;
        }else{
            $access->category = 0;
        }
        if ($request->coupon){
            $access->coupon = 1;
        }else{
            $access->coupon = 0;
        }
        if ($request->product){
            $access->product = 1;
        }else{
            $access->product = 0;
        }
        if ($request->order){
            $access->order = 1;
        }else{
            $access->order = 0;
        }
        if ($request->blog){
            $access->blog = 1;
        }else{
            $access->blog = 0;
        }
        if ($request->site_setting){
            $access->site_setting = 1;
        }else{
            $access->site_setting = 0;
        }
        if ($request->other){
            $access->other = 1;
        }else{
            $access->other = 0;
        }
        if ($request->access){
            $access->access = 1;
        }else{
            $access->access = 0;
        }

        $access ->save();

        $notification=array(
            'messege'=>'Admin Permission update',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin-access')->with($notification);
    }

}
