<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

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

// Route to top page
Route::get('/', [homeController::class, 'index']);

//Laravel 8 (new way)
Route::get('/users', [UsersController::class, 'index']);

//Posts endpoint
Route::get('/posts', [PostsController::class, 'index']);













// Pattern is integer(multiple)
// Route::get('/users/{id}',
//   [UsersController::class, 'show'])->where('id', '[0-9]+');

// Pattern is string
Route::get('/users/{name}/{id}',
  [UsersController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+'
  ]);



//Laravel 8 (also new way)
  //Route::get('/users', 'App\Http\Controllers\UsersController@index');

//Before Laravel 8 (Gonna be error)
  //Route::get('/users', 'UsersController@index');

//Route to users - string
  // Route::get('/users', function () {
  //   return 'Welcome to the users page.';
  // });

//Route to users - Array(JSON)
  // Route::get('/users', function () {
  //   return['PHP', 'HTML', 'Laravel'];
  // });

//Route to users - JSON object
  // Route::get('/users', function (){
  //   return response()->json([
  //     'name' => 'Leo',
  //     'Age' => 23
  //   ]);
  // });

//Route to users - function
  // Route::get('/users', function () {
  //   return redirect('/');
  // });
