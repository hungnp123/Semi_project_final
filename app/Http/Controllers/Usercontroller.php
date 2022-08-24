<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;
class Usercontroller extends Controller
{
    
    public function index()
    {
        $user = User::all();

        return view('admin.users.index',compact('user'));
    }

    
    public function create()
    {
        //
        return view('admin.users.create');
    }
    public function store(Request $request)
    {   
        $user = new User();
        $user->user_name = $request->input('user_name');
        $user->full_name= $request->input('full_name');
        $user->password= $request->input('password');
        $user->role= $request->input('role');
       

       
        
       
        $user->save();
        return redirect()->back()->with('status','added Successfully');
    }

   
    public function show()
    {
        //
    }

   
    public function edit($id)
    {
        $user = User::find($id);
 
        return view('admin.users.edit',compact('user'));
    }

   
    public function update(Request $request, $id)
    {   
        $user = User::find($id);
        $user->user_name = $request->input('user_name');
        $user->full_name= $request->input('full_name');
        $user->password= $request->input('password');
        $user->role= $request->input('role');
       


        
      
        $user->save();
        return redirect()->back()->with('status','user update Successfully');
    }

    
    public function destroy($id)
    {
        //
        $user = User::find($id);
        

               

        $user->delete(); 
        
        return redirect()->back()->with('status','user Delete Successfully');
        
        

    }
}
