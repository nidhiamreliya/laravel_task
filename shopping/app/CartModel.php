<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    protected $table = 'cart';

    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'session_id'
    ];

    public function product()
    {
    	return $this->belongsTo('App\ProductModel', 'product_id', 'id');
    }
    public function user()
    {
    	return $this->belongsTo('App\UserModel', 'user_id', 'id');
    }
}
