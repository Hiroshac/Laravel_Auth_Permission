<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){

        $permission = Permission::get();

        return view('role-permission.permission.index',['permissions' => $permission]);
    }
    public function create(){
        
        return view('role-permission.permission.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','unique:permissions,name']
        ]);

        Permission::create([
            'name' => $request->name
        ]);

        return redirect('permissions')->with('status','Successfully created');
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(){
        
    }
}
