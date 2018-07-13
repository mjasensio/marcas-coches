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

Route::get('/coches', 'CochesController@index');
Route::get('/coches/marcas', 'CochesController@marcas');
Route::get('/coches/listar_coches', 'CochesController@listar_coches');
Route::post('/coches/add', 'CochesController@add');
Route::post('/coches/edit', 'CochesController@edit');
Route::post('/coches/delete', 'CochesController@delete');
