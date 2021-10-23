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

// Creando ruta de listar
Route::get('/', 'UserController@list');

//Creando ruta del formulario de usuarios
Route::get('/form','UserController@userform');

//Creando ruta de guardar usuarios
Route::post('/save', 'UserController@save') ->name('save');

//Creando ruta para eliminar usuarios
Route::delete('/delete/{id}', 'UserController@delete') ->name('delete');
