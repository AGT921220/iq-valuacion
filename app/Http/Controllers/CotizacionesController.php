<?php

namespace App\Http\Controllers;

use App\Cotizacion;
use App\User;
use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    

    public function index(){

    	$cotizaciones = Cotizacion::all();

        $users = User::all();

        return view('dashboard.cotizaciones.lista', compact('cotizaciones'));
    }
}
