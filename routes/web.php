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
                Route::resource('/fovissste/detalle', 'Servicios\FovisssteDetailController');
                //AVALUO TDC
                Route::resource('/avaluo-traslado-de-dominio', 'Servicios\AvaluoTDCController');
                Route::resource('/avaluo-traslado-de-dominio/detalle', 'Servicios\AvaluoTDCDetailController');
                //AVALUO COMERCIAL
                Route::resource('/avaluo-comercial', 'Servicios\AvaluoComercialController');
                Route::resource('/avaluo-comercial/detalle', 'Servicios\AvaluoComercialDetailController');

            });
        Route::get('{locale}', function ($locale) {
            return redirect('/home');
        });
    });

Route::get('{locale}', function ($locale) {
    return redirect('/home');
});
