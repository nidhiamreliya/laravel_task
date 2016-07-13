<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'user_id', 'order_date', 'sh_address', 'amount', 'delivery_date', 'status'
    ];

    public function details()
    {
    	return $this->hasMany('App\OrderDetailsModel', 'order_id', 'id');
    }

    public function user()
    {
    	return $this->belongsTo('App\UserModel', 'user_id', 'id');
    }
}