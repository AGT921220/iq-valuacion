<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaluo;

class AvaluosController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth');
        }


    public function solicitar(){

        $avaluo = Avaluo::
        where('id_user',auth()->user()->id)
        ->where('status', 'like', '%Fase1%')
        ->orWhere('status', 'like', '%Fase2%')
        ->get();


        if(count($avaluo)<=0){
            return view('dashboard.avaluos.solicitar');
        }else if($avaluo[0]->status=='Fase1'){
            return view('dashboard.avaluos.fase2');
        }


return $avaluo;



    }

    public function solicitar_send(Request $request){

//        dd($request);

        $avaluo = new Avaluo();
        $avaluo->id_user=auth()->user()->id;
        $avaluo->calle = $request->calle;
        $avaluo->numero = $request->numero;
        $avaluo->colonia = $request->colonia;
        $avaluo->cp = $request->cp; 
        $avaluo->municipio = $request->municipio;
        $avaluo->estado = $request->estado;
        $avaluo->antiguedad = $request->antiguedad;
        $avaluo->terreno = $request->terreno; 
        $avaluo->construccion = $request->construccion;
        $avaluo->manzana = $request->manzana;
        $avaluo->lote = $request->lote;
        $avaluo->calles1 = $request->calles1; 
        $avaluo->calles2 = $request->calles2;
        $avaluo->status='Fase1';
        $avaluo->save();

        return back()->with('success','Fase 1 finalizada');
        
    }


}
