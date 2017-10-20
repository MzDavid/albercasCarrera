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
    return view('index.index');
});

Route::get('/nosotros', 'CategoriasController@nosotros');
Route::get('/blog', 'CategoriasController@blog');
Route::get('/contacto', 'CategoriasController@contacto');
Route::get('/galeria', 'CategoriasController@galeria');
Route::get('/precios', 'CategoriasController@precios');
Route::get('/servicios', 'CategoriasController@servicios');
Route::get('/tips', 'CategoriasController@tips');
Route::any('/form-message', 'CategoriasController@formulario');
Route::any('/email-response-contact', 'CategoriasController@email_response_contact');
