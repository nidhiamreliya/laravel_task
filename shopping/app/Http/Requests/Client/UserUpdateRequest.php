<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\Request;

class UserUpdateRequest extends Request
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
        switch ($this->colum) 
        {
            case 'first_name':
                return [
                    'value' => 'required|alpha',
                ];
                break;
            case 'last_name':
                return [
                    'value' => 'required|alpha',
                ];
                break;
            case 'email':
                return [
                    'value' => 'required|email|unique:users,email,'.$this->getSegmentFromEnd(),
                ];
                break;
            case 'contact_no':
                return [
                    'value' => 'required|digits:10',
                ];
                break;
            case 'address':
                return [
                    'value' => 'required',
                ];
                break;
            case 'city':
                return [
                    'value' => 'required',
                ];
                break;
            case 'zip_code':
                return [
                    'value' => 'required|digits:6',
                ];
                break;
            case 'state':
                return [
                    'value' => 'required',
                ];
                break;
            case 'country':
                return [
                    'value' => 'required'
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'value.required' => 'A ' .$this->colum. '   is required',
            'value.unique' => 'This email id has already been taken.'
        ];
    }

    private function getSegmentFromEnd($position_from_end = 1) 
    {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
