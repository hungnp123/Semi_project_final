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
        return view('/admin.layout.homapage',['product' => $data]);
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
            $newProduct->product_cate = $request->category;
            $newProduct->product_author = $request->author;
            $newProduct->save();
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
        }    
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::with('category') -> find($id);
            return view('product.edit', ['product' => $product, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {  
        if ($request->isMethod('POST')) {  
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required'   
            ]);
            if ($validator->fails()) {
                return redirect()->back()  
                ->withErrors($validator)
                ->withInput();
            }
            $fileName="";
            if ($request->hasFile('imageProduct')) {
                $file = $request->file('imageProduct');
                $path = public_path('image/product');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $fileName);   
            }
            $product = Product::find($id);
            if ($product != null) {
                $product->name = $request->name; 
                $product->price = $request->price;
                $product->category_id = $request->category;
                $product->description = $request->description;
                if ($fileName) {
                    $product->image = $fileName;
                }   
                $product->save();
                return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');
            }
            else
            {       
                return redirect()->route('products.index')
                ->with('Error', 'Product not update');
            }
        } 
    }

    public function delete($id)
    {
        $product = Product::find($id); 
        $image_path = "/image/product/.$product->image"; // Value is not URL but directory file path
        if(File::exists($image_path)) { 
            File::delete($image_path);    
        }
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
