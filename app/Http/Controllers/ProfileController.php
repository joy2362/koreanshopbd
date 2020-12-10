<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web')->except('Logout');
    }

    public function profile(){
        $order=Order::where('userId',Auth::id())->orderBy('id','DESC')->paginate(10);
        return view('pages.profile',compact('order'));
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    public function changePassword(){
        return view('auth.changepassword');
    }


    public function updatePassword(Request $request){
        $password=Auth::user()->password;
        $oldpass=$request->oldpass;
        $newpass=$request->password;
        $confirm=$request->password_confirmation;
        if (Hash::check($oldpass,$password)) {
            if ($newpass === $confirm) {
                $user=User::find(Auth::id());
                $user->password=Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification=array(
                    'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                    'alert-type'=>'success'
                );
                return Redirect()->route('login')->with($notification);
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

    public function updateavatar(Request $request){
        $validatedData = $request->validate([
            'image'=> 'required | image'
        ]);

        $user = User::where('id',Auth::id())->first();
        if ($user->avatar){
            unlink($user->avatar);

            $img_1_name='public/media/user/'.Str::random(10).'.'.Str::lower($request->image->getClientOriginalExtension());
            Image::make($request->image)->resize(1860,1860)->save($img_1_name);
            $user->avatar = $img_1_name;
            $user->save();
            $notification=array(
                'messege'=>'Profile Picture Changed',
                'alert-type'=>'Success'
            );
            return Redirect()->back()->with($notification);
        }
        else{
            $img_1_name='public/media/user/'.Str::random(10).'.'.Str::lower($request->image->getClientOriginalExtension());
            Image::make($request->image)->resize(1860,1860)->save($img_1_name);
            $user->avatar = $img_1_name;
            $user->save();
            $notification=array(
                'messege'=>'Profile Picture Changed',
                'alert-type'=>'Success'
            );
            return Redirect()->back()->with($notification);
        }

    }
}
