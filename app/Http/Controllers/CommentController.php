<?php

namespace App\Http\Controllers;

use App\PostComment;
use App\ProductComment;
use App\ReviewImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class CommentController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function productComment(Request $request){

        $validatedData = $request->validate([
            'rating' => 'required',
            'review'=> 'required'
        ]);
        $check = ProductComment::where('user_id',Auth::id())->first();
        if ($check){
            $notification=array(
                'messege'=>'Already Rate This Product',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }else{

            if ($request->reviewImage){
                $comment = new ProductComment();
                $comment->rating = $request->rating;
                $comment->user_id = Auth::id();
                $comment->comment = $request->review;
                $comment->product_id = $request->product;
                $comment->save();

                for ($i=0 ; $i < sizeof( $request->reviewImage )  ; $i++){
                    $imgMame[$i]='public/media/review/'.Str::random(10).'.'.Str::lower($request->reviewImage[$i]->getClientOriginalExtension());
                    Image::make($request->reviewImage[$i])->resize(1860,1860)->save( $imgMame[$i]);
                    $image = new ReviewImage();
                    $image->review_id=$comment->id;
                    $image->image= $imgMame[$i];
                    $image->save();
                }
            }
            $notification=array(
                'messege'=>'Review Added',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }

    }

    public function postComment (Request $request){
        $validatedData = $request->validate([
            'comment' => 'required',
        ]);

       $comment = new PostComment();
       $comment->post_id = $request->postId;
       $comment->comment = $request->comment;
       $comment->user_id = Auth::id();
       $comment->save();

        $notification=array(
            'messege'=>'Comment Added',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
