<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public const STATUS_CREATED = 'created';

    public const SERVICE_CREATE_SUCCESSFUL = 'El servicio se creó con éxito';
}
