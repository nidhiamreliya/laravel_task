@extends('layouts.client.client_layout')
@section('content')
<!-- check-out -->
<div class="container">
	<div class="check">
		<div class="col-md-4 cart-total">
			<a class="continue" href="{{ url('jewellery') }}">Continue to basket</a>
			@if(count($cart) != 0)
			<div id="price" class="col-md-12 cart-total">	
				<div class="price-details" >
					<h3>Price Details</h3>
					<span>Total</span>
					<span class="total1" id="total_cost">{{ $total }}</span>
					<span>Delivery Charges</span>
					<span class="total1">00.00</span>
					<div class="clearfix"></div>				 
				</div>	
				<ul class="total_price">
				   <li class="last_price"> <h4>TOTAL</h4></li>	
				   <li class="last_price"><span id="pay">{{ $ltotal= $total + 00.00 }}</span></li>
				   <div class="clearfix"> </div>
				</ul> 
				<div class="clearfix"></div>
				<div class="fgh">
					<input type="submit" class="btn-block" value="Place Order" onclick="window.location='{{ url("checkout") }}'">
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-12 col-xs-12 cart-items">
			<div class="cart-header">
				<label><h2 style="margin-top: 0;">Cart Items</h2></label>
			</div>
			@endif	
			@forelse ($cart as $row)
				@if($row->product)
				<form id="add_cart">
				<div id="cart{{ $row->id }}">
					<div class="cart-sec simpleCart_shelfItem ">
						<div class="col-md-4 col-sm-4 col-xs-12 cart_img">
							<img src="{{ url('images/products/'.$row['product']->image) }}" class="img-responsive" alt=""/>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12 items-block">
						   <div class="cart-item-info">
						   		<w class="details-left-info">
						   			<h3>{{ $row['product']->product_name }}</h3>
						   		</w>
						   		<br/><br/>
						   		<p>Price :<span id="cost{{ $row->id }}" value="{{ $row['product']->price }}">{{ $row['product']->price }}</span></p>
						   		
								<ul class="qty" id='{{ $row->id }}'>
									<li><p>Qty :<input max="10" min="1" type="number" id="quantity{{ $row->id }}" name="quantity" class="form-control input-small" value="{{ $row->quantity }}"></p></li>
									<input type="hidden" id="oqty{{ $row->id }}" value="{{ $row->quantity }}" />
								</ul>
								<div class="delivery">
									<span>Delivered in 2-3 bussiness days</span>
								</div>	
								<div class="fgh">
									<a data-id="{{ $row->id }}" class="updateitem">Update</a>
									<a data-id="{{ $row->id }}" class="removeitem">Remove</a>
								</div>
							</div>
						</div>
				   		<div class="clearfix"></div>
			 		</div>
			 	</div>
			 	</form>
			 	@endif
			@empty
				<div class="col-md-12" id="no_data">
					<span> Currently you don't have any item in your cart. </span>
					<br/>
					<span> First add some items in your cart. </span>
				</div>                
			@endforelse   
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //check-out -->
<script type="text/javascript">
    $(document).ready(function(){
    	$('.removeitem').click(function(){
    		if(confirm('Are you sure you want to remove item ?'))
    		{
    			var id = $(this).attr('data-id');
    			$.ajax({
		            url:  "{{ url('cart/remove') }}",   
		            type: "POST",
		            data:{
		                cart_id:id,
		                _token: $('meta[name="_token"]').attr('content')
		            },
		            success: function(response) {
		                if (response.status) {
		                	alert(response.msg);
		                	var total = $('#total_cost').text();
			                var price = $('#cost'+id).text();
			                var qty = $('#quantity'+id).val();
			                total = total-(price * qty);
			                $('#total_cost').text(total);
		                	var ltotal = $('#pay').text(total);

		                	var count = $('#total_items').text();
			                count--;
			                if(count == 0)
			                {
			                	$('#price').remove();
			                	$('.cart-items').remove();
			                }
			                $('#total_items').text(count);
			                $('#cart'+id).remove();
			                
		                } else {
		                	alert(response.msg);
		                }
		            }
		        });
    		}
    	});
	    $('.updateitem').click(function(){
	        var id = $(this).attr('data-id');
	        $.ajax({
	            url:  "{{ url('cart/update') }}",   
	            type: "POST",
	            data:{
	                id : id,
	                quantity :  $('#'+'quantity'+id).val(),
	                _token: $('meta[name="_token"]').attr('content')
	            },
	            success: function(response) {
	                if (response.status) {
	                  	alert(response.msg, "success");
	                  	var total = $('#total_cost').text();
	                  	var price = $('#cost'+id).text();
	                  	var oqty = $('#oqty'+id).val();
		                var qty = $('#quantity'+id).val();
		                total = parseFloat(total)-parseFloat(price * oqty)+parseFloat(price * qty);
		                var oqty = $('#oqty'+id).val(qty);
		                $('#total_cost').text(total);
	                	var ltotal = $('#pay').text(total);
	                } else {
	                	alert(response.msg);
	                }
	            },
	            error: function(data){
	                if( data.status === 422 ) {
	                    var errors = data.responseJSON;
	                    errorHtml = '<p class="text-danger">';
	                    $.each( errors, function( key, value ) {
	                           errorHtml += value[0] + '<br/>';
	                    });
	                    errorHtml += '</p>';
	                    $( '#'+ id ).append( errorHtml );
	                }
	            }
	        });
	    });
   	});
</script>
@endsection