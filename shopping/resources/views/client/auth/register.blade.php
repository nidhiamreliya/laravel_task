@extends('layouts.client.client_layout')

@section('content')
<!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Register Now</h3>
				<p>Welcome, please enter the following details to continue.</p>
				<p>If you have previously registered with us, <a href="{{ url('user/') }}">click here</a></p>
				@include('commons/errors')
                {{ Form::open([
                            'name' => 'registration',
				            'id' => 'registration',
                            'url' => 'user',
                            'method' => 'POST', 
                            'class' 	=> 'form-horizontal',
                        ])
                }}
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">First Name: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'first_name', 
                                    null,
                                    ['placeholder' => 'First name']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Last Name: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'last_name', 
                                    null,
                                    ['placeholder' => 'Last name']
                                    ) 
                            }}
                        </li>
					 </ul>				 
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Email: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'email', 
                                    null,
                                    ['placeholder' => 'Example@example.com']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Contact no.: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'contact_no', 
                                    null,
                                    ['placeholder' => 'Contact No.']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Password: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::password(
                                    'password', 
                                    ['placeholder' => 'Password', 'id' => 'password']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Re-enter Password:</li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::password(
                                    'password_confirmation', 
                                    ['placeholder' => 'Confirm your password', 'id' => 'password_confirmation']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Address:</li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'address', 
                                    null,
                                    ['placeholder' => 'Address']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">City: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'city', 
                                    null,
                                    ['placeholder' => 'City']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Zip_code: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'zip_code', 
                                    null,
                                    ['placeholder' => 'Zip Code']
                                    ) 
                            }}
                        </li>
					</ul>						
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">State: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'state', 
                                    null,
                                    ['placeholder' => 'State']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="text-info control-label col-md-3 col-sm-3 col-xs-12">Country: </li>
						<li class="col-md-7 col-sm-7 col-xs-12">
							{{ Form::text(
                                    'country', 
                                    null,
                                    ['placeholder' => 'Country']
                                    ) 
                            }}
                        </li>
					</ul>
					<ul>
						<li class="col-md-9 col-sm-9 col-xs-9 col-md-offset-3">
                            {{ Form::submit('Submit') }}
						</li>
					</ul>
					<p class="click col-md-12 col-sm-12 col-xs-12">By clicking this button, you are agree to my Policy Terms and Conditions.</p> 
				{{ Form::close() }}
			</div>
		</div>
	</div>
@endsection