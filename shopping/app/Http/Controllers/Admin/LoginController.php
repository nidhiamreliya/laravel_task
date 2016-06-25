<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sentinel;

class LoginController extends Controller
{
    /**
     * Display a Login form.
     */
    public function index()
    {
        return view('admin.auth.login');
    }
    /**
     * Login the user
     */
    public function handleindex(LoginRequest $request)
    {
        $data = $request->all();        
        
        if(Sentinel::authenticate($data))
        {
            $user = Sentinel::getUser();
            
            if($user->inRole('admin'))
            {
                return redirect()->to('admin/dashboard');
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
}
