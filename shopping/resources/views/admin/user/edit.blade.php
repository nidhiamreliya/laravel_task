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
                            <h2>Edit User</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        @include('commons/errors')
                            <br/>
                             {{ Form::open([
                                        'id'=> 'edit_user',
                                        'method' => 'POST', 
                                        'url' => 'admin/user/'.$user->id, 
                                        'class'=> 'form-horizontal form-label-left',
                                    ])
                            }}
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="form-group">
                                    {{ Form::label('first_name', 'First name:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                            'first_name', 
                                            (isset($user)) ? $user->first_name : '',
                                            ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('last_name', 'last name:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'last_name', 
                                                (isset($user)) ? $user->last_name : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}                              
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('email', 'Email id:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::email(
                                                'email', 
                                                (isset($user)) ? $user->email : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password', 'Password:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::password(
                                                'password',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                                ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password_confirm', 'Confirm password:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::password(
                                                'password_confirmation',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                                ) 
                                        }}   
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('address', 'Address:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::textarea(
                                                'address', 
                                                (isset($user)) ? $user->address : '',
                                                ['class' => 'form-control col-md-8 col-xs-12', 'rows' => 3]
                                                ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('contact_no', 'Contact no:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'contact_no', 
                                                (isset($user)) ? $user->contact_no : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                                ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('city', 'City:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'city', 
                                                (isset($user)) ? $user->city : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                                ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('zip_code', 'Zip code:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'zip_code', 
                                                (isset($user)) ? $user->zip_code : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('state', 'State:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'state', 
                                                (isset($user)) ? $user->state : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('country', 'Country:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'country', 
                                                (isset($user)) ? $user->country : '',
                                                ['class' => 'form-control col-md-8 col-xs-12']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                            {{ Form::close() }}
                            <button type="submit" class="btn btn-primary" onclick="window.location='{{ url('admin/user') }}'"><i class="fa fa-backward">  Back</i></button>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection