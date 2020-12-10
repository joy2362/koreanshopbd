<?php

namespace App\Http\Controllers\Admin\product;

use App\Http\Controllers\Controller;
use App\SkinConcern;
use App\SkinType;
use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    //show product form
    public function create(){
        $category=Category::all();
        $brand=Brand::all();
        $skintype=SkinType::all();
        $skinconcern=SkinConcern::all();
        return view('admin.product.create_product')->with(compact('category','brand','skintype','skinconcern'));
    }

    //show all product
    public function index(){
        $product=Product::all();
        return view('admin.product.show_product',compact('product'));
    }

    //store product
    public function save(Request $request){
        $validatedData = $request->validate([
            'product_name' => 'required|unique:products|max:100|min:5',
            'product_code' => 'required|unique:products|max:100|min:5',
            'product_quantity' => 'required',
            'skin_type_id' => 'required|integer',
            'skin_concern_id' => 'required|integer',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'selling_price' => 'required|integer',
            'product_stock' => 'required|integer',
            'product_details' => 'required|min:50',
            'how_to_use' => 'required|min:50',
            'product_ingredient' => 'required|min:50',
            'img_1' => 'image|mimes:jpeg,png,jpg,gif|required|max:10000',
            'img_2' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'img_3' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'status' => 'required',
        ]);
       $product = new Product();
       $product->category_id= $request->category_id;
       $product->brand_id= $request->brand_id;
       $product->product_name= $request->product_name;
       $product->product_code= $request->product_code;
       $product->product_quantity = $request->product_quantity;
       $product->skin_type_id = $request->skin_type_id;
       $product->skin_concern_id = $request->skin_concern_id;
       $product->product_stock = $request->product_stock;
       $product->product_details = $request->product_details;
       $product->product_ingredient = $request->product_ingredient;
       $product->how_to_use = $request->how_to_use;
       $product->selling_price = $request->selling_price;
        if ($request->discount_price != ''){
            $product->discount_price = $request->discount_price;
        }
        if ($request->video_link != ''){
            $product->video_link = $request->video_link;
        }
        if ($request->main_slider === '1'){
            $product->main_slider = $request->main_slider;
        }
        if ($request->flash_sale === '1'){
            $product->flash_sale = $request->flash_sale;
        }
        if ($request->trend === '1'){
            $product->trend = $request->trend;
        }
        $img_1 = $request->img_1;
        $img_2 = $request->img_2;
        $img_3 = $request->img_3;

        $img_1_name='public/media/product/'.Str::random(10).'.'.Str::lower($img_1->getClientOriginalExtension());
        Image::make($img_1)->resize(1860,1860)->save($img_1_name);
        $product->img_1 = $img_1_name;

        if ($request->img_2 != ''){
            $img_2_name='public/media/product/'.Str::random(10).'.'.Str::lower($img_2->getClientOriginalExtension());
            Image::make($img_2)->resize(1860,1860)->save($img_2_name);
            $product->img_2 = $img_2_name;
        }
        if ($request->img_3 != ''){
            $img_3_name='public/media/product/'.Str::random(10).'.'.Str::lower($img_3->getClientOriginalExtension());
            Image::make($img_3)->resize(1860,1860)->save($img_3_name);
            $product->img_3 = $img_3_name;
        }
        $product->status = $request->status;
        $product->save();
        $notification=array(
            'messege'=>'Product Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect(route('view.product'))->with($notification);
    }

    //set status active
    public function activeProduct($id){
        Product::where('id',$id)->update(['status' =>'1']);
        $notification=array(
            'messege'=>'Product Active Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //set status inactive
    public function deactivateProduct($id){
        Product::where('id',$id)->update(['status' =>'0']);
        $notification=array(
            'messege'=>'Product Inactive Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //delete product
    public function destroy($id){
        $product=Product::where('id',$id)->firstOrFail();
        $image1=$product->img_1;
        unlink($image1);
        if($product->img_2){
            $image2=$product->img_2;
            unlink($image2);
        }
        if($product->img_3){
            $image3=$product->img_3;
            unlink($image3);
        }
        $product->delete();
        $notification=array(
            'messege'=>'Product Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    //view single product
    public function viewProduct($id){
        $product=Product::where('id',$id)->firstOrFail();
        return view('admin.product.view_product',compact('product'));
    }
    //show edit form
    public function editProduct($id){
        $category=Category::all();
        $brand=Brand::all();
        $skintype=SkinType::all();
        $skinconcern=SkinConcern::all();
        $product=Product::where('id',$id)->firstOrFail();
        return view('admin.product.edit_product')->with(compact('category','brand','product' ,'skintype','skinconcern'));
    }
    //update product image
    public function updateProductimg(Request $request)
    {
        $validatedData = $request->validate([
            'img_1' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'img_2' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'img_3' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);
        $old_img1 = $request->oldImg_1;
        $old_img2 = $request->oldImg_2;
        $old_img3 = $request->oldImg_3;
        $img_1 = $request->img_1;
        $img_2 = $request->img_2;
        $img_3 = $request->img_3;
        $id = $request->id;
        if ($request->has('img_1')) {
            unlink($old_img1);
            $img_1_name = 'public/media/product/' . Str::random(10) . '.' . Str::lower($img_1->getClientOriginalExtension());
            Image::make($img_1)->resize(1860, 1860)->save($img_1_name);
            Product::where('id', $request->id)->update(['img_1' => $img_1_name]);
        }
        if ($request->has('img_2')) {

            if ($old_img2) {
                unlink($old_img2);
            }

            $img_2_name = 'public/media/product/' . Str::random(10) . '.' . Str::lower($img_2->getClientOriginalExtension());
            Image::make($img_2)->resize(1860, 1860)->save($img_2_name);
            Product::where('id', $request->id)->update(['img_2' => $img_2_name]);
        }
        if ($request->has('img_3')) {
            if ($old_img3) {
                unlink($old_img3);
            }
            $img_3_name = 'public/media/product/' . Str::random(10) . '.' . Str::lower($img_3->getClientOriginalExtension());
            Image::make($img_3)->resize(1860, 1860)->save($img_3_name);
            Product::where('id', $request->id)->update(['img_3' => $img_3_name]);
        }
        $notification=array(
            'messege'=>'Product Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect(route('view.product'))->with($notification);

    }
    //Update product information
    public function updateProduct(Request $request){
        $validatedData = $request->validate([
            'product_name' => 'required|max:100|min:5|unique:products,product_name,'. $request->id,
            'product_code' => 'required|max:100|min:5|unique:products,product_code,'.$request->id,
            'product_quantity' => 'required',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'selling_price' => 'required|integer',
            'product_details' => 'required|min:50',
            'product_stock' => 'required|integer',
            'skin_type_id' => 'required|integer',
            'skin_concern_id' => 'required|integer',
            'how_to_use' => 'required|min:50',
            'product_ingredient' => 'required|min:50',
        ]);

        $products=Product::where('id',$request->id)->update([
            'category_id' =>$request->category_id ,
            'brand_id' =>$request->brand_id ,
            'product_name' =>$request->product_name ,
            'product_code' =>$request->product_code ,
            'product_quantity' =>$request->product_quantity ,
            'product_details' =>$request->product_details ,
            'skin_type_id'=> $request->skin_type_id,
            'skin_concern_id'=> $request->skin_concern_id,
            'product_ingredient'=> $request->product_ingredient,
            'how_to_use'=> $request->how_to_use,
            'product_stock' => $request->product_stock,
            'selling_price' =>$request->selling_price ,
            'discount_price' =>$request->discount_price ,
            'video_link' =>$request->video_link ,
            'main_slider' =>$request->main_slider ,
            'flash_sale' =>$request->flash_sale ,
            'trend' =>$request->trend ,
        ]);
            $notification=array(
                'messege'=>'Product Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect(route('view.product'))->with($notification);
    }

}
