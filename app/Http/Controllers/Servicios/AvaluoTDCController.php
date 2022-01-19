<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvaluoTDC\CreateAvaluoTDCRequest;
use App\Http\Requests\AvaluoTDC\StoreAvaluoTDCRequest;
use App\Service;
use App\ServiceType;
use App\User;

class AvaluoTDCController extends Controller
{
    public function create()
    {
        app(CreateAvaluoTDCRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::AVALUO_TDC)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/avaluo-traslado-de-dominio/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.avaluo_tdc.create', compact('appraisers'));
    }

    public function store(StoreAvaluoTDCRequest $request)
    {
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->service_type = ServiceType::AVALUO_TDC;
        $service->appraiser_id = $request->input('appraiser_id');
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
