<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Map Individual Route exemple
//      Route::get('/art', array(
//        'uses' => 'artista\\ArtistaController@index2'
//      ));
Route::get( '/',function () {
   return View::make('principal');
});

//resourcefull controller
Route::resource('artista', 'artista\\ArtistaController');

//rota para controller figura
Route::resource('figura', 'figura\\FiguraController');


//user autentication route
//Route::get('/', array('as' => 'home', function () {
  //  return View::make('home');
//}));

//Route::get('login', array('as' => 'login', function () {
//    return View::make('login');
//}))->before('guest');

//Route::post('login', function () { });
//POST from user form
//Route::post('login', 'UserController@login' );

//Route::get('logout', array('as' => 'logout', function () { }));

//Route::get('profile', array('as' => 'profile', function () { }));

//Route::get('login', array('as' => 'login', function () { }))->before('guest');

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');
Route::get( 'user/logout',                 'UserController@logout');
//custom
Route::get( 'user/dashboard',                 'UserController@dashboard');
