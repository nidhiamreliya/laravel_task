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

    /**
     * Display home page for admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('admin.home');
    }

    /**
     * Display change password form.
     *
     * @return \Illuminate\Http\Response
     */
    public function password_change()
    {
    	return view('admin.change_password');
    }

    /**
     * Update the Password in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    	$hasher = Sentinel::getHasher();

        $oldPassword = $request->old_password;
        $password = $request->password;
        $passwordConf = $request->password_confirmation;

        $user = Sentinel::getUser();

        if (!$hasher->check($oldPassword, $user->password) || $password != $passwordConf) 
        {
            return view('admin.change_password')->withErrors('Check input is correct.');
        }

        Sentinel::update($user, ['password' => $password]);
        Session::flash('success','order successfully updated.');
        return redirect()->To('admin/password');
    }
}
