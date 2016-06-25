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
                            <span class="text-success col-md-offset-2">
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            </span>
                            <br/>
                            {{ Form::open(
                                    array(
                                        'name'  => 'edit_password',
                                        'id' => 'edit_password',
                                        'url' => 'password/change', 
                                        'class' => "form-horizontal form-label-left"
                                    )
                                )
                            }}
                                <div class="form-group">
                                    {{ Form::label('email', 'Email id:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::email(
                                            'email',
                                            null,
                                            array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Example@gmail.com')
                                            ) 
                                        }}
                                        <label class="text-danger">
                                            <?php echo  $errors->first('email') ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password', 'New password:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::password(
                                            'password', 
                                            array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'New password')
                                            ) 
                                        }}
                                        <label class="text-danger">
                                            <?php echo  $errors->first('password') ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password_confirmation', 'Confirm password:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{ Form::password(
                                            'password_confirmation', 
                                            array('class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Confirm password')
                                            ) 
                                        }}
                                        <label class="text-danger">
                                            <?php echo  $errors->first('password_confirmation') ?>
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