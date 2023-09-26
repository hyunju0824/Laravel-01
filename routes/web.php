<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\helloController;

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


Route::get('/',[helloController::class,'list'])->name('posts.list');
Route::get('/show', function () {
    return view('show');
})->name('posts.show');
Route::get('/create',[helloController::class,'create'])->name('posts.create');

Route::post('/list/postCreate',[helloController::class,'upload'])->name('upload');