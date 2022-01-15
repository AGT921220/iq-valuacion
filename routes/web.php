<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')
    ->middleware('auth')
    ->group(function () {

        Route::resource('/usuarios', 'UsersController');

        Route::prefix('servicios')
            ->group(function () {
                Route::resource('/infonavit', 'Servicios\InfonavitController');
                Route::resource('/infonavit/detail', 'Servicios\InfonavitDetailController');
            });
        Route::get('{locale}', function ($locale) {
            return redirect('/home');
        });
    });

Route::get('{locale}', function ($locale) {
    return redirect('/home');
});
