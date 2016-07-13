<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'product_name', 'category_id', 'price', 'description', 'image', 'status', 'slug'
    ];

    public function category()
    {
    	return $this->belongsTo('App\CategoryModel', 'category_id', 'id');
    }
    public function order()
    {
    	return $this->hasMany('App\OrderDetailsModel', 'product_id', 'id');
    }
    public function cart()
    {
        return $this->hasMany('App\CartModel', 'product_id', 'id');
    }
}
