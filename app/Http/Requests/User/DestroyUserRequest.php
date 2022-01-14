<?php

namespace App\Http\Requests\User;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class DestroyUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function authorize()
    {

        if ($this->user->type == User::ADMIN_ROLE) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    public function withValidator($validator)
    {

        $validator->after(function ($validator) {

            $user = User::findOrFail(request()->route('usuario'));

            if ($user->type === User::ADMIN_ROLE) {
                $validator->errors()->add('error', 'El usuario administrador no puede ser eliminado');
            }
        });
    }
}
