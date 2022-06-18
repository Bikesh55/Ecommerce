<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});


// Route::post('auth/save', [MainController::class, 'save'])->name('auth.save');
Route::post('auth/save', [UserController::class, 'save'])->name('auth.save');
Route::post('/auth/check', [UserController::class, 'check'])->name('auth.check');
// Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

// Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
// Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [MainController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard', [MainController::class, 'dashboard']);
    // Category
    Route::get('/admin/category',[CategoryController::class, 'categoryPage'])->name('categoryPage');
    Route::post('/admin/category', [CategoryController::class, 'create'])->name('create');
    Route::get('/admin/category/edit/{slug}', [CategoryController::class, 'edit']);
    Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete']);
    // product
    Route::get('/admin/product', [ProductController::class, 'productPage'])->name('admin.product');
    Route::post('/admin/product',[ProductController::class, 'create']);
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/user/profile', [UserController::class, 'userProfile'])->name('userProfile');
});



