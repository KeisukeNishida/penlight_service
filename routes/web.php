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

/************************************************
 *  管理者画面ルーティング(非ログイン)
 ************************************************/
Route::middleware('guest:admin')->group(function(){
    Route::get('/',   'Admin\Auth\LoginController@showLoginForm')->name('admin/login');
    Route::get('/login',   'Admin\Auth\LoginController@showLoginForm')->name('admin/login');
    Route::post('/login',   'Admin\Auth\LoginController@login')->name('admin/login/submit');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
