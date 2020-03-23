<?php

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
    return view('dashboard');
    //dd(Adldap::auth()->attempt("uid=artith.wo,ou=kk,ou=People,dc=rmuti,dc=ac,dc=th","vkmb9pN1234",true));
});
Route::get('/home', function () {
    return view('dashboard');
    //dd(Adldap::auth()->attempt("uid=artith.wo,ou=kk,ou=People,dc=rmuti,dc=ac,dc=th","vkmb9pN1234",true));
});

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function () {
//Route::prefix('manage')->group(function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
    Route::resource('/posts', 'PostController');
  });

  Route::prefix('staff')->middleware('role:editor|author|contributor')->group(function () {
    //Route::prefix('manage')->group(function () {
        Route::get('/', 'StaffController@index');
        //Route::get('/dashboard', 'TicketController@dashboard')->name('tickets.dashboard');
        Route::resource('ticket', 'StaffController',['as' => 'staff']);
       // Route::resource('/ticket/create', 'TicketController');
        //Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
        //Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
        //Route::resource('/posts', 'TicketController');
      });

  Route::prefix('user')->middleware('ldap')->group(function () {
    //Route::prefix('manage')->group(function () {
        Route::get('/', 'TicketController@index');
        //Route::get('/dashboard', 'TicketController@dashboard')->name('tickets.dashboard');
        Route::resource('/ticket', 'TicketController');
       // Route::resource('/ticket/create', 'TicketController');
        //Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
        //Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
        Route::resource('/posts', 'TicketController');
      });

Route::get('/home', 'HomeController@index');
