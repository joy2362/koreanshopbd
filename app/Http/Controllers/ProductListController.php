<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\SkinConcern;
use App\SkinType;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index(){
        $skinType = SkinType::all();
        $skinConcerns = SkinConcern::all();
        $category = Category::all();
        $brand = Brand::all();
        $products= Product::where('status','1')->orderby('id','desc')->paginate(5);
        return view('pages.product-list')->with(compact('products','category','brand','skinType','skinConcerns'));
    }
    public function categoryFilter($id){
        $selectCategory = $id;
        $skinType = SkinType::all();
        $skinConcerns = SkinConcern::all();
        $category = Category::all();
        $brand = Brand::all();
        $products= Product::where('status','1')->where('category_id',$id)->orderby('id','desc')->paginate(5);
        return view('pages.product-list')->with(compact('products','category','brand','skinType','skinConcerns','selectCategory'));
    }
    public function brandFilter($id){
        $selectBrand = $id;
        $skinType = SkinType::all();
        $skinConcerns = SkinConcern::all();
        $category = Category::all();
        $brand = Brand::all();
        $products= Product::where('status','1')->where('brand_id',$id)->orderby('id','desc')->paginate(5);
        return view('pages.product-list')->with(compact('products','category','brand','skinType','skinConcerns','selectBrand'));
    }
    public function skintypeFilter($id){
        $selectSkintype = $id;
        $skinType = SkinType::all();
        $skinConcerns = SkinConcern::all();
        $category = Category::all();
        $brand = Brand::all();
        $products= Product::where('status','1')->where('skin_type_id',$id)->orderby('id','desc')->paginate(5);
        return view('pages.product-list')->with(compact('products','category','brand','skinType','skinConcerns','selectSkintype'));
    }
    public function skinconcernsFilter($id){
        $selectSkinconcernsFilter = $id;
        $skinType = SkinType::all();
        $skinConcerns = SkinConcern::all();
        $category = Category::all();
        $brand = Brand::all();
        $products= Product::where('status','1')->where('skin_concern_id',$id)->orderby('id','desc')->paginate(5);
        return view('pages.product-list')->with(compact('products','category','brand','skinType','skinConcerns','selectSkinconcernsFilter'));
    }

}
