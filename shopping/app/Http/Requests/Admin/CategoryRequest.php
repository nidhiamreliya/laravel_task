<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'category_name' => 'required|alpha|unique:category,category_name,'.$this->getSegmentFromEnd(),
            'status' => 'required'
        ];
    }
    private function getSegmentFromEnd($position_from_end = 1) 
    {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
