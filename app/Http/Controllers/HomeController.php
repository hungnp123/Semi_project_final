<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Category;

class HomeController extends Controller
{
    public function show_content()
    {
        $data = Product::paginate(8);
        return view('user/homepage',['product' => $data]);
    }
    public function show_cate()
    {
        $data = Category::paginate(5);
        return view('admin/admin',['category' => $data]);
    }
    
}
