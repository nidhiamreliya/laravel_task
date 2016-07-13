<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Client\CartRequest;
use Sentinel;
use App\CartModel;


class CartController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Sentinel::check();
		if($user)
		{
			$data = CartModel::where('user_id', $user->id)->with(['product' => function($query){
                $query->where('status', 1);
            }])->get();
	    } else {
	    	$data = CartModel::where(['session_id' => session()->getId(), 'user_id' => null ])->with('product')->get();
	    }
       
	    $total = 0;
        if($data)
        {
            foreach ($data as $row) 
            {
                if($row['product'])
                {
                    $total = $total + ($row['product']->price * $row->quantity);
                }
            }
        }else {
        	$total = 00.00;
        }
       
	    return view('client.cart.cart', ['cart' => $data, 'total' => $total]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
    	$data = $request->all();
    	$data['session_id'] = session()->getId();
    	$user = Sentinel::check();
    	if($user)
    	{
    		$check = CartModel::where('user_id', $user->id)->where('product_id', $data['product_id'])->first();
    		$data['user_id'] = $user->id;    
	    } else {
	    	$check = CartModel::where(['session_id' => $data['session_id'], 'user_id' => null])->where('product_id', $data['product_id'])->first();
	    }
	    if($check)
        {
            return response()->json([
                "status" => false,
                "msg"   => "This product is already exist in your cart.",
            ]);
        }
        $result = new CartModel($data);

        if($result->save())                                 
        {
            return response()->json([
                "status" => true,
                "msg"   => "Item added to your cart successfully.",
            ]);
        }
        else
        {
            return response()->json([
                "status" => false,
                "msg"   => "Database error",
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CartRequest $request)
    {
        $data['quantity'] = $request->quantity;
        $cart = CartModel::find($request->id);
      	
        if($cart)
        {
        	if($cart->update($data))
            {
	            return response()->json([
	                "status"=> true,
	                "msg"   => "Your data updated successfully.",
	            ]);
	        }
	        else 
	        {
	        	return response()->json([
	                    "status" => false,
	                    "msg"   => "sorry there is some problem to update this item from your cart",
	                ]);
	        }
        }
        else
        {
        	abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    	$item = CartModel::find($request->cart_id);
        if($item)
        {
            if($item->delete($request->cart_id))
            {
                return response()->json([
	                    "status" => true,
	                    "msg"   => "Your data deleted successfully.",
	                ]);
            }
            else
            {
                return response()->json([
	                    "status" => false,
	                    "msg"   => "sorry there is some problem to remove this item from your cart",
	                ]);
            }   
        } else {
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
    public function count(Request $request)
    {
    	$user = Sentinel::check();
        if($user)
        {
            $products = CartModel::where('user_id', $user->id)->with(['product' => function($query){
                $query->where('status', 1);
            }])->get();
        } 
        else 
        {
            $products = CartModel::where(['session_id' => session()->getId(), 'user_id' => null ])->with(['product' => function($query){
                $query->where('status', 1);
            }])->get();
        }
      	$count = 0;
        foreach ($products as $row) {
            if($row['product'])
            {
                $count++;
            }
        }
        return response()->json([
            "status"=> true,
            "msg"   => $count,
        ]);
    }
}