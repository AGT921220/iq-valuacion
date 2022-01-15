<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
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
