<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public const STATUS_CREATED = 'created';
    public const SERVICE_CREATE_SUCCESSFUL = 'El servicio se creó con éxito';
}
