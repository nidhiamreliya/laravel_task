<?php
namespace App\Http\Controllers\User\Client;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Client\UserRequest;
use App\Http\Requests\Client\LoginRequest;
use App\Http\Requests\Client\EmailRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\Client\UserUpdateRequest;
use App\Http\Controllers\BaseController;
use Sentinel;
use App\UserModel;
use App\CartModel;
use Crypt;

class UserController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    } 

    public function index()
    {
        return view('client.auth.login');
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
            if($user->inRole('Client'))
            {
                $cart = CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->lists('product_id')->toArray();
                if($cart)
                {
                    $user_cart = CartModel::where(['user_id' => $user->id])->lists('product_id')->toArray();
                    $update['user_id'] = $user->id;
                    CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->whereNotIn('product_id', $user_cart)->update($update);
                    CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->delete();
                }
                return redirect()->to('/');
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $user = Sentinel::registerAndActivate($data);

        if($user)
        {
            $role = Sentinel::findRoleByName('client');
            $role->users()->attach($user);

            $credentials['slug'] = str_slug($data['first_name']. $data['last_name'].$user->id, "-");
            Sentinel::update($user, $credentials);
            Sentinel::login($user);
            $cart = CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->lists('product_id')->toArray();
            if($cart)
            {
                $user_cart = CartModel::where(['user_id' => $user->id])->lists('product_id')->toArray();
                $update['user_id'] = $user->id;
                CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->whereNotIn('product_id', $user_cart)->update($update);
                CartModel::where(['session_id' => session()->getId(), 'user_id' => null])->delete();
            }
            return redirect()->to('/');
        }
        else
        {
            return redirect()->back()->withErrors(['dataerror' => 'Something went wrong, please try again!'])->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Sentinel::logout();
        return redirect()->to('user');
    }  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $login_user = Sentinel::check();
        $user = UserModel::where('slug', $id)->first();
        if($user->id == $login_user->id)
        {
           return view('client.auth.profile', ['user' => $user]); 
        } else
        {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $data = [ $request->colum => $request->value ];
        $user = Sentinel::findById($id);
        if($user)
        {
            if(Sentinel::update($user, $data)) 
            {
                return response()->json([
                    "status" => TRUE,
                    "msg"   => "Upadted Successfully."
                ]);
            }
            else 
            {
                return response()->json([
                    "status" => FALSE,
                    "msg"   => "Sorry we can n `ata."
                ]);
            }
        }
        else
        {
            return response()->json([
                    "status" => FALSE,
                    "msg"   => "Invalid user id."
                ]);
        }
    }

    public function forgot_psw()
    {
        return view('client.auth.forgot_psw');
    }

    public function handlePassword(EmailRequest $request)
    {
        $user = UserModel::where('email', $request->email)->first();
        if($user)
        {
            if(!$user->inRole('Admin'))
            {
                $id = Crypt::encrypt($user->id);
                $result = UserModel::where('email', $request->email)->update([ 'password_token' => $id ]);
                if($result)
                {
                    return redirect()->To('password/'.$id);
                }
            }
            else
            {
                return redirect()->Back()->withErrors(['dataerror'=>'You can not change password of this user.'])->withInput();
            }
        } 
        else
        {
            return redirect()->Back()->withErrors(['dataerror'=>'This email id is not exist in database.'])->withInput();
        }
    }

    public function change_psw($id)
    {
        return view('client.auth.change_psw');
    }

    public function psw_change(PasswordRequest $request, $id)
    {
        $user = UserModel::where('password_token', $id)->first();
        if($user)
        {
            $decrypted = Crypt::decrypt($id);
            $user = Sentinel::findById($decrypted);
            
            $data = [
                'password' => $request->password
            ];
            $user = Sentinel::update($user, $data);
            \Session::flash('success','Your password updated successfully.');
            return redirect()->To('user');
        } 
        else
        {
            return redirect()->Back()->withErrors(['dataerror'=>'This email id is not exist in database.'])->withInput();
        }
    }
}