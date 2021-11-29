<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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
   return view('home', [
      "title" => "Home",
      "active" => "home"
   ]);
});
Route::get('/test', function () {
   // dd(request('jajal'));
   $collection = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
   return view('home', [
      "title" => "Home",
      "active" => "home",
      "test" => collect($collection)->push(request('jajal'))
   ]);
});

Route::get('/about', function () {
   return view('about', [
      "title" => "About",
      "active" => "home",
      "name" => "ilham Gilang",
      "email" => "gepedevelop@gmail.com",
      "image" => "profile.jpg"
   ]);
});





Route::get('/posts', [PostController::class, 'index']);


//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


// //halaman categories
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

//list categories
Route::get('/categories', [CategoryController::class, 'index']);

// //user post
// Route::get('/author/{author:username}', [UserController::class, 'show']);


// login
Route::get('/login', [LoginController::class, 'index']);
//register
Route::get('/register', [RegisterController::class, 'index']);
