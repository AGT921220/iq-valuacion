<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Estimacion\CreateEstimacionRequest;
use App\Http\Requests\Estimacion\StoreEstimacionRequest;
use App\Service;
use App\ServiceType;
use App\User;

class EstimacionController extends Controller
{
    public function create()
    {
        app(CreateEstimacionRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::VALUE_ESTIMATION)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/estimacion-de-valor/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.estimacion.create', compact('appraisers'));
    }

    public function store(StoreEstimacionRequest $request)
    {
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->service_type = ServiceType::VALUE_ESTIMATION;
        $service->appraiser_id = $request->input('appraiser_id');
        $service->status = Service::STATUS_CREATED;
        $service->save();
        return back()->with('success', Service::SERVICE_CREATE_SUCCESSFUL);
    }
}
