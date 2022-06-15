<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Faker\Core\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function productPage(){
        $products = Product::latest()->take(5)->get();
        $categories = Category::all();
        return view('admin.product', ['products'=>$products, 'categories'=>$categories]);
    }

    public function create(Request $request){
        // // validation
        $request->validate([
            'name' => 'required',
            'featureImage' => 'required',
            'images' => 'required',
            'status' => 'required',
            'category_id' => 'required'
        ]);
        //    if($request->hasFile('images')){
        //     dd($request);
        //     $file = $request->file('featureImage');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$extension;
        //     $path = $request->file('featureImage')->storeAs('public/uploads',$filename);           
        //      $products->featureImage= $filename;
        // }

        // if ($request->file('featureImage')) {
        //     $imagePath = $request->file('featureImage');
        //     $imageName = strtolower('product_') . '' . time() . '' . $imagePath->getClientOriginalName();
        //     $request->file('featureImage')->storeAs('product_featureImage', $imageName, 'public');

        // }
 
        $products = new Product;
        $products->name = $request->name;
        $products->featureImage = $request->featureImage;
        $products->images = $request->images;
        $products->status = $request->status;
        $products->category_id = $request->category_id;
     
        $products->save();
        return redirect()->back()->with('status', 'Product added successfully.');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product', ['product'=>$product]);
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }


}
