<?php

namespace App\Http\Controllers\Admin\newsletter;

use App\feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;
use Mail;

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

    public function feedback(){
        $feedback = feedback::orderBy('id', 'desc')->get();
        return view("admin.feedback.all",compact('feedback'));
    }

    public function ViewFeedback($id){
        $feedback = feedback::where('id', $id)->first();
        return view("admin.feedback.view",compact('feedback'));
    }

    public function sendFeedback(Request $request){
        $feedback = feedback::where('id', $request->id)->first();

        Mail::send([],[], function($message) use ($feedback,$request) {
            $message->to($feedback->email);
            $message->subject('User Feedback reply');
            $message->setBody( $request->reply, 'text/html' );
        });
        $feedback->status = 1;
        $feedback->save();
        $notification=array(
            'messege'=>'Reply Send Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

}
