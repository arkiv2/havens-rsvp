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
    return view('welcome');
});

Auth::routes();

Route::post('/accept', function() {
	dd(request()->all());
});
Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'HomeController@dashboard');

Route::group(['prefix' => 'social/facebook'], function () {
    Route::get('redirect', 'SocialAuthController@redirect');
    Route::get('callback', 'SocialAuthController@callback');
});