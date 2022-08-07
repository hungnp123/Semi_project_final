<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Product;

use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        return view('admin.category.create');
    } 

    public function store(ProductFormRequest $request){
        $validateData=$request->validated();
        $product= new Product();
        $product->name = $validateData['product_name'];
        $product->price = $validateData['product_price'];
        $category->description = $validateData['description'];
        if($request->hasFile('product_img')){
            $file =$request->file('product_img');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;

            $file->move('upload/category/',$filename);
            $category->image= $filename;
        }
    }    
}

