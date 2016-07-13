@extends('layouts.client.client_layout')
@section('content')
<!-- reg-form -->
<div class="reg-form">
	<div class="container">
		<div class="row">
			<table id="datatable" class="table table-striped table-bordered">
	            <thead>
	              <tr>
	                <th>No.</th>
	                <th>Product name</th>
	                <th>quantity</th>
	                <th>Price</th>
	              </tr>
	            </thead>
	            <tbody>
	            {{-- */ $count = 1; $total = 0; /* --}}
	            @foreach($data as $row)
	              <tr>
	                <td>{{ $count++ }}</td>
	                <td>{{ $row['product']->product_name }}</td>
	                <td>{{ $row->quantity }}</td>
	                <td>{{ $row['product']->price * $row->quantity}}</td>
	                {{--*/ $total=$total+($row['product']->price * $row->quantity) /*--}}
	              </tr>
	            @endforeach
	            <tr>
	            	<td colspan="3" class="text-right">Total:</td>
	            	<td>{{ $total }}</td>
	            </tr>                     
	            </tbody>
	        </table>
	    </div>
	    <div class="clearfix"></div>
	    <div class="row">
		    <div class="col-md-6 ">
				<h2> User Details:</h2>
				<div class="price-details" style="border: none;">
		    		<span>Name:</span>
					<span>{{ $user->first_name.' '.$user->last_name }}</span>
					<span>Email id:</span>
					<span>{{ $user->email }}</span>
					<span>Contact no:</span>
					<span>{{ $user->contact_no }}</span>
					<span>Address:</span>
					<span>{{ $user->address }},<br/>
					{{ $user->city }},
					{{ $user->zip_code }},<br/>
					{{ $user->state }},
					{{ $user->country }}.</span>
				</div>
		    </div>
		    <div class="col-md-6 ">
				<h2> Shipping Details:</h2>
				<ul>
					<li class="col-md-9 col-sm-9 col-xs-9">
					<section  class="sky-form">
						<label class="checkbox"><input type="checkbox" id="checkbox" name="checkbox"><i></i>As per user address</a></label>
					</section>
					</li>
				</ul>
				<div class="reg2">
				@include('commons/errors')
	                {{ Form::open([
                                'name'  => 'shipping_data',
	                          	'id' => 'register',
                                'class'  => 'form-horizontal form-label-left',
                                'method' => 'POST', 
                                'url'    => 'order',
                            ])
                    }}
					<ul>
						<input type="hidden" id="amount" name="amount" value="{{ $total }}">
						<li class="control-label2 col-md-6 col-sm-6 col-xs-12">Shipping address: </li>
						<li class="col-md-12 col-sm-12 col-xs-12" style="margine:0"><input type="text" id="sh_address" name="sh_address" >
							
                        </li>
					</ul>
					<ul>
						<li class="control-label2 col-md-6 col-sm-6 col-xs-12">city: </li>
						<li class="col-md-12 col-sm-12 col-xs-12" style="margine:0"><input type="text" id="sh_city" name="sh_city" >
                        </li>
					</ul>
					<ul>
						<li class="control-label2 col-md-6 col-sm-6 col-xs-12">Zip code: </li>
						<li class="col-md-12 col-sm-12 col-xs-12" style="margine:0"><input type="text" id="sh_zipcode" name="sh_zipcode" >
                        </li>
					</ul>
					<ul>
						<li class="control-label2 col-md-6 col-sm-6 col-xs-12">State: </li>
						<li class="col-md-12 col-sm-12 col-xs-12" style="margine:0"><input type="text" id="sh_state" name="sh_state" >
                        </li>
					</ul>
					<ul>
						<li class="control-label2 col-md-6 col-sm-6 col-xs-12">Country: </li>
						<li class="col-md-12 col-sm-12 col-xs-12" style="margine:0"><input type="text" id="sh_country" name="sh_country" >
                        </li>
					</ul>

					<ul>
						<li class="col-md-9 col-sm-9 col-xs-9 col-md-offset-3">
							<br>
							<input type="submit" value="Place order">
						</li>
					</ul>
					{{ Form::close() }}
				</div>
		    </div>
	    </div>
	    <div class="clearfix"></div>
	</div>
</div>
<script type="text/javascript">
	$('#checkbox').change(function() {
		if ($(this).is(':checked')) {
	    	$('#sh_address').val("{{ $user->address }}");
	    	$('#sh_city').val("{{ $user->city }}");
	    	$('#sh_zipcode').val("{{ $user->zip_code }}");
	    	$('#sh_state').val("{{ $user->state }}");
	    	$('#sh_country').val("{{ $user->country }}");
	  	} else {
	    	$('#sh_address').val(" ");
	    	$('#sh_city').val(" ");
	    	$('#sh_zipcode').val(" ");
	    	$('#sh_state').val(" ");
	    	$('#sh_country').val(" ");
	  	}
	});
</script>
@endsection