<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Category;
use App\Http\Controllers\Controller;
use App\MainSlider;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class MainSliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //show all slider info
    public function mainslider(){
       $slider=MainSlider::all();
       $product=Product::where('main_slider','1')->get();
        return view('admin.siteinfo.mainslider',compact('slider','product'));
    }
    //save slider info
    public function storemainslider(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5|max:250',
            'product_id' => 'required|integer|unique:main_sliders',
            'background' => 'image|mimes:jpeg,png,jpg,gif|required|max:10000',
        ]);
        $img_1 = $request->background;
        $img_1_name='public/media/slider/'.Str::random(10).'.'.Str::lower($img_1->getClientOriginalExtension());
        Image::make($img_1)->resize(1350,750)->save($img_1_name);

        $slider=new MainSlider();
        $slider->title=$request->title;
        $slider->product_id=$request->product_id;
        $slider->description=$request->description;
        $slider->background=$img_1_name;
        $slider->save();
        $notification=array(
            'messege'=>'Slider info Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editmainslider($id){
        $slider=MainSlider::where('id',$id)->firstOrFail();
        $product=Product::where('main_slider','1')->get();
        return view('admin.siteinfo.editslider',compact('slider','product'));
    }
    //save change
    public function updatemainslider(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'product_id' => 'required|integer',
            'background' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
        if ($request->background != ''){
            $img_1 = $request->background;
            $img_1_name='public/media/slider/'.Str::random(10).'.'.Str::lower($img_1->getClientOriginalExtension());
            Image::make($img_1)->resize(1350,750)->save($img_1_name);
        }else{
            $img_1_name = $request->oldimage;
        }
        $slider=new MainSlider();
        $slider::where('id', $request->id)->update(['title' => $request->title ,
            'description'=> $request->description ,
            'product_id'=> $request->product_id,
            'background' => $img_1_name,
        ]);
        $notification=array(
            'messege'=>'Slider info Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->route('mainslider')->with($notification);
    }
    //delete slider
    public function deletemainslider($id){
        $slider= MainSlider::where('id',$id)->firstorfail();
        $image=$slider->background;
        unlink($image);
        $slider->delete();
        $notification=array(
            'messege'=>'Slider info Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
