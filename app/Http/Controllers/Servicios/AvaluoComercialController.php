<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvaluoComercial\CreateAvaluoComercialRequest;
use App\Http\Requests\AvaluoComercial\StoreAvaluoComercialRequest;
use App\Service;
use App\ServiceType;
use App\User;

class AvaluoComercialController extends Controller
{
    public function create()
    {
        app(CreateAvaluoComercialRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::AVALUO_COMERCIAL)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/avaluo-comercial/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.avaluo_comercial.create', compact('appraisers'));
    }

    public function store(StoreAvaluoComercialRequest $request)
    {
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->service_type = ServiceType::AVALUO_COMERCIAL;
        $service->appraiser_id = $request->input('appraiser_id');
        $service->status = Service::STATUS_CREATED;
        $service->save();
        return back()->with('success', Service::SERVICE_CREATE_SUCCESSFUL);
    }
}
