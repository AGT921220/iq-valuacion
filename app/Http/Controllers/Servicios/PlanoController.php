<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Plano\CreatePlanoRequest;
use App\Http\Requests\Plano\StorePlanoRequest;
use App\Service;
use App\ServiceType;
use App\User;

class PlanoController extends Controller
{
    public function create()
    {
        app(CreatePlanoRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::PLAN)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/plano-catastral/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.plano.create', compact('appraisers'));
    }

    public function store(StorePlanoRequest $request)
    {
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->service_type = ServiceType::PLAN;
        $service->appraiser_id = $request->input('appraiser_id');
        $service->status = Service::STATUS_CREATED;
        $service->save();
        return back()->with('success', Service::SERVICE_CREATE_SUCCESSFUL);
    }
}
