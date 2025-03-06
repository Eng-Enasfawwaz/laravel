<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;


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

Route::get( '/task1', function () {
    return 'hallo world';
});



Route::get('/task2/{name}', function ($name) {
    return "Hello, {$name}!";
});

 
Route::get('/task3/{age?}', function ($age = null) {
    if ($age) {
        return "You are {$age} years old.";
    } else {
        return "Age not provided.";
    }
});

    Route::get('/task4', [WelcomeController::class, 'index']);



    Route::get('/task5', function () {
    return 'Welcome to Dashboard';
})->name('dashboard');



    Route::prefix('task6')->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Manage Users';
    });

    Route::get('/settings', function () {
        return 'Admin Settings';
    });
});

    Route::get('/task7/{id}', function ($id) {
    return "User ID: $id";
})->where('id', '[0-9]+');


    Route::fallback(function () {
    return response()->json(['message' => 'Page not found.'], 404);
});


    Route::resource('task9', PostController::class);


    Route::get('/{task10}/{id}', function ($category, $id) {
        return "Category: $category, ID: $id";
    });




    Route::get('/task11/{page?}', function ($page = 1) {
        return "Viewing page $page";
    });



    Route::get('/home', [HomeController::class, 'redirectToWelcome']);



    Route::get('/task13', [PageController::class, 'welcom']);




