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

Route::get('/', 'HomeController@getHome');


Route::group(['prefix' => 'productos'], function(){

    Route::get('/', 'ProductoController@getIndex');

    Route::get('show/{id}', 'ProductoController@getShow');

    Route::get('create', 'ProductoController@getCreate');

    Route::get('edit/{id}', 'ProductoController@getEdit');

    Route::put('changeRented/{id}', 'ProductoController@cambiarPendiente');

});

