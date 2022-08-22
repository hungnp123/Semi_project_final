<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

class AdminController extends Controller
{
    public function show_content()
    {
        $data = Product::all();
        return view('/managerHP',['product' => $data]);
        $data = Category::all();
        return view('/managerHP',['category' => $data]);
    }
}
