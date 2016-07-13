<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\Request;

class OrderRequest extends Request
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
            'sh_address' => 'required',
            'sh_city' => 'required',
            'sh_zipcode' => 'required|digits:6',
            'sh_state' => 'required',
            'sh_country' => 'required'
        ];
    }
}
