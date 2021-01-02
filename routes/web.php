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

Route::get('/blogs','BlogController@index')->name('blogs');
<<<<<<< HEAD
Route::get('/create','BlogController@store')->name('store');
=======
Route::get('/create','BlogController@store')->name('store'); 
>>>>>>> kal-dev
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
