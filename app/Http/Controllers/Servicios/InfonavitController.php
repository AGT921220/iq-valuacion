<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;
use App\Http\Requests\Infonavit\CreateInfonavitRequest;
use App\Http\Requests\Infonavit\StoreInfonavitRequest;
use App\Service;
use App\ServiceType;
use App\User;

class InfonavitController extends Controller
{
    public function create()
    {
        app(CreateInfonavitRequest::class);
        $userId = auth()->user()->id;
        $service = Service::where('service_type', ServiceType::INFONAVIT)
            ->where('user_id', $userId)
            ->first();

        if ($service) {
            return redirect('/dashboard/servicios/infonavit/detalle/create');
        }
        $appraisers = User::where('type', User::APPRAISER_ROLE)->get();
        return view('dashboard.services.infonavit.create', compact('appraisers'));
    }

    public function store(StoreInfonavitRequest $request)
    {
        $service = new Service();
        $service->user_id = auth()->user()->id;
        $service->service_type = ServiceType::INFONAVIT;
        $service->appraiser_id = $request->input('appraiser_id');
        $service->status = Service::STATUS_CREATED;
        $service->save();
        return back()->with('success', Service::SERVICE_CREATE_SUCCESSFUL);
    }
}
