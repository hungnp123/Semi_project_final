<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
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
    return view('admin/layout/header');
});
Route::get('/menu', function () {
    return view('admin/layout/menubar');
});
Route::get('/banner', function () {
    return view('admin/layout/banner');
});
Route::get('/footer', function () {
    return view('admin/layout/footer');
});
Route::get('/homepage', function (){
    return view('/homepage');
});

/*controller space:*/
Route::get('/category/index',[CategoryController::class, 'index']) -> name('category.index');
Route::get('/category/create',[CategoryController::class, 'create']) -> name('category.create');
Route::get('/category/show',[CategoryController::class, 'show']) -> name('category.show');
Route::get('/category/edit',[CategoryController::class, 'edit']) -> name('category.edit');
Route::get('/category/update',[CategoryController::class, 'update']) -> name('category.update');
Route::get('/category/delete',[CategoryController::class, 'destroy']) -> name('category.destroy');
Route::get('/category/store',[CategoryController::class, 'store']) -> name('category.store');

Route::get('/product/index',[ProductController::class, 'index']) -> name('product.index');
Route::get('/product/create',[ProductController::class, 'create']) -> name('product.create');
Route::get('/product/edit',[ProductController::class, 'edit']) -> name('product.edit');
Route::get('/product/update',[ProductController::class, 'update']) -> name('product.update');
Route::get('/product/delete',[ProductController::class, 'delete']) -> name('product.delete');
Route::get('/product/store',[ProductController::class, 'store']) -> name('product.store');