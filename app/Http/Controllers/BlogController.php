<?php

namespace App\Http\Controllers;

use App\Blog;
use App\PostComment;
use App\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function allBlog(){
        $blog=Blog::where('status','1')->paginate(15);
        return view('pages.blog-list' ,compact('blog'));
    }

    public function singleBlog($id){
        $blog=Blog::where('status','1')->where('id',$id)->first();
        $recentBlog=Blog::where('status','1')->orderby('id','desc')->take(3)->get();
        $topsale=Product::where('status','1')->take(3)->get();
        $comment = PostComment::where('post_id',$id)->get();
        return view('pages.blog-detail' )->with(compact('blog','recentBlog','topsale','comment'));
    }
}
