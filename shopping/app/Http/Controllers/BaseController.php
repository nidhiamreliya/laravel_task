<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
	protected $image_path;
	protected $par_page;

    public function __construct()
    {
        $this->image_path = base_path().'/public/images/products';
        $this->par_page = 6;
    }   
}