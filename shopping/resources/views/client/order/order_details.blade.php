@extends('layouts.client.client_layout')

@section('content')
    <div class="right_col" role="main">
        <div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Order Details</h2>
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
                                {{-- */ $total = 0; /* --}}
                                    @forelse ($order as $row)
                                        <tr>
                                            <td>{{ $row['product']->product_name }}</td>
                                            <td>{{ $row->quantity }}</td>
                                            <td>{{ $row['product']->price }}</td>
                                            <td>{{ $sub_total = $row->quantity * $row['product']->price }}</td>
                                            {{--*/ $total=$total+ $sub_total; /*--}}
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
                                    <th>{{ $total }} </th>
                                </tr>
                            </table>
                        </div>
                        <button type="submit" class="btn btn->block" onclick="window.location='{{ url('orders') }}'"><i class="fa fa-backward">  Back</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection