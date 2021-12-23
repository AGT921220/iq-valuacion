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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//PERFIL DE USUARIO
Route::get('/dashboard/perfil', 'UsersController@perfil');

//SOLICITAR AVALUO
Route::get('/dashboard/avaluos', 'AvaluosController@index');
Route::get('/dashboard/avaluos/nuevo', 'AvaluosController@solicitar');
Route::post('/avaluos/solicitar', 'AvaluosController@solicitar_send');






//PROPIEDADES
Route::get('/dashboard/propiedades', 'PropiedadesController@index')->name('ver_propiedades');
Route::post('/dashboard/propiedades/guardar', 'PropiedadesController@guardar')->name('guardar_propiedad');
Route::get('/dashboard/propiedades/nueva', 'PropiedadesController@create')->name('crear_propiedad');
Route::get('/dashboard/propiedades/editar/{id}', 'PropiedadesController@editar')->name('editar_propiedad');
Route::delete('/dashboard/propiedades/eliminar/{id}', 'PropiedadesController@eliminar')->name('eliminar_propiedad');
Route::post('/dashboard/propiedades/store', 'PropiedadesController@store')->name('editar.guardar_propiedad');

//COTIZACIONES
Route::get('/dashboard/cotizaciones', 'CotizacionesController@index')->name('ver_cotiaciones');
