<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\homeController;

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

//Laravel 8 (new way)
Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/about', [UsersController::class, 'about']);

Route::get('/top', [homeController::class, 'index']);


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
