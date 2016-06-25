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
                            @if(Session::has('success'))
                                <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                            @endif
                            <br/>
                             {{ Form::open(
                                    array(
                                        'name'=> 'edit_user',
                                        'id'=> 'edit_user',
                                        'class'=> 'form-horizontal form-label-left',
                                        'url'=> 'user/update'
                                    )
                                )
                            }}
                            {{ Form::hidden('id', (isset($user)) ? $user->id : '') }}
                            
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="form-group">
                                    {{ Form::label('first_name', 'First name:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                            'first_name', 
                                            (isset($user)) ? $user->first_name : '',
                                            array('class' => 'form-control col-md-8 col-xs-12')
                                            ) 
                                        }}
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('first_name'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('last_name', 'last name:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'last_name', 
                                                (isset($user)) ? $user->last_name : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}                                        
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('last_name'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('email', 'Email id:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::email(
                                                'email', 
                                                (isset($user)) ? $user->email : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('email'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password', 'Password:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::password(
                                                'password',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('password'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('password_confirm', 'Confirm password:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::password(
                                                'password_confirmation',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}             
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('password_confirmation'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('address', 'Address:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::textarea(
                                                'address', 
                                                (isset($user)) ? $user->address : '',
                                                array('class' => 'form-control col-md-8 col-xs-12', 'rows' => 3)
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('address'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('contact_no', 'Contact no:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'contact_no', 
                                                (isset($user)) ? $user->contact_no : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('contact_no'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('city', 'City:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'city', 
                                                (isset($user)) ? $user->city : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('city'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('zip_code', 'Zip code:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'zip_code', 
                                                (isset($user)) ? $user->zip_code : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('zip_code'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('state', 'State:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'state', 
                                                (isset($user)) ? $user->state : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('state'); ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('country', 'Country:', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')) }}
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        {{ Form::text(
                                                'country', 
                                                (isset($user)) ? $user->country : '',
                                                array('class' => 'form-control col-md-8 col-xs-12')
                                                ) 
                                        }}          
                                        <label class="col-md-8 text-danger">
                                            <?php echo $errors->first('country'); ?>
                                        </label>
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
                            <button type="submit" class="btn btn-primary" onclick="window.location='{{ url('admin/users') }}'"><i class="fa fa-backward">  Back</i></button>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection