<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryPage(){
        // $categories =  Category::all();
        $categories =  Category::latest()->take(5)->get();
        return view('admin.category', ['categories'=>$categories]);
    }

    public function create(Request $request){
        // validation
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);


        $category = new Category;
        $category->name = $request->name;
        $category->image = $request->image;
        $category->slug = Str::slug($request->name, '-');
        $category->status = $request->status;
        $category->save();
        return redirect('/admin/category')->with('Success', 'Cateogry added.');

    }

    // public function edit($id){
    //     $category = Category::find($id);
    //     return view('admin.editCategory', ['category'=>$category]);
        
    // }
    public function edit($slug){
        $category = Category::find($slug);
        return view('admin.editCategory', ['category'=>$category]);
        
    }

    public function update(Request $request, $id){
        // validation
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'slug' => 'required',
            'status' => 'required'
        ]);

        $data = Category::find($id);
        $data->name = $request->name;
        $data->image = $request->image;
        $data->slug = $request->slug;
        $data->status = $request->status;
        $data->save();
        return redirect('/admin/category');
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/category');
    }
}
