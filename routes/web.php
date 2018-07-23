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
    return view('inicio');
});

Route::get('/discos', array('as' => 'discos', 'uses' => 'DiscosController@index'));
Route::get('/editar-disco/{id}', array('as' => 'editar-disco', 'uses' => 'DiscosController@edit'));
Route::post('/update/{id}', array('as' => 'update', 'uses' => 'DiscosController@update'));
Route::get('/delete/{id}', array('as' => 'delete', 'uses' => 'DiscosController@destroy'));

Route::get('/cantantes', array('as' => 'cantantes', 'uses' => 'CantanteController@index'));

