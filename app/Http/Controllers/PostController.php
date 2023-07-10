<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('dashboard.posts.index',compact('posts')); 
        $title = limitString($)
    }

    private function limitString($string, $limit)
    {
        if (strlen($string) <= $limit) {
            return $string;
        } else {
            return substr($string, 0, $limit);
        }
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

          return redirect()->to(route('post.index'));
          
    
    }
}






