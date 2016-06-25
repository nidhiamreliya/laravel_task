
@extends('layouts.admin.admin')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="page-title">
            <div class="title_left">
                <h3>Orders</h3>
            </div>
        </div>    
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Order List</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        @if(Session::has('success'))
                            <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                        <table id="datatable" class="table table-striped table-bordered responsive-utilities">
                            <thead>
                                <tr>
                                    <th>Order No</th>
                                    <th>User</th>
                                    <th>Order date</th>
                                    <th>Shipping address</th>
                                    <th>Amount</th>
                                    <th>Delivery date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($orders as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->user_id }}</td>
                                    <td>{{ $row->order_date }}</td>
                                    <td>{{ $row->sh_address }}</td>
                                    <td>{{ $row->amount }}</td>
                                    <td>{{ $row->delivery_date }}</td>
                                    <td>{{ $row->status }} </td>
                                    <td><button class="btn">
                                            <a class="fa fa-eye " href="{{ url('order/details/'.$row->id )}}">Details</a>
                                        </button>
                                    <form action="{{ url('order/delete/'.$row->id )}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn">
                                                <i class="fa fa-btn fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                            @empty
                                <tr><td colspan="8"><span class="text-info">Sorry no products available for this category.</span></td></tr>
                            @endforelse      
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <div class="clearfix"></div>
    </div>
@endsection