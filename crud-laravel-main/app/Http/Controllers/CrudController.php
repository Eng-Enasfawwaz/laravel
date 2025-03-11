<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all();
        return view('crud.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cruds = new crud();
        $cruds->name = $request->name;
        $cruds->phone = $request->phone;
        $cruds->location = $request->location;
        $cruds->email = $request->email;
        $cruds->save();
        return redirect('crud');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $crud ,$id)
    {
        $crud = Crud::findOrFail($id); 
        return view('crud.edit', compact('crud')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crud $crud ,$id)
    {
        $cruds = Crud::findOrFail($id);
        $cruds->name = $request->name;
        $cruds->phone = $request->phone;
        $cruds->location = $request->location;
        $cruds->email = $request->email;
        $cruds->save();
        return redirect('crud');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();
        return redirect()->route('crud.index');
    }
}
