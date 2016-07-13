<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\LoginRequest;

use App\Http\Requests;
use App\Http\Controllers\BaseController;
use Sentinel;

class LoginController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }

    /**
     * Display a Login form.
     */
    public function index()
    {
        return view('admin.Auth.login');
    }

    /**
     * Login the user
     */
    public function handlelogin(LoginRequest $request)
    {
        $data = $request->all();        
        
        if(Sentinel::authenticate($data))
        {
            $user = Sentinel::getUser();
            
            if($user->inRole('Admin'))
            {
                echo "successful";
                return redirect()->to('admin/home');
            }
            else
            {
                Sentinel::logout();
                return redirect()->back()->withErrors('Please enter valid credentials.')->withInput();
            }
        }
        else
        {
            return redirect()->back()->withErrors('Please enter valid credentials.')->withInput();
        }
    }

    /**
     * Logout the admin
     */
    public function logout()
    {
        Sentinel::logout();
        return redirect()->to('admin/login');
    }    
}
