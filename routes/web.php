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
                //INFONAVIT
                Route::resource('/infonavit', 'Servicios\InfonavitController');
                Route::resource('/infonavit/detalle', 'Servicios\InfonavitDetailController');
                //FOVISSSTE
                Route::resource('/fovissste', 'Servicios\FovisssteController');

            });
        Route::get('{locale}', function ($locale) {
            return redirect('/home');
        });
    });

Route::get('{locale}', function ($locale) {
    return redirect('/home');
});
