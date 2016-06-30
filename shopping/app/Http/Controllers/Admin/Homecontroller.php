<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\UserModel;
use Sentinel;
use Session;

class Homecontroller extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }  

    public function index()
    {
    	return view('admin.home');
    }

    public function password_change()
    {
    	return view('admin.change_password');
    }

    public function update(Request $request)
    {
    	$hasher = Sentinel::getHasher();

        $oldPassword = $request->old_password;
        $password = $request->password;
        $passwordConf = $request->password_confirmation;

        $user = Sentinel::getUser();

        if (!$hasher->check($oldPassword, $user->password) || $password != $passwordConf) {
            Session::flash('error', 'Check input is correct.');
            return view('admin.change_password');
        }

        Sentinel::update($user, array('password' => $password));
        Session::flash('success','order successfully updated.');
        return redirect()->To('admin/password');
    }
}
