<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\postcontrollers;
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get ('user',[UserControllers::class,'index']);

Route::resource('user',UserControllers::class);


Route::resource('post',postcontrollers::class);
