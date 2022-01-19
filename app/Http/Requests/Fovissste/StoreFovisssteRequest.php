<?php

namespace App\Http\Requests\Fovissste;

use App\Service;
use App\ServiceType;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreFovisssteRequest extends FormRequest
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

        if ($this->user->type == User::CLIENT_ROLE) {
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
            //
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {

            if (!User::where('id', $this->input('appraiser_id'))->exists()) {
                $validator->errors()->add('error', 'El perito seleccionado ha sido eliminado.');
            }


            if (Service::whereIn('status', [Service::STATUS_CREATED])
            ->where('service_type', ServiceType::FOVISSSTE)
            ->where('user_id', $this->user->id)->exists()) {
                $validator->errors()->add('error', 'Ya existe un servicio fovissste creado.');
            }
        });
    }
}
