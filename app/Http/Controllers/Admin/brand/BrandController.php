<?php

namespace App\Http\Controllers\Admin\brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //show all brands
    public function brand(){
        $brands = Brand::all();
        return view('admin.brand.brand',compact('brands'));
    }

    //store new brand
    public  function  storebrand(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|max:55',
            'brand_logo'=> 'required | image'
        ]);
        $image=$request->file('brand_logo');
        $logo=Str::random(5);
        $ext=Str::lower($image->getClientOriginalExtension());
        $full_name=$logo.".".$ext;
        $folder="public/media/brand-logo";
        $url=$folder."/".$full_name;
        $image->move($folder,$full_name);
        //Eloquent orm
        $brand=new Brand();
        $brand->brand_name=$request->brand_name;
        $brand->brand_logo= $url;
        $brand->save();
        $notification=array(
            'messege'=>'Brand Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editbrand($id){
        //TODO:update with ajax in future version
        $brand = Brand::where('id', $id)->firstOrFail();
        return view('admin.brand.edit_brand',compact('brand'));
    }
    //change brand information
    public function updatebrand(Request $request){
        $validatedData = $request->validate([
            'brand_name' => 'required|max:55|min:3'
        ]);
            $image=$request->file('brand_logo');
            if ($image){
                $logo=Str::random(5);
                $ext=Str::lower($image->getClientOriginalExtension());
                $full_name=$logo.".".$ext;
                $folder="public/media/brand-logo";
                $url=$folder."/".$full_name;
                $image->move($folder,$full_name);
                unlink($request->oldlogo);

            }else{
                $url=$request->oldlogo;
            }
            $brand=new Brand();
            $update=$brand::where('id', $request->id)->update(['brand_name' => $request->brand_name ,'brand_logo' => $url ]);

        if ($update){
            $notification=array(
                'messege'=>'Brand Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('brands')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing Wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //delete brand
    public function deletebrand($id)
    {
        $brandinfo=Brand::where('id',$id)->firstorfail();
        $image=$brandinfo->brand_logo;
        unlink($image);
        $brandinfo->delete();
        //DB::table('categories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Brand Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
