<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Blog_UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('post/create', [PostController::class,'create'])->name('create');
Route::post('post',[PostController::class, 'store'])->name('store');
Route::get('post/{post}/edit',[PostController::class, 'edit'])->name('edit');
Route::get('post/{post}',[PostController::class, 'show'])->name('show');
Route::put('post/{post}',[PostController::class, 'update'])->name('update');
Route::delete('post/{post}',[PostController::class, 'destroy'])->name('delete');

Route::get('/userhome', [Blog_UserController::class, 'index'])->name('userhome');
Route::get('blog_user/create', [Blog_UserController::class, 'create'])->name('usercreate');
Route::get('blog_user/{blog_user}/edit', [Blog_UserController::class, 'edit'])->name('useredit');
Route::get('blog_user/{blog_user}', [Blog_UserController::class, 'show'])->name('usershow');
Route::post('blog_user', [Blog_UserController::class, 'store'])->name('userstore');
Route::put('blog_user/{blog_user}', [Blog_UserController::class, 'update'])->name('userupdate');
Route::delete('blog_user/{blog_user}', [Blog_UserController::class, 'destroy'])->name('userdelete');

