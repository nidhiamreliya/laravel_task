<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailsModel extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'order_id', 'product_id', 'quantity'
    ];

    public function order()
    {
    	return $this->belongsTo('App\OrderModel', 'order_id', 'id');
    }

    public function product()
    {
    	return $this->belongsTo('App\ProductModel', 'product_id', 'id');
    }
}
