<?php

namespace App\Http\Requests\User;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
        if ($this->user->type==User::ADMIN_ROLE) {
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
}
