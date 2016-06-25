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
                                <a type="submit" class="btn btn-primary" href="{{ url('product/edit') }}">Add new product</a>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <span class="text-success col-md-offset-2">
                            
                            </span>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    <th>Product id</th>
                                    <th>category</th>
                                    <th>Product name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>priview</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($products as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->category_id }}</td>
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
                                        <td><button class="btn">
                                                <a class="fa fa-pencil-square-o " href="{{ url('product/edit').'/'. $row->slug }}">Edit</a>
                                            </button>
                                        <form action="{{ url('product/delete/'.$row->id )}}" method="POST">
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
        </div>
    </div>
@endsection