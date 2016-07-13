<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'email' => 'required|email|unique:users,email',
            'contact_no' => 'required|digits:10',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required|digits:6',
            'state' => 'required',
            'country' => 'required'
        ];
    }
}
