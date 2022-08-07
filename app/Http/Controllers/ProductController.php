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


}

