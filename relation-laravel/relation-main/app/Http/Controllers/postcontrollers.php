<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class postcontrollers extends Controller
{
    public function index(){
        $posts=Post::all();
        return view("posts.index",compact('posts'));
    }
    public function create(){
        $users= user::all();
   return view('posts.create',compact('users'));
    }
    public function store(Request $request){
        $posts = post::create([
            'title' => $request->title,
            'body' => $request->body,
       
        ]);
        return redirect( 'posts');
     
    }
    public function show($id){
    $posts = Post::findOrFail($id);
    return view('posts.show', compact('posts'));
    }
    public function edit($id){
        $posts = post::findOrFail($id);
        $users = user::all(); 
        return view('posts.edit',compact('','users'));
            
    }
    public function update(Request $request, $id){
        $posts = Post::findOrFail($id);
        $posts->update($request->all());

        return redirect()->route('post.index');

    }
    public function destroy($id){
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect()->route('post.index');
    }

}
