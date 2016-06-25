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
                                <a type="submit" class="btn btn-primary" href="{{ url('category/edit') }}">Add new Category</a>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Name</th>
                                        <th>Products</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td> {{ $category->id }}</td>
                                        <td> {{ $category->category_name }}</td>
                                        <td><a href="#">View products</a></td>
                                        <td>@if($category->status == 1)
                                                Visible
                                            @else
                                                Not visible
                                            @endif 
                                        </td>
                                        <td><a class="fa fa-pencil-square-o fa-2x" href="{{ url('category/edit')."/". $category->slug }}"></a>&nbsp&nbsp
                                            <a class="fa fa-trash fa-2x" href="{{ url('category/delete')."/". $category->slug }}"></a></td>
                                    </tr>
                                @endforeach               
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
    
