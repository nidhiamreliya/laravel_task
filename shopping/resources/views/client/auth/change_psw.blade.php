@extends('layouts.client.client_layout')
@section('content')
<!-- login-page -->
<div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 col-md-offset-4 log">
            @include('commons/errors')
                {{ Form::open([
                            'method' => 'POST',
                            'url' => 'password/'. Request::segment(2),
                            'name' => 'change_psw',
                            'id' => 'change_psw'
                        ])
                }}
                    <h5>New Password:</h5>  
                    {{ Form::password('password', [ 'style' => 'margin: 0px;', 'class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password']) }}
                    <h5>Confirm Password:</h5>
                    {{ Form::password('password_confirmation', [ 'style' => 'margin: 0px;', 'class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password_confirmation']) }} 
                    <br/>
                    {{ Form::submit('Submit') }}
                {{ Form::close() }}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //login-page -->
@endsection