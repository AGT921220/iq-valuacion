<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fovissste\CreateFovisssteRequest;
use App\Http\Requests\Fovissste\StoreFovisssteRequest;
use App\Service;
use App\ServiceType;
use App\User;

class FovisssteController extends Controller
{
    public function create()
    {
        app(CreateFovisssteRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::FOVISSSTE)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/fovissste/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.fovissste.create', compact('appraisers'));
    }

    public function store(StoreFovisssteRequest $request)
    {
        $service = new Service();
        $service->user_id=auth()->user()->id;
        $service->service_type= ServiceType::FOVISSSTE;
        $service->appraiser_id=$request->input('appraiser_id');
        $service->status = Service::STATUS_CREATED;
        $service->save();
        return back()->with('success', Service::SERVICE_CREATE_SUCCESSFUL);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     dd($id);

    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
