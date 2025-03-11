<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $users = User::with('phone')->get(); // Eager load phone data
        return view('index', compact('users'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string|max:15',
        ]);

        $user = User::create($request->only(['name', 'email']));
        $user->phone()->create(['phone_number' => $request->phone_number]);

        return redirect()->route('one.index');
    }

    public function show($id)
    {
        $user = User::with('phone')->findOrFail($id);
        return view('show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone_number' => 'required|string|max:15',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->only(['name', 'email']));
        $user->phone->update(['phone_number' => $request->phone_number]);

        return redirect()->route('one.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('one.index');
    }
}
