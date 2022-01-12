<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//PERFIL DE USUARIO
Route::get('/dashboard/perfil', 'UsersController@perfil');



Route::prefix('dashboard')
->middleware('auth')
->group(function () {

    Route::resource('/usuarios', 'UsersController');


    Route::get('{locale}', function ($locale) {
        return redirect('/home');
    });
    
});

Route::get('{locale}', function ($locale) {
    return redirect('/home');
});


