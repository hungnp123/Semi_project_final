<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\SearchController;

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

Route::get('/header', function () {
    return view('user/layout/header');
});
Route::get('/menu', function () {
    return view('user/layout/menubar');
});
Route::get('/banner', function () {
    return view('user/layout/banner');
});
Route::get('/footer', function () {
    return view('user/layout/footer');
});
Route::get('/homepage', function (){
    return view('user/homepage');
});
Route::get('/manager', function () {
    return view('admin/admin');
});
// Route::get('/login', function (){
//     return view('/login');
// });
// Route::get('/signup', function (){
//     return view('/signup');
// });
/*controller space:*/
Route::get('/homepage',[HomeController::class, 'show_content']) -> name('Homepage');
Route::get('/admin',[HomeController::class, 'show_cate']) -> name('Homepage');
Route::get('/detail/{product_id}',[ProductController::class, 'detail']) -> name('detail');

Route::get('/category/index',[CategoryController::class, 'index']) -> name('category.index');
Route::get('/category/create',[CategoryController::class, 'create']) -> name('category.create');
Route::get('/category/edit/{cate_id}',[CategoryController::class, 'edit']) -> name('category.edit');
Route::post('/category/update/{cate_id}',[CategoryController::class, 'update']) -> name('category.update');
Route::get('/category/delete/{cate_id}',[CategoryController::class, 'destroy']) -> name('category.destroy');
Route::post('/category/store', [CategoryController::class, 'store']) -> name('category.store');

Route::get('/product/index',[ProductController::class, 'index']) -> name('product.index');
Route::get('/product/create',[ProductController::class, 'create']) -> name('product.create');
Route::get('/product/edit/{product_id}',[ProductController::class, 'edit']) -> name('product.edit');
Route::post('/product/update/{product_id}',[ProductController::class, 'update']) -> name('product.update');
Route::get('/product/delete/{product_id}',[ProductController::class, 'delete']) -> name('product.delete');
Route::post('/product/store',[ProductController::class, 'store']) -> name('product.store');
Route::get('/product/search', [SearchController::class, 'BookSearch']) ->name('product.search');

/*Banner*/
Route::get('/home-slider', [App\Http\Controllers\SliderController::class,'index'])->name('slider.index');

Route::get('/add-slider', [App\Http\Controllers\SliderController::class,'create'])->name('slider.create');

Route::post('/store-slider', [App\Http\Controllers\SliderController::class,'store'])->name('store');

Route::get('/edit-slider/{id}', [App\Http\Controllers\SliderController::class,'edit'])->name('slider.edit');

Route::put('/update-slider/{id}', [App\Http\Controllers\SliderController::class,'update'])->name('update');

Route::get('/destroy-slider/{slider}', [App\Http\Controllers\SliderController::class,'destroy'])->name('slider.destroy'); 

Route::group(['prefix' => 'user'], function(){
    Route::get('/login', [LoginController::class, 'getLogin']);
    Route::post('/login', [LoginController::class, 'postLogin']);
    Route::get('/signup', [SignUpController::class, 'getSignUp']);
    Route::post('/postsignup', [SignUpController::class, 'postSignUp']);
});
/**user */
Route::get('/home-user', [App\Http\Controllers\UserController::class,'index'])->name('index');

Route::get('/add-user', [App\Http\Controllers\UserController::class,'create'])->name('create');

Route::post('/store-user', [App\Http\Controllers\UserController::class,'store'])->name('store');

Route::get('/users/edit-user/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('edit');

Route::put('/update-user/{id}', [App\Http\Controllers\UserController::class,'update'])->name('update');

Route::get('/destroy-user/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('destroy'); 