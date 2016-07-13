<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
        if($this->isMethod('post') || isset($this->image))
        {
            return [
                'category_id' => 'required|numeric',
                'product_name' => 'required|unique:products,product_name,'.$this->getSegmentFromEnd(),
                'description' => 'required',
                'price' => 'required|numeric',
                'image' => 'required|mimes:jpeg,png,jpg'
            ];
        } else {
            return [
                'category_id' => 'required|numeric',
                'product_name' => 'required|unique:products,product_name,'.$this->getSegmentFromEnd(),
                'description' => 'required',
                'price' => 'required|numeric',
            ];
        }
    }
    private function getSegmentFromEnd($position_from_end = 1) 
    {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
