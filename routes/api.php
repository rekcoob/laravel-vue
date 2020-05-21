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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List posts
Route::get('posts', 'PostController@index');

// Get single post
Route::get('post/{id}', 'PostController@show');

// Create new post
Route::get('post', 'PostController@store');

// Update post
Route::put('posts', 'PostController@store');

// Delete post
Route::delete('posts', 'PostController@destroy');
