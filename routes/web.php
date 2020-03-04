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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/servicios/create', 'ServicioController@create')->name('servicios.create');
Auth::routes();
Route::post('/servicios/create', 'ServicioController@store')->name('servicios.store');

Route::get('/register',function(){
		return view('auth.register');
})->name('register');