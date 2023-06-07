<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Blog_UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;

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

Route::get('/coursehome', [CourseController::class, 'index'])->name('coursehome');
Route::get('course/create', [CourseController::class, 'create'])->name('coursecreate');
Route::get('course/{course}/edit', [CourseController::class, 'edit'])->name('courseedit');
Route::get('course/{course}', [CourseController::class, 'show'])->name('courseshow');
Route::post('course', [CourseController::class, 'store'])->name('coursestore');
Route::put('course/{course}', [CourseController::class, 'update'])->name('courseupdate');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('coursedelete');

Route::get('/enrollmenthome', [EnrollController::class, 'index'])->name('enrollmenthome');
Route::get('enrollment/create', [EnrollController::class, 'create'])->name('enrollmentcreate');
Route::get('enrollment/{enrollment}/edit', [EnrollController::class, 'edit'])->name('enrollmentedit');
Route::get('enrollment/{enrollment}', [EnrollController::class, 'show'])->name('enrollmentshow');
Route::post('enrollment', [EnrollController::class, 'store'])->name('enrollmentstore');
Route::put('enrollment/{enrollment}', [EnrollController::class, 'update'])->name('enrollmentupdate');
Route::delete('enrollment/{enrollment}', [EnrollController::class, 'destroy'])->name('enrollmentdelete');

