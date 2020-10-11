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

// Route::get('/', function () {
//     return view('pages/inicio');
// });

// Route::group(['prefix' => '/producto'], function () {
//     Route::view('/acrilico', 'pages/acrilicos');
// });

Route::view('/', 'pages/inicio');

Route::view('/nosotros', 'pages/nosotros');

Route::view('servicios', 'pages/servicios');

Route::view('locales', 'pages/locales');

Route::view('contactanos', 'pages/contactanos')->name('contactanos');

Route::post('contactanos', 'MessagesController@store');

Route::group(['prefix' => 'productos'], function () {
    Route::view('/','pages/products/accesorios');
    Route::view('acrilico', 'pages/products/acrilicos');
    Route::view('aluminio/serie', 'pages/products/aluminio-serie');
    Route::view('aluminio/perfil', 'pages/products/aluminio-perfil');
    Route::view('policarbonato', 'pages/products/policarbonato');
    Route::view('vidrios/laminado', 'pages/products/vidrio-laminado');
    Route::view('vidrios/incoloro', 'pages/products/vidrio-incoloro');
    Route::view('vidrios/coloro', 'pages/products/vidrio-coloro');
    Route::view('vidrios/reflejante', 'pages/products/vidrio-reflejante');
    Route::view('vidrios/catedral', 'pages/products/vidrio-catedral');
    Route::view('vidrios/espejo', 'pages/products/vidrio-espejo');
});


