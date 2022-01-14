<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')//Usa un prefijo de ruta
->middleware('auth')//Valida que el usuario este logueado
->group(function () {//Agrupa todas las rutas

    Route::resource('/usuarios', 'UsersController');
    
    Route::get('{locale}', function ($locale) {
        //Toma cualquier ruta y te redirige al home
        return redirect('/home');
    });
    
});

Route::get('{locale}', function ($locale) {
            //Toma cualquier ruta y te redirige al home
    return redirect('/home');
});



