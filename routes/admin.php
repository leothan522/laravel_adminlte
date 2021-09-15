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

Route::middleware(['auth', 'isadmin', 'estatus', 'permisos'])->prefix('/dashboard')->group(function () {

    Route::match(
        ['get', 'post'],
        '/navbar/search',
        'Admin\SearchController@showNavbarSearchResults'
    )->name('search.navbar');

    Route::get('usuarios/{usuario?}', 'Admin\UsersController@index')->name('usuarios.index');
    Route::get('export/usuarios', 'Admin\UsersController@export')->name('usuarios.excel');


});
