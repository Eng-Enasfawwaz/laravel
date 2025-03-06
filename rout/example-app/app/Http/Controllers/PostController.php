<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Display a list of posts.";
    }

    public function create()
    {
        return "Show a form to create a new post.";
    }

    public function store(Request $request)
    {
        return "Save the new post to the database.";
    }

    public function show($id)
    {
        return "Display post with ID: $id";
    }

    public function edit($id)
    {
        return "Show a form to edit post with ID: $id";
    }

    public function update(Request $request, $id)
    {
        return "Update post with ID: $id";
    }

    public function destroy($id)
    {
        return "Delete post with ID: $id";
    }
}
