<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

// Route::get('/crud',[CrudController::class,'index'])->name('crud.index');
// Route::get('/crud/create',[CrudController::class,'create'])->name('crud.create');
// Route::post('/crud',[CrudController::class,'store'])->name('crud.store');
// Route::get('/crud/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
// Route::put('/crud/{id}', [CrudController::class, 'update'])->name('crud.update');
// Route::delete('/crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');

Route::resource('crud', CrudController::class);