<?php

namespace App\Http\Controllers\Admin\post;

use App\Blog;
use App\Http\Controllers\Controller;
use App\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //show all category
    public function category(){
        $category = PostCategory::all();
        return view('admin.post.post_category',compact('category'));
    }

    //save category
    public  function  storecategory(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:post_categories|max:55|min:3'
        ]);
        //Eloquent orm
        $category=new PostCategory();
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
        PostCategory::where('id',$id)->delete();
        $notification=array(
            'messege'=>'Category Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    //show edit form
    public function editcategory($id){
        //update with ajax in future version
        $category = PostCategory::where('id', $id)->firstOrFail();
        return view('admin.post.edit_post_category',compact('category'));
    }

    //save update category
    public function updatecategory(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|max:55|min:3|unique:post_categories'
        ]);
        if ($request->category_name === $request->oldname){
            $notification=array(
                'messege'=>'Nothing to update!',
                'alert-type'=>'error'
            );
            return Redirect()->route('categories')->with($notification);
        }
        $category=new PostCategory();
        $update=$category::where('id', $request->id)->update(['category_name' => $request->category_name]);

        if ($update){
            $notification=array(
                'messege'=>'Category Updated Successfully!',
                'alert-type'=>'success'
            );
            return Redirect()->route('post.category')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Somthing Wrong!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //view all post
    public function index(){
        $blog = Blog::all();
        return view('admin.post.show_blog',compact('blog'));
    }

    //show product form
    public function create(){
        $category=PostCategory::all();
        return view('admin.post.create_post')->with(compact('category'));
    }

    //store product
    public function save(Request $request){
        $user_id=Auth::user()->id;
        $validatedData = $request->validate([
            'post_title' => 'required|unique:blogs|max:100|min:5',
            'post_details' => 'required|min:50',
            'category_id' => 'required',
            'post_img' => 'image|mimes:jpeg,png,jpg,gif|required|max:10000',
            'status' => 'required',
        ]);
        $post = new Blog();
        $post->category_id= $request->category_id;
        $post->post_title= $request->post_title;
        $post->post_details= $request->post_details;
        $post->status= $request->status;
        $post->author=$user_id;
        $img_1 = $request->post_img;

        $img_1_name='public/media/blog/'.Str::random(10).'.'.Str::lower($img_1->getClientOriginalExtension());
        Image::make($img_1)->save($img_1_name);
        $post->post_img = $img_1_name;
        $post->save();
        $notification=array(
            'messege'=>'Blog Saved Successfully!',
            'alert-type'=>'success'
        );
        return Redirect(route('view.post'))->with($notification);
    }

    //delete product
    public function destroy($id){
        $post=Blog::where('id',$id)->firstOrFail();
        unlink($post->post_img);
        $post->delete();
        $notification=array(
            'messege'=>'Blog Deleted Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    //view single post
    public function viewPost($id){
        $post=Blog::where('id',$id)->firstOrFail();
        return view('admin.post.view_post',compact('post'));
    }

    //set status active
    public function activeBlog($id){
        Blog::where('id',$id)->update(['status' =>'1']);
        $notification=array(
            'messege'=>'Post Active Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //set status inactive
    public function deactivateBlog($id){
        Blog::where('id',$id)->update(['status' =>'0']);
        $notification=array(
            'messege'=>'Post Inactive Successfully!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
    //show edit form
    public function editPost($id){
        $category=PostCategory::all();
        $post=Blog::where('id',$id)->firstOrFail();
        return view('admin.post.edit_blog')->with(compact('category','post'));
    }

    //Update post information
    public function updatePost(Request $request){
        $validatedData = $request->validate([
            'post_title' => 'required|max:100|min:5',
            'category_id' => 'required',
            'post_details' => 'required',
            'post_img' => 'image|mimes:jpeg,png,jpg,gif|max:10000',
            'status' => 'required',
        ]);
        $old_img1 = $request->oldImg_1;

        if ($request->has("post_img")){
            unlink($old_img1);
            $img_1=$request->post_img;
            $img_1_name='public/media/blog/'.Str::random(10).'.'.Str::lower($img_1->getClientOriginalExtension());
            Image::make($img_1)->save($img_1_name);
        }else{
            $img_1_name=$old_img1;
        }
        $post=Blog::where('id',$request->id)->update([
            'post_title' =>$request->post_title ,
            'category_id' =>$request->category_id ,
            'post_details' =>$request->post_details ,
            'post_img' =>$img_1_name ,
            'status' =>$request->status ,
        ]);
        $notification=array(
            'messege'=>'Blog Updated Successfully!',
            'alert-type'=>'success'
        );
        return Redirect(route('view.post'))->with($notification);
    }


}
