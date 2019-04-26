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

Route::view('/', 'index');
Route::view('/preguntas-frecuentas', 'faq')->name('faq');
Route::view('/membranas-asfalticas', 'productos.membranas-asfalticas')->name('asfalticas');
Route::view('/membranas-liquidas', 'productos.membranas-liquidas')->name('liquidas');
Route::view('/imprimantes', 'productos.imprimantes')->name('imprimantes');
Route::view('/terminacion', 'productos.terminacion')->name('terminacion');

Route::view('/membranas-asfalticas/decorativas/muros-y-paredes', 'productos.muros-y-paredes')->name('muros-paredes');