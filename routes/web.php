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
    return view('register');
});

Route::get('/', 'infobarangcontroller@index');
Route::post('/infobarang/create', 'infobarangcontroller@create');
Route::get('/barang/{id}/edit', 'infobarangcontroller@edit');
Route::post('/barang/{id}/update', 'infobarangcontroller@update');
Route::get('/barang/{id}/delete', 'infobarangcontroller@delete');