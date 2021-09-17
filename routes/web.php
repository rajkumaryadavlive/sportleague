<?php

use Illuminate\Support\Facades\Route;

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

Route::get('feature', function () {
    return view('feature');
});

Route::get('player',function(){
    return view('player');
});

Route::get('blog-list',function(){
    return view('blog-list');
});

Route::get('blog-detail',function(){
    return view('blog-details');
});

Route::get('shop-detail',function(){
    return view('shop-details');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
