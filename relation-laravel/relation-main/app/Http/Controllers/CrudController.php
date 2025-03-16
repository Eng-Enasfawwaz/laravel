<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class CrudController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));

    }
    public function create(){
    return view('users.create');
    }
    public function store(Request $request){
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,
         

        ]);
        return redirect( 'users');
    }
    public function show($id){

    }
    public function edit($id){
        $users = User::with('phone')->findOrFail($id);
        return view('users.edit',compact('users'));
    }
    public function update(Request $request,){
        $users = User::findOrFail([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
           
        ]);
        
        return redirect('users');
    }
    public function destroy($id){
        $users = User::findOrFail($id);
        $users->delete();
        return redirect( 'users');
    }
}
