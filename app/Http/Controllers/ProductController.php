<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Author;

use App\Models\Category;

use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product:: all();
        return view('admin.product.index',['product' => $data]);
        return view('user.homepage',['product' => $data]);
    }

    public function create()
    {
        $category = Category::all();
        $author = Author::all();
        return view('admin.product.create',['category' => $category],['author' => $author]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {  
            $validator = Validator::make($request->all(), [
                'product_name' => 'required',
                'description' => 'required',
                'product_img' => 'required|image|mimes:jpg,jpeg,png|max:1000',
                'product_price' => 'required',
                'product_year' => 'required',
                
            ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();    
         }  
        if ($request->hasFile('product_img')) {  
            $file = $request->file('product_img');
            $path = public_path('img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        } else {   
            $fileName = 'noname.jpg';
        }
            $newProduct = new Product();
            $newProduct->product_id = $request->product_id; 
            $newProduct->product_name = $request->product_name;
            $newProduct->product_price = $request->product_price;
            $newProduct->description = $request->description;
            $newProduct->product_img = $fileName;
            $newProduct->product_year = $request->product_year;
            $newProduct->product_cate = $request->product_cate;
            $newProduct->product_author = $request->product_author;
            $newProduct->save();
        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
        }    
    }

    public function edit($product_id)
    {
            $category = Category::all();
            $product = Product::find($product_id);
            return view('admin.product.edit', ['product' => $product],['categories'=>$category]);
    }

    public function update(Request $request, $product_id)
    {  
        if ($request->isMethod('POST')) {  
            $validator = Validator::make($request->all(), [
                'product_name' => 'required',
                'description' => 'required',
                'product_price' => 'required',
                'product_year' => 'required'   
            ]);
            if ($validator->fails()) {
                return redirect()->back()  
                ->withErrors($validator)
                ->withInput();
            }
            $fileName="";
            if ($request->hasFile('product_img')) {
                $file = $request->file('product_img');
                $path = public_path('img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);   
            }
            $product = Product::find($product_id);
            if ($product != null) {
                $product->product_name = $request->product_name; 
                $product->product_price = $request->product_price;
                $product->product_year = $request->product_year;
                $product->product_cate = $request->category;
                $product->description = $request->description;
                if ($fileName) {
                    $product->product_img = $fileName;
                }   
                $product->save();
                return redirect()->route('product.index')
                ->with('success', 'Product updated successfully');
            }
            else
            {       
                return redirect()->route('products.index')
                ->with('Error', 'Product not update');
            }
        } 
    }

    public function detail($product_id)
    {
        $products =Product::find($product_id);
        return view('user.detail', compact('products'));
    } 

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        $product->delete();
        return redirect()->route('product.index')
        ->with('success', 'Prodcut deleted successfully');
    }
}
