<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientType extends Model
{
    use SoftDeletes;

    public const CLIENT_TYPES = [
        'Inmobiliaria',
        'Brocker',
        'Corredor',
        'Asesor certificado',
        'Particular'
    ];
}
