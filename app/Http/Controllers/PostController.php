<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('dashboard.posts.index',compact('posts')); 
       
    }


    public function show(){
        $categories = Category::all();
        return view('dashboard.posts.show')->with('categories',$categories);   
    }

    public function save(Request $request){

          $post = new Post();
          $post->title = $request->title;
          $post->content = $request->content;
          $post->category_id = $request->category_id;
          $post->slug = Str::slug($request->title);

          $post->save();
          
          //gösterim resmi alma ve kayıt etme
          if($request->hasFile('main_image')){
            
             $image = $request->file('main_image');
             $ext = $image->getClientOriginalExtension();
             $random_image_name = uniqid().".".$ext;
             $path  = $image->storeAs('public/images',$random_image_name);

             $gallery = new Gallery();
             $gallery->name = $random_image_name;
             $gallery->path = $path;
             $gallery->post_id = $post->id;
             $gallery->is_main = true;
             $gallery->save();
             

          }


          //çoklu resim alma ve kayıt etme
          if($request->hasFile('images')){

            $images = $request->file('images');

            foreach( $images as $image ){
               
                $gallery = new Gallery();
                $ext = $image->getClientOriginalExtension();
                $random_image_name =  uniqid().".".$ext;
                $gallery->name = $random_image_name;
                $gallery->path = $image->storeAs('public/images',$random_image_name);
                $gallery->post_id = $post->id;

                $gallery->save();

            }
          }

          return redirect()->to(route('post.index'));
          
    }
}






