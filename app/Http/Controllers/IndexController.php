<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\ViewErrorBag;
use App\Models\Product;


class IndexController extends Controller
{
    public function manageIndex(){
        $products = Product::all();
        return view('/', ['products'=>$products]);
    }
}
