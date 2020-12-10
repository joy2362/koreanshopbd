<?php

namespace App\Http\Controllers\Admin\newsletter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }
    //view all subscribers
    public function shownewsletter(){
        $subscribers=Newsletter::all();
        return view('admin.subscriber.sub',compact('subscribers'));
    }

    //delete sub
    public function deletesub($id){
        Newsletter::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Subscriber Removed Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
