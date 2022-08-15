<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::all();
        return view('admin.category.index', ['category' =>$data]);
        // return Category::all();
    } 

    public function create()
    {
        return view('admin.category.create');
    } 
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
            'cate_id' => 'required',
            'cate_name' => 'required',         
            'cate_des' => 'required'        
            ]);
            $incrementing = true;
            if ($validator->fails()) {      
            return redirect()->back()     
            ->withErrors($validator)    
            ->withInput();   
            }
            $newCategory = new Category(); 
            $newCategory->cate_id = $request->cate_id;  
            $newCategory->cate_name = $request->cate_name; 
            $newCategory->cate_des = $request->cate_des;  
            $newCategory->save();
            return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');
        }
    }
    public function edit($cate_id)
    {
        $category = Category::find($cate_id);
        return view('admin.category.edit', ['category' => $category]);
    }  
    public function update(Request $request, $cate_id){
        // Tìm đến đối tượng muốn update
        $category = Category::find($cate_id);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        dd($data);

        // Update user
        Category::update($data);
        echo"success update category";
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'Category deleted successfully');
    }
}
