<?php

namespace App\Http\Controllers\Servicios;

use App\DetaillInfonavit;
use App\Http\Controllers\Controller;
use App\Http\Requests\Infonavit\CreateInfonavitDetailRequest;
use App\Http\Requests\Infonavit\CreateInfonavitRequest;
use App\InfonavitDetail;
use Illuminate\Http\Request;

class InfonavitDetailController extends Controller
{
    // public function index()
    // {
    //     dd(1);
    // }
    public function create()
    {
        app(CreateInfonavitRequest::class);
        return view("dashboard.services.infonavit.detalles.create");
    }

    public function store(CreateInfonavitDetailRequest $request)
    {

        $userId = auth()->user()->id;
        $request->merge(['user_id' => $userId]);
        InfonavitDetail::create($request->all());

        return back()->with('success');
    }

    // public function show()
    // {
    //     dd(1);
    // }
}
