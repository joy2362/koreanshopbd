<?php

namespace App\Http\Controllers\Admin\skinconcern;

use App\Http\Controllers\Controller;
use App\SkinConcern;
use Illuminate\Http\Request;

class SkinConcernController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //show all skin type
    public function skinconcern(){
        $skin = SkinConcern::all();
        return view('admin.skinconcern.skinconcern',compact('skin'));
    }
    //save skin concern
    public  function  storecskinconcern(Request $request){
        $validatedData = $request->validate([
            'skin_concern' => 'required|unique:skin_concerns|max:55|min:3'
        ]);
        $skin=new SkinConcern();
        $skin->skin_concern=$request->skin_concern;
        $skin->save();
        $notification=array(
            'messege'=>'Skin Concern Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //delete skin
    public function deleteskinconcern($id)
    {
        SkinConcern::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Skin Concern Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editskinconcern($id){
        //update with ajax in future version
        $skinconcern = SkinConcern::where('id', $id)->firstOrFail();
        return view('admin.skinconcern.edit_skinconcern',compact('skinconcern'));
    }
    //update skintype
    public function updateskinconcern(Request $request){
        $validatedData = $request->validate([
            'skin_concern' => 'required|max:55|min:3'
        ]);
        if ($request->skin_concern === $request->oldname){
            $notification=array(
                'messege'=>'Nothing to update!',
                'alert-type'=>'error'
            );
            return Redirect()->route('skinconcern')->with($notification);
        }
        $SkinConcern=new SkinConcern();
        $update=$SkinConcern::where('id', $request->id)->update(['skin_concern' => $request->skin_concern]);
        if ($update){
            $notification=array(
                'messege'=>'Skin Concern Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('skinconcern')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing Wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
