<?php
namespace App\Http\Controllers\User\Client;

use Illuminate\Http\Request;

use App\Http\Requests\Client\OrderRequest;
use App\Http\Controllers\BaseController;
use App\CartModel;
use App\OrderModel;
use App\OrderDetailsModel;
use Sentinel;

class OrderController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function checkout()
    {
    	$user = Sentinel::getUser();
    	$data = CartModel::where('user_id', $user->id)->with('product')->get();
		return view('client.order.checkout', ['data' => $data, 'user' => $user]);
	}

  	public function order(OrderRequest $request)
    {
    	$rdata = array($request->sh_address, $request->sh_city, $request->sh_zipcode, $request->sh_state, $request->sh_country);
    	$user = Sentinel::getUser();
		$data = CartModel::where('user_id', $user->id)->get();
		if($data)
		{
			$order = array(
    			'user_id' => $user->id,
    			'order_date' => date('Y-m-d'),
    			'sh_address' => implode(',',$rdata), 
    			'amount' => $request->amount,
    			'status' => 'NotDelivered'
			);
			$insert = new OrderModel($order);
			
			if($insert->save())
			{
				$id = $insert->id;
    			$products = array();
    			foreach ($data as $value) {
    				$products = [
    					'order_id' => $id,
    					'product_id' => $value->product_id,
    					'quantity' => $value->quantity,
    				];
    				$insert = new OrderDetailsModel($products);
	    			$insert->save();
    			}
    			CartModel::where('user_id', $user->id)->delete();
    			return redirect()->To('order/'.$id);
			}
		}
  	}

  	public function bill($no)
    {
    	$order = OrderModel::find($no);
    	$user = Sentinel::getUser();
    	if($order && $user)
    	{
    		if($order->user_id == $user->id)
    		{
    			return view('client.order.order', ['order' => $order]);
    		}
    		else
    		{
    			abort(404);
    		}
    	}
    	else
    	{
    		abort(404);
        }
    }

    public function track_order()
    {
        $user = Sentinel::getUser();
        $orders = OrderModel::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        return view('client.order.order_data', ['orders' => $orders]); 
    }

    public function details($id)
    {
        $order = OrderDetailsModel::where('order_id', $id)->with(['product', 'order'])->get();
        
        if(count($order) > 0)
        {
            $user = Sentinel::getUser();
            
            if($order[0]['order']->user_id == $user->id)
            {
                return view('client.order.order_details', ['order' => $order]);
            }else
            {
                abort(404);
            }
        }
        else
        {
            abort(404);
        }
    }
}