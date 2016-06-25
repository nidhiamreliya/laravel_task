@extends('layouts.user.user_layout')
@section('content')
    <!-- login-page -->
    <div class="login">
        <div class="container">
            <div class="login-grids">
                <div class="col-md-6 log">
                    <h3>Login</h3>
                    <div class="strip"></div>
                    <p>Welcome, please enter the following to continue.</p>
                    <p>If you have previously Register with us,
                    <br/>
                    <span class="text-success">
                        @if(Session::has('success'))
                            <div class="alert alert-success"><em> {!! session('success') !!}</em></div>
                        @endif
                    </span>
                    {{ Form::open(
                            array(
                                'method' => 'POST', 
								'name' => 'login', 
								'id' => 'login'
                            )
                        )
                    }}
                        <h5>{{ Form::label('email', 'Email Address') }}</h5>  
                        {{ Form::text('email', null, array('placeholder' => 'Example@email.com')) }}
                        <label class="text-danger">
                            {{ $errors->first('email') }}
                        </label> 
                        <h5>{{ Form::label('password', 'Password') }}</h5>
                        {{ Form::password('password',array('placeholder' => 'Password')) }}
                        <label class="text-danger">
                            {{ $errors->first('password') }}
                        </label> 
                        <br/>
                        {{ Form::submit('Login') }} 
                    {{ Form::close() }}
                    <a href="{{ url('/password/reset') }}"> Forgot Password ?</a>
                </div>
                <div class="col-md-6 login-right">
                    <h3>New Registration</h3>
                    <div class="strip"></div>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href="{{ url('register') }}" class="button">Create An Account</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //login-page -->
@endsection
