<?php

namespace App\Http\Controllers\Servicios;

use App\DetaillInfonavit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfonavitDetailController extends Controller
{
    public function index()
    {
        dd(1);
    }
    public function create()
    {   

        return view("dashboard.services.infonavit.detalles.create");
    }

    public function store(Request $request)
    {
        
        $userId = auth()->user()->id;
        $request->merge(['user_id' => $userId]);
        DetaillInfonavit::create($request->all());
       
        return back()->with('success');
        

    }

    public function show(){
        dd(1);
    }
}
