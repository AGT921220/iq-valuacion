<?php

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//PERFIL DE USUARIO
Route::get('/dashboard/perfil', 'UsersController@perfil');
