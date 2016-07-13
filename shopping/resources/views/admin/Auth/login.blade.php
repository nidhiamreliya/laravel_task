@extends('layouts.admin.admin')
@section('content')
  <div>
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
      @include('commons/errors')
        <section class="login_content">
            {{ Form::open([
                    'method' => 'POST', 
                    'name' => 'login', 
                    'id' => 'login'
                ])
            }}
                <h1>Login Form</h1>
            @if (count($errors) > 0)
                <!-- Form Error List -->
                <div class="alert alert-danger">
                    <strong>Whoops! Something went wrong!</strong>
                    <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Example@email.com']) }}
            </div>
            <div>
                {{ Form::password('password',['class' => 'form-control', 'placeholder' => 'Password']) }}
            </div>
            <div>
                {{ Form::submit('Login', ['class' => 'btn btn-default submit']) }} 
            </div>
            <div class="clearfix"></div>
            <div class="separator">              
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-diamond" style="font-size: 26px;"></i> Pendent Store</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
            {{ Form::close() }}
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>
@endsection