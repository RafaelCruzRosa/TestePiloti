<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    
    
    public function index()
    {
        return view('admin.home');
    }

   
    public function create()
    {
        return view('admin.create');
    }

   
    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required',
                'admin' => 'required',
                'password'=>'required|min:8',
                'password_confirmation'=>'required|min:8|same:password'
            ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Bcrypt($request->password);
            $user->is_admin = $request->admin;
            
            $user->save();
        
        return redirect()->back();
    }

   
    public function show()
    {
        $users = User::all();
        
        return view('admin.users')->with('users',$users);
    }

  
    public function edit($id)
    {        
        $user = User::find($id);
        
        return view('admin.edit')->with('user',$user);
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required',
                'admin' => 'required',
                'password'=>'required|min:8',
                'password_confirmation'=>'required|min:8|same:password'
        ]);
        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_admin = $request->admin;
        $user->password = Bcrypt($request->password);
        
        $user->save();
        
        return redirect()->route('admin.users');
    }

    
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();
        
        return redirect()->route('admin.users');
    }
    
    public function usersDeleted()
    {
        $users = User::onlyTrashed()->get();
        
        return view('admin.deletedUsers')->with('users',$users);
    }
    
    public function desfazer($id)
    {
        $user = User::withTrashed()->find($id);
                
        $user->deleted_at = NULL;
            
        $user->save();
        
        return redirect()->back();
    }
}
