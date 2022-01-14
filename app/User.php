<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    public const ADMIN_ROLE = 'admin';
    public const REVIEWER_ROLE = 'reviewer';
    public const PRINTER_ROLE = 'printer';
    public const APPRAISER_ROLE = 'appraiser';
    public const CLIENT_ROLE = 'client';

    public const USER_TYPES =
    [
        self::REVIEWER_ROLE=>'Revisador',
        self::PRINTER_ROLE=>'Dibujante',
        self::APPRAISER_ROLE=>'Perito Valuador',
    ];

    public const USER_CREATE_SUCCESSFUL = 'El usuario se creó con éxito';
    public const USER_CREATE_ERROR = 'Hubo un error al crear el usuario';
    public const USER_UPDATE_SUCCESSFUL = 'El usuario se actualizó con éxito';
    public const USER_UPDATE_ERROR = 'Hubo un error al editar el usuario';
    public const USER_DELETE_SUCCESSFUL = 'El usuario se eliminó con éxito';
    public const USER_DELETE_ERROR = 'Hubo un error al eliminar el usuario';

    public const REPEAT_EMAIL = 'El correo está repetido.';
    public const INVALID_TYPE = 'El tipo de usuario no es válido.';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_profile',
        'type', 'phone', 'paternal_surname', 'maternal_surname',
        'business'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
