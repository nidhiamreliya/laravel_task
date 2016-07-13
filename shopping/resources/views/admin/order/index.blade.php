
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
                        @include('commons/errors')
                        <div class="table-responsive">
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
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($order as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row['user']->email }}</td>
                                    <td>{{ $row->order_date }}</td>
                                    <td>{{ $row->sh_address }}</td>
                                    <td>{{ $row->amount }}</td>
                                    <td>{{ $row->delivery_date }}</td>
                                    <td>{{ $row->status }} </td>
                                    <td><button class="btn" onclick="window.location='{{ url('admin/order/'. $row->id .'/edit') }}'">
                                            <a class="fa fa-eye fa-2x"></a>
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/order/'. $row->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn" onclick="return confirm('Are u sure you want to delete this order.');">
                                                <i class="fa fa-btn fa-trash fa-2x"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="8"><span class="text-info">Sorry no orders placed.</span></td></tr>
                            @endforelse      
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <div class="clearfix"></div>
    </div>
@endsection