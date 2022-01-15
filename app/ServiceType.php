<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    public const INFONAVIT = 1;
    public const FOVISSSTE = 2;
    public const DOMAIN_APPRAISAL = 3;
    public const COMMERCIAL_APPRASAL = 4;
    public const VALUE_ESTIMATION = 5;
    public const PLAN = 6;

    public const SERVICE_TYPES = [
        'Infonavit',
        'Fovisste',
        'Avalúo Traslad de dominio',
        'Avaluo comercial',
        'Estimación de valor',
        'Plano catastral'
    ];

    // public const SERVICE_TYPES = [
    //     'infonavit',
    //     'fovisste',
    //     'domain_appraisal',
    //     'commercial_appraisal',
    //     'value_estimation',
    //     'cadastral_plan'
    // ];

}
