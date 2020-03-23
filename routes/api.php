<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->group(function () {
    Route::get('/posts/unique', 'PostController@apiCheckUnique')->name('api.posts.unique');
    Route::resource('users/v1', 'API\UserController');
    Route::resource('roles/v1', 'API\RoleController');
    Route::resource('tickets', 'API\TicketController');

  });

//Route::resource('users', 'API\UserController');
//Route::resource('tickets', 'API\TicketController');
Route::post('addstaff', 'API\TicketController@addstaff')->name('tickets.addstaff');
