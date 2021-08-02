<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

//Route::get( '/', [CategoryController::class, 'app'] );

//Route::get( 'layouts.app', [CategoryController::class, 'app'] );

Auth::routes();


Route::resource('categories', CategoryController::class);

Route::resource('posts', PostController::class);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
