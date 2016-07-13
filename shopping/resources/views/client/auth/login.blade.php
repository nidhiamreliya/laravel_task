@extends('layouts.client.client_layout')
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
                    @include('commons/errors')
                    {{ Form::open([
                                'method' => 'POST',
                                'url' => 'user/login',
								'name' => 'login_user', 
								'id' => 'login_user'
                            ])
                    }}
                        <h5>{{ Form::label('email', 'Email Address') }}</h5>  
                        {{ Form::text('email', null, ['placeholder' => 'Example@email.com']) }}
                        
                        <h5>{{ Form::label('password', 'Password') }}</h5>
                        {{ Form::password('password',['placeholder' => 'Password']) }}
                        <br/>
                        {{ Form::submit('Login') }} 
                    {{ Form::close() }}
                    <a href="{{ url('password') }}"> Forgot Password ?</a>
                </div>
                <div class="col-md-6 login-right">
                    <h3>New Registration</h3>
                    <div class="strip"></div>
                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    <a href="{{ url('user/create') }}" class="button">Create An Account</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //login-page -->
@endsection
