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
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            <div class="table-responsive">
                            <table id="datatable" class="table  table-striped table-bordered">
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
                                    <th colspan="2">Action </th>
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
                                    <td><button class="btn" onclick="window.location='{{ url('admin/user/'. $row->slug .'/edit') }}'">
                                            <a class="fa fa-eye fa-2x"></a>
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/user/'. $row->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn" onclick="return confirm('Are u sure you want to delete this user.');">
                                                <i class="fa fa-btn fa-trash fa-2x"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="8"><span class="text-info">Sorry no data available for users.</span></td></tr>
                            @endforelse      
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection