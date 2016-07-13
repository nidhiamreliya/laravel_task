<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\OrderModel;
use App\OrderDetailsModel;
use Session;

class OrderController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }

	/**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $order = OrderModel::with(['user'=>function($query){
                            $query->select('id','email');
                        }])->get();

        return view('admin.order.index', ['order' => $order]);   
    }

    /**
     * Show the form for editing the specified order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = OrderDetailsModel::where('order_id', $id)->with(['product'])->get();

        if($order)
        {
            return view('admin.order.edit', ['order' => $order]);
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Update the specified order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($status, $id)
    {
        $data['status'] = $status;
        $data['delivery_date'] = date('Y-m-d');
        
        $order = OrderModel::find($id);
        
        if($order)
        {
            if($order->update($data))
            {
                Session::flash('success','order successfully updated.');
                return redirect()->to('admin/order');
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

    /**
     * Remove the specified order from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = OrderModel::find($id);
        
        if($order)
        {
            if($order->delete($id))
            {
                Session::flash('success','order successfully deleted.');
                return redirect()->to('admin/order');
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
