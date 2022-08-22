<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function show_content()
    {
        $data = Product::paginate(8);
        return view('/admin',['product' => $data]);
    }
}
