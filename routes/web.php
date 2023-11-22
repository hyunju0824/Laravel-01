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

//show
Route::get('posts/{post}', [helloController::class, 'show'])->name("posts.show");

//글쓰기 버튼
Route::get('/create',[helloController::class,'create'])->name('posts.create');

//post메소드를 가져와라, '주소설정', '업로드' 기능 작동해라, name으로 이름 정해주기
//create에서 받아온 데이터를 list의 postCreate로 보내준다. helloController의 upload클래스의 기능을 작동시킨다.
Route::post('/list/postCreate',[helloController::class,'upload'])->name('upload');

//수정
Route::get('posts/{post}/edit', [helloController::class,'edit'])->name("posts.edit");
//업데이트에 대한 메서드 - patch
Route::patch('posts/{post}', [helloController::class,'update'])->name("posts.update");

//삭제
Route::delete('posts/{post}', [helloController::class, 'destroy'])->name('posts.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
