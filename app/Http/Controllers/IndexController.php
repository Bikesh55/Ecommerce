<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\ViewErrorBag;

class IndexController extends Controller
{
    public function prac2(){
        return view('prac2');
    }
    public function prac1(){
        return view('prac1');
    }
}
