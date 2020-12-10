<?php

namespace App\Http\Controllers;

use App\CompareList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class compareController extends Controller
{
    public function store($id ,Request $request){

        if (Session::has('id')){
            $uId = session('id');
        }else{
            $uId =Str::random(20);
            $request->session()->put('id',$uId);
        }
        $Check = CompareList::where('uId',$uId)->where('productId',$id)->first();
        if ($Check){
            return response()->json(['error' => 'Already in your Compare List']);
        }else{
            $compare = new CompareList();
            $compare->uId = $uId;
            $compare-> productId = $id;
            $compare->save();

            return response()->json(['success' => 'Successfully Added on Compare List']);
        }

    }

    public function show(){
        //$localIP = getHostByName(getHostName());
        //dd($localIP);
        $uId = session('id');
        $compare = CompareList::where('uId',$uId)->orderby('id','desc')->take(4)->get();
        $total=count($compare);
        if ($total <1){
            $notification=array(
                'messege'=>'No product Found in your compare list',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }else{
            return view('pages.compare')->with(compact('compare','total'));
        }
    }
}
