<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function BookSearch(Request $request) {
        $data = Product::paginate(8);
        $search=$request->input('product_name'); 
        $products=Product::where('product_name', 'LIKE', '%'.$search.'%') ->get();
        return view('user.search',['product' => $data],compact('products'));
    }
}
