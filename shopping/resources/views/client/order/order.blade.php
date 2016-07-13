@extends('layouts.client.client_layout')
@section('content')
<div class="container">
    <div class="check">  
        <div class="col-md-6 col-md-offset-3 cart-total">
            <div class="price-details">
            <ul class="total_price">
                <li class="last_price"><h2>Order Details</h2></li>
                <div class="clearfix"></div>
                <li class="last_price">Order no:</li>
                <li class="last_price"><b>{{ $order->id }}</b></li><br/>
                <li class="last_price">Email:</li>
                <li class="last_price"><b>{{ $order['user']->email }}</b></li><br/>
                <li class="last_price">Order Date:</li>
                <li class="last_price"><b>{{ $order->order_date }}</b></li><br/>
                <li class="last_price">Total amount:</li>
                <li class="last_price"><b>{{ $order->amount }}</b></li><br/>
                <li class="last_price">Shipping address:</li>
                <li class="last_price"><b>{{ $order->sh_address }}</b></li>
            </ul>
                <div class="clearfix"></div>             
            </div> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection