<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        // $data = Category::all();
        // return view('admin.category.index');
        return Category::all();
    } 

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required' 
            ]);
            if ($validator->fails()) {  
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
            $newCategory = new Category();
            $newCategory->name = $request->name;
            $newCategory->description = $request->description;
            $newCategory->save();
            return redirect()->route('category.index')
                ->with('success', 'Category created successfully.');
        }
    }

    // public function show($cate_id)
    // { 
    //     $category = Category::find($cate_id);
    //     return view('category.show', ['category' => $category]);
    // }

    public function update(Request $request, $id)
    { 
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
            ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $category = Category::find($id);
        if ($category != null) {
            $category->name = $request->name;
            $category->description = $request->description;
            $category->save();
            return redirect()->route('category.index') 
            ->with('success', 'Category updated successfully');    
        }  
        else 
        {
            return redirect()->route('category.index')
            ->with('Error', 'Category not update');
        } 
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
