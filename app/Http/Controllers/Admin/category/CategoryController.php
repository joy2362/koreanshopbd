<?php

namespace App\Http\Controllers\Admin\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //show all category
    public function category(){
        $category = Category::all();
        return view('admin.category.category',compact('category'));
    }
    //save category
    public  function  storecategory(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:55|min:3'
        ]);
        //Eloquent orm
        $category=new Category();
        $category->category_name=$request->category_name;
        $category->save();
        $notification=array(
            'messege'=>'Category Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //delete category
    public function deletecategory($id)
    {
        Category::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Category Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editcategory($id){
         //update with ajax in future version
        $category = Category::where('id', $id)->firstOrFail();
        return view('admin.category.edit_category',compact('category'));
    }
    //update category
    public function updatecategory(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|max:55|min:3'
        ]);
        if ($request->category_name === $request->oldname){
            $notification=array(
                'messege'=>'Nothing to update!',
                'alert-type'=>'error'
            );
            return Redirect()->route('categories')->with($notification);
        }
        $category=new Category();
        $update=$category::where('id', $request->id)->update(['category_name' => $request->category_name]);

        if ($update){
            $notification=array(
                'messege'=>'Category Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('categories')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing Wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
