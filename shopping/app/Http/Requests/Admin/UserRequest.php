<?php

namespace App\Http\Requests\Admin;

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
        if(($this->password)){
            return [
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'email' => 'required|email|unique:users,email,'.$this->getSegmentFromEnd(),
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'contact_no' => 'required|digits:10',
                'address' => 'required',
                'city' => 'required',
                'zip_code' => 'required|digits:6',
                'state' => 'required',
                'country' => 'required'
            ];
        } else {
            return [
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'email' => 'required|email|unique:users,email,'.$this->getSegmentFromEnd(),
                'contact_no' => 'required|digits:10',
                'address' => 'required',
                'city' => 'required',
                'zip_code' => 'required|digits:6',
                'state' => 'required',
                'country' => 'required'
            ];
        }
    }

    private function getSegmentFromEnd($position_from_end = 1) 
    {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
