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

Route::get('home', 'HomeController@index');

Route::get('tips', 'TipsController@show');

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('lokasi', 'LokasiController@index');


Route::get('tipsAdmin', 'TipsAdminController@data');

Route::get('admin/create', 'TipsAdminController@create');

Route::Post('tipsAdmin/store', 'TipsAdminController@store');

Route::get('admin/editTips/{id}', 'TipsAdminController@edit');

Route::patch('tipsAdmin/{id}', 'TipsAdminController@update');

Route::delete('tipsAdmin/{id}', 'TipsAdminController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@data');

Route::get('admin/editAdmin/{id}', 'AdminController@edit');
Route::Post('admin', 'AdminController@store');
Route::patch('admin/{id}', 'AdminController@update');
Route::delete('admin/{id}', 'AdminController@destroy');
