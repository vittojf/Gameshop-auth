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
    return view('Gameshop');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/usuario','HomeController@in')->name('usua');


Route::get('admin/juego', 'HomeController@admin')->name('administrador');

Route::post('admin/juegos','HomeController@crear')->name('juegos.ingresar');

Route::get('/home/catalogo','HomeController@game')->name('catalogo');
