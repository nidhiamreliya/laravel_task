@extends('layouts.admin.admin')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>
                        Order Details
                    </h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Order No.- {{ $order_id }}</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>product price</th>
                                    <th>Sub total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $total = 0?> 
                                    @forelse ($details as $row)
                                        <tr>
                                            <td>{{ $row->product_name }}</td>
                                            <td>{{ $row->quantity }}</td>
                                            <td>{{ $row->price }}</td>
                                            <td><?php echo $sub_total = $row->quantity * $row->price ?></td>
                                            <?php $total = $total + $sub_total ?> 
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8">
                                                <span class="text-info">Sorry no products available for this order.</span>
                                            </td>
                                        </tr>
                                    @endforelse  
                                </tbody>
                                <tr>
                                    <th colspan="3" class="text-right">Total:</th>
                                    <th> <?php echo $total ?> </th>
                                </tr>
                            </table>
                            <a class="btn btn-success" href="{{ url('order/update') .'/delivered/'. $order_id }}">Mark as delivered</a>
                            <a class="btn btn-danger" href="{{ url('order/update') .'/canceled/'. $order_id }}">Mark as canceled</a>
                        </div>
                        <button type="submit" class="btn btn-primary " onclick="window.location='{{ url('orders') }}'"><i class="fa fa-backward">  Back</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection