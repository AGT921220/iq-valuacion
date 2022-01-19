<?php

namespace App\Http\Requests\Plano;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class CreatePlanoRequest extends FormRequest
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
            if (!User::where('type', User::APPRAISER_ROLE)->exists()) {
                $validator->errors()->add('error', 'No existen Peritos registrados');
            }
        });
    }
}
