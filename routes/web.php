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

Route::group(['middleware' => 'auth'], function() {
    Route::get('/blogs','BlogController@index')->name('blogs');
    Route::post('/create','BlogController@store')->name('store');  
    Route::post('/add-comment/{id}','CommentController@addComment'); 
    Route::post('/add-reply','ReplyController@addReply');
    Route::get('/delete-comment/{id}','CommentController@deleteComment'); 
    Route::get('/create-blog','BlogController@createBlog'); 
    Route::get('/blog-detail/{id}','BlogController@blogDetail')->name('blog-detail'); 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
