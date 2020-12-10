<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\Coupon;
use App\feedback;
use App\Mail\newsletterCoupon;
use App\MainSlider;
use App\Order;
use App\orderDetails;
use App\Product;
use App\ProductComment;
use App\SiteDetails;
use DB;
use App\Wishlist;
use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;


class FrontendCrontroller extends Controller
{
    //newsletter
    public  function storenewsletter(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|unique:newsletters'
        ]);
        $newsletter = new Newsletter();
        $newsletter->email=$request->email;
        $newsletter->save();

        //generate a random coupon
        $coupon=new Coupon();
        $coupon->code =  Str::random(10);;
        $coupon->discount = 5;
        $coupon->newsletter = 1;
        $coupon->limit=1;
        $coupon->status='1';
        $coupon->save();

        //send coupon code to given email
        Mail::to($request->email)->send(new newsletterCoupon($coupon->code));

        $notification=array(
            'messege'=>'Thanks For Subscribe!!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    //home
    public function index(Request $request){
        $CatchId =Str::random(20);
        if (!Session::has('id')){
            $request->session()->put('id',$CatchId);
        }

        $flash_sale=Product::where('status','1')->where('flash_sale','1')->take(10)->get();
        $trend=Product::where('status','1')->where('trend','1')->take(8)->get();
        $topsale=Product::where('status','1')->take(10)->get();
        $brands=Brand::all();
        $topslider=MainSlider::all();
        $newproduct=Product::where('status','1')->orderby('id','desc')->take(16)->get();
        $blog=Blog::where('status','1')->orderby('id','desc')->take(3)->get();

            return view('pages.index')->with(compact('brands','trend','newproduct','topslider','topsale','blog','flash_sale' ));

    }

    //add wishlist
    public  function addwishlist($id){
        if (Auth::check()){
            $user=Auth::user()->id;
           $check=Wishlist::where('user_id',$user)->where('product_id',$id)->first();
            if ($check){
                return response()->json(['error'=>'Already added to the wishlist']);
            }else{
                $wishlist=new Wishlist();
                $wishlist->user_id=$user;
                $wishlist->product_id=$id;
                $wishlist->save();
                return response()->json(['success'=>'product added successfully']);
           }
        }else{
            return response()->json(['error'=>'Login first!!']);
        }
    }
    //show single product
    public function product_details($id){

        $product=Product::where('id',$id)->first();
        $skintype=$product->skin_type_id;
        $rating = ProductComment::where('product_id',$id)->avg('rating');
        $totalReview = ProductComment::where('product_id',$id)->count();
        $comments = ProductComment::where('product_id',$id)->paginate(10);
        $skintypeProduct=Product::where('skin_type_id',$skintype)->take(8)->get();

        if (Auth::check()){
            $order = orderDetails::where('product_id',$id)->where('userId',Auth::id())->first();
            $userComment = ProductComment::where('product_id',$id)->where('user_id',Auth::id())->first();
            return view('pages.product-details')->with(compact('product','skintypeProduct','comments','rating','totalReview','order','userComment'));

        }else{
            return view('pages.product-details')->with(compact('product','skintypeProduct','comments','rating','totalReview'));
        }
    }

    public function showWishlist(){

        $id = Auth::user()->id ;
        $whishlist = DB::table('wishlists')
            ->where('wishlists.user_id',$id)
            ->join('products', 'products.id', '=', 'wishlists.product_id')
            ->select('wishlists.id as whishlistId', 'products.*')
            ->paginate(10);
        //$whishlist = Wishlist::where('user_id',$id)->paginate(10);
        return view('pages.whishlist')->with(compact('whishlist'));
    }

    public function removewishlist($id){
        Wishlist::destroy($id);
        $notification=array(
            'messege'=>'Product Removed Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }
    public function OrderTrack()
    {
        return view('pages.track');

    }

    public function OrderTracking(Request $request)
    {
        $track=Order::where('order_Id',$request->code)->first();
        if ($track) {
            return view('pages.track',compact('track'));
        }else{
            $notification=array(
                'messege'=>'Order id invalid ',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }

    }

    //contact us
    public function contact(){
        return view('pages.contact');
    }

    public function addFeedback(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $feedback = new feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();

        $notification=array(
            'messege'=>'Thank you for your feedback',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

}
