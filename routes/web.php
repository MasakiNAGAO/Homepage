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

Route::get('/', 'WebController@index');

Route::resource('texts', 'TextController');
Route::resource('categories', 'CategoryController');

// 管理画面関連
Route::get('/dashboard', 'DashboardController@index')->middleware('auth:admins');
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('login', 'Dashboard\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Dashboard\Auth\LoginController@login')->name('login');
});

// 各bladeへのリンク
Route::get('/profile', 'LinkController@profile');
Route::get('/aristotle', 'LinkController@aristotle');
Route::get('/contact', 'LinkController@contact');
Route::get('/en', 'LinkController@en');
Route::get('/isocrates', 'LinkController@isocrates');
Route::get('/minor_socratics', 'LinkController@minor_socratics');
Route::get('/on_pleasure', 'LinkController@on_pleasure');
Route::get('/philebus', 'LinkController@philebus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
