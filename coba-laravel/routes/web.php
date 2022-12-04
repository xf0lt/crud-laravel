<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use PharIo\Manifest\Author;



// use App\Models\Post;
// use App\Models\User;
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
        "title" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "kira deatnote",
        "email" => "kira@gmail.com",
        "image" => "kira.jpg"
    ]);
});


Route::get('/posts ', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// categories
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});


// ! ROUTE LOGIN
Route::get('/login', [LoginController::class, 'index']);

// ! ROUTE REGISTER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// single categories
// Route::get('/categories/{category:slug}', function(Category $category) {
   //  return view('posts', [
      //   'title' => "Post By Category : $category->name",
      //   'active' => 'categories',
      //   'posts' => $category->posts->load('category', 'author')
   //  ]);
// });


// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });