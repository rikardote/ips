<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IpRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ip' => 'required',
            'user' => 'required',
            'machine_name' => 'required',
            'machine_password' => 'required',
            'ubicacion_id' => 'required',
        ];
    }
}
