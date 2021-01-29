<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'AuthController@register');

Route::group(['middleware' => ['jwt.verify'], 'prefix'=>'api'], function() {
    Route::get('user', 'AuthController@getAuthenticatedUser');
    Route::get('menus', 'MenuController@getMenus'); 
});