@extends('layouts.admin.admin')
@section('content')
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
            <div class="page-title">
                <div class="title_left">
                    <h3>Categories</h3>
                </div>
            </div>      
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Category List</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <a type="submit" class="btn btn-primary" href="{{ url('admin/category/create') }}">Add new Category</a>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            @include('commons/errors')
                            <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td> {{ $category->id }}</td>
                                        <td> {{ $category->category_name }}</td>
                                        <td>@if($category->status == 1)
                                                Visible
                                            @else
                                                Not visible
                                            @endif 
                                        </td>
                                        <td>
                                            <a class="fa fa-eye fa-2x" href="{{ url('admin/category/'. $category->slug ) }}"></a>
                                        </td>
                                        <td>
                                            <button class="btn" onclick="window.location='{{ url('admin/category/'. $category->slug .'/edit') }}'">
                                                <a class="fa fa-pencil-square-o fa-2x"></a>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="{{ url('admin/category/'. $category->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn" onclick="return confirm('Are u sure you want to delete this category.');">
                                                    <i class="fa fa-btn fa-trash fa-2x"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                 @empty
                                    <tr><td colspan="8"><span class="text-info">Sorry no category available.</span></td></tr>
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
    
