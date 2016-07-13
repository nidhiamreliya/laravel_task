<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\UserRequest;
use App\UserModel;
use Sentinel;
use Session;
use Hash;

class UserController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }  
    /**
     * Display a listing of the all users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserModel::where('id','!=', 1)->get(); 
        return view('admin.user.index', ['users' => $user]);   
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = UserModel::where('slug', $slug)->first();
        
        if($user)
        {
            return view('admin.user.edit', ['user' => $user]);
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['first_name'].$data['last_name'], "-");
        
        $user = UserModel::find($id);

        if($user)
        {
            if($data['password'] == '')
            {
                array_forget($data, 'password');
            }else{
                $data['password'] = Hash::make($request->password);
                array_forget($data, 'password_confirmation');
            }
            
            if($user->update($data))
            {
                Session::flash('success','user successfully updated.');
                return redirect()->to('admin/user');
            } else 
            {
                return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
            }
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = UserModel::find($id);
        
        if($user)
        {
            if($user->delete($id))
            {
                Session::flash('success','user successfully deleted.');
                return redirect()->to('admin/user');
            }
            else
            {
                return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
            }
        }
        else
        {
            abort(404);
        }
    }
}
