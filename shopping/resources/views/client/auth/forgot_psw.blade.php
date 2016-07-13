@extends('layouts.client.client_layout')
@section('content')
<!-- login-page -->
<div class="login">
    <div class="container">
        <div class="login-grids">
            <div class="col-md-6 col-md-offset-4 log">
                <div class="strip"></div>
                @include('commons/errors')
                {{ Form::open([
                            'method' => 'POST',
                            'url' => 'password',
                            'name' => 'forgot_password', 
                            'id' => 'forgot_password'
                        ])
                }}
                    <h5>E-mail:</h5>
                    {{ Form::text('email', old('email'), ['placeholder' => 'Example@email.com', 'class' => 'form-control']) }}
                    <br/>
                    {{ Form::submit('Submit') }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
<!-- //login-page -->
@endsection