<?php

namespace App\Http\Controllers;
use App\Models\phone;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index()
    {
        $users = User::with('phone')->get(); 
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
     
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string|max:15',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

    
        $user->phone()->create([
            'number' => $request->phone_number,
        ]);

        return redirect()->route('user.index');
    }

  
    public function show(User $user)
    {
        $user->load('phone'); 
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        $user->load('phone'); 
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:15',
        ]);

    
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

      
        $user->phone()->updateOrCreate(
            ['user_id' => $user->id], 
            ['number' => $request->phone_number] 
        );

        return redirect()->route('user.index');
    }

   
    public function destroy(User $user)
    {
        $user->phone()->delete(); 
        $user->delete(); 
        return redirect()->route('user.index');
    }



}

