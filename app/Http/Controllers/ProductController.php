<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product:: all();
        return view('admin.product.index',['product' => $data]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {  
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'product_img' => 'required|image|mimes:jpg,jpeg,png|max:1000',
                'price' => 'required'
            ]);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();    
         }  
        if ($request->hasFile('imageProduct')) {  
            $file = $request->file('imageProduct');
            $path = public_path('image/product');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $fileName);
        } else {   
            $fileName = 'noname.jpg';
        }
            $newProduct = new Product();
            $newProduct->name = $request->name;
            $newProduct->price = $request->price;
            $newProduct->description = $request->description;
            $newProduct->image = $fileName;
            $newProduct->category_id = $request->category;
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
