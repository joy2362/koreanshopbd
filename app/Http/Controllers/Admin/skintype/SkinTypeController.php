<?php

namespace App\Http\Controllers\Admin\skintype;

use App\Http\Controllers\Controller;
use App\SkinType;
use Illuminate\Http\Request;

class SkinTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //show all skin type
    public function skintype(){
        $skin = SkinType::all();
        return view('admin.skintype.skintype',compact('skin'));
    }
    //save skin
    public  function  storecskintype(Request $request){
        $validatedData = $request->validate([
            'type_of_skin' => 'required|unique:skin_types|max:55|min:3'
        ]);
        $skin=new SkinType();
        $skin->type_of_skin=$request->type_of_skin;
        $skin->save();
        $notification=array(
            'messege'=>'Skin type Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //delete skin
    public function deleteskintype($id)
    {
        SkinType::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Skin type Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editskintype($id){
        //update with ajax in future version
        $SkinType = SkinType::where('id', $id)->firstOrFail();
        return view('admin.skintype.edit_skintype',compact('SkinType'));
    }
    //update skintype
    public function updateskintype(Request $request){
        $validatedData = $request->validate([
            'type_of_skin' => 'required|max:55|min:3'
        ]);
        if ($request->type_of_skin === $request->oldname){
            $notification=array(
                'messege'=>'Nothing to update!',
                'alert-type'=>'error'
            );
            return Redirect()->route('skintype')->with($notification);
        }
        $SkinType=new SkinType();
        $update=$SkinType::where('id', $request->id)->update(['type_of_skin' => $request->type_of_skin]);
        if ($update){
            $notification=array(
                'messege'=>'Skin Type Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('skintype')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing Wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
