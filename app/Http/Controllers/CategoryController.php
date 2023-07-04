<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        return view('dashboard.category.index');
    }

    public function show(){
        $categories = Category::all();
      
        return view('dashboard.category.show')->with('categories',$categories);
    }

    public function store(Request $request){

        $category = new Category();
         
         $category->name = $request->name;       
         $category->slug = Str::slug($request->name);
         $category->order = $request->order;
         $category->parent_id = $request->parent_id;
         $category->save();
         return redirect()->to(route('category.index'));

    }
}
