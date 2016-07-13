@extends('layouts.admin.admin')
@section('content')
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
            <div class="page-title">
                <div class="title_left">
                  <h3>Products</h3>
                </div>
            </div>    
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Product List</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <a type="submit" class="btn btn-primary" href="{{ url('admin/product/create') }}">Add new product</a>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            @include('commons/errors')
                            <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>Product id</th>
                                        <th>category</th>
                                        <th>Product name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>priview</th>
                                        <th>Status</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($products as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row['category']->category_name }}</td>
                                        <td>{{ $row->product_name }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td><img src="{{ url('images/products').'/' .$row->image }}" height="80px" width="80px"/></td>
                                        <td>
                                        @if($row->status == 1)
                                            Visible
                                        @else
                                            Not visible
                                        @endif
                                        </td>
                                        <td><button class="btn" onclick="window.location='{{ url('admin/product/'. $row->slug .'/edit') }}'">
                                                <a class="fa fa-pencil-square-o fa-2x"></a>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{ url('admin/product/'. $row->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn" onclick="return confirm('Are u sure you want to delete this product.');">
                                                    <i class="fa fa-btn fa-trash fa-2x"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr><td colspan="8"><span class="text-info">Sorry no products available.</span></td></tr>
                                @endforelse   
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
        </div>
    </div>
@endsection