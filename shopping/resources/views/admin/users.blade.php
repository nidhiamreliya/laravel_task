@extends('layouts.admin.admin')

@section('content')
    <div class="main_container">
    <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
            <div class="page-title">
                <div class="title_left">
                  <h3>Users</h3>
                </div>
            </div>    
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>User List</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <span class="text-success col-md-offset-2">
                            
                            </span>
                            <table id="datatable" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                    <th>First name</th>
                                    <th>last name</th>
                                    <th>Email id</th>
                                    <th>Contact no.</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Zip code</th>
                                    <th>State</th>
                                    <th>Country</th>
                                    <th>Action </th>
                                  </tr>
                                </thead>
                                <tbody>
                                @forelse ($users as $row)
                                <tr>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->contact_no }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->city }}</td>
                                    <td>{{ $row->zip_code }}</td>
                                    <td>{{ $row->state }}</td>
                                    <td>{{ $row->country }}</td>
                                    <td><button class="btn">
                                            <a class="fa fa-eye " href="{{ url('user/edit').'/'. $row->slug }}">Edit</a>
                                        </button>
                                    <form action="{{ url('user/delete/'.$row->id )}}" method="POST">
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
        </div>
    </div>
@endsection