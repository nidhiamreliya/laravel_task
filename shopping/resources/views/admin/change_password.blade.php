@extends('layouts.admin.admin')

@section('content')
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>

            <div class="page-title">
                <div class="title_left">
                    <h3>Password</h3>
                </div>
            </div>    
            <div class="clearfix"></div>
            <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Change Password</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @include('commons/errors')
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            <br/>
                            {{ Form::open([
                                        'name'  => 'edit_password',
                                        'id' => 'edit_password',
                                        'url' => 'admin/password', 
                                        'class' => "form-horizontal form-label-left"
                                    ])
                            }}
                                <div class="form-group">
                                    {{ Form::label('old_password', 'Old Password:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::password(
                                            'old_password',
                                            ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Old password', 'id' => 'old_password']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password', 'New password:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::password(
                                            'password', 
                                            ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'New password', 'id' => 'password']
                                            ) 
                                        }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password_confirmation', 'Confirm password:', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::password(
                                            'password_confirmation', 
                                            ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Confirm password', 'id' => 'password_confirmation']
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
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection