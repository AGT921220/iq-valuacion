<?php

namespace App\Http\Controllers;

use App\Cotizacion;
use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    

    public function index(){

    	$cotizaciones = Cotizacion::all();

        return view('dashboard.cotizaciones.lista',compact('cotizaciones'));
    }
}
