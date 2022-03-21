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
$prefix = "Web";
Route::get('/', $prefix.'\HomeController@index')->name('homes');
Route::resource('/homecategories',$prefix.'\HomeCategory');
Route::resource('/orders',$prefix.'\OrderController');
Route::resource('/searchs',$prefix.'\SearchController');
Route::get('/show/', $prefix.'\HomeController@show')->name('show');
Route::namespace('user')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login')->name('user.login');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home', 'HomeController@index');
    });
});
