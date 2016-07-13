<?php

namespace App;

use Illuminate\Foundation\Auth\User;
use Cartalyst\Sentinel\Users\EloquentUser as SentinelModel;

class UserModel extends SentinelModel
{
    protected $table = 'users';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'contact_no', 'address', 'city', 'zip_code', 'state', 'country', 'slug', 'password'
    ];    
}
