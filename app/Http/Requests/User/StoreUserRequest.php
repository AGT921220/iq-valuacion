<?php

namespace App\Http\Requests\User;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        return [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'email', 'max:255', 'min:3','unique:users,email'],
            'paternal_surname' => ['required', 'string', 'max:255', 'min:3'],
            'maternal_surname' => ['required', 'string', 'max:255', 'min:3'],
            'phone' => ['required', 'string', 'max:255', 'min:7'],

        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'El nombre debe tener al menos 3 caractéres',
            'paternal_surname.min' => 'El apellido paterno debe tener al menos 3 caractéres',
            'maternal_surname.min' => 'El apellido materno debe tener al menos 3 caractéres',
            'email.email' => 'El correo es inválido',
            'email.unique' => 'El correo ya existe',
        ];
    }

    public function withValidator($validator)
    {
        $userTypes = User::USER_TYPES;
        $validator->after(function ($validator) use ($userTypes) {
            if (!isset($userTypes[$this->input('type')])) {
                $validator->errors()->add('type', User::INVALID_TYPE);
            }

            if ($this->input('password') !== $this->input('password_confirmation')) {
                $validator->errors()->add('password',User::PASSWORDS_NOT_EQUALS);
            }
        });
    }
}
