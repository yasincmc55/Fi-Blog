<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;





class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.category.index')->with('categories',$categories);
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

    /**
     *  Laravel automatically resolves the {category} parameter in the route and fetches the corresponding Category model instance based on the ID provided. This saves you the step of manually fetching the category from the database. However, in this case, you need to make sure that the route parameter name ({category}) matches the parameter name in the controller method ($category).
     */
    //eğer view'e birden fazla değer göndermek istiyorsak compact yapısı kullanılır

    public function edit(Category $category){
       
        $categories = Category::all();
        return view('dashboard.category.edit',compact('categories','category'));

    }

    public function update(Request $request , Category $category){
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->parent_id = $request->parent_id;
        $category->order = $request->order;

        if($category->update()){
            return redirect()->to(route('category.index'));
        }

    }

    public function delete(Category $category){
       $category->delete();
       return redirect()->back();

    }
}
