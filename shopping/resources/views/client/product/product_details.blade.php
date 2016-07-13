@extends('layouts.client.client_layout')
@section('content')
	<!-- single-page -->
	<div class="single">
		<div class="container">
			<div class="single-page">
				<div clas="col-md-4">  
					<div class="flexslider details-lft-inf">
						<ul class="slides">
							<li data-thumb="{{ url('images/products/'.$product->image) }}">
								<img src="{{ url('images/products/'.$product->image) }}" />
							</li>
							<li data-thumb="{{ url('images/products/'.$product->image) }}">
								<img src="{{ url('images/products/'.$product->image) }}" />
							</li>
							<li data-thumb="{{ url('images/products/'.$product->image) }}">
								<img src="{{ url('images/products/'.$product->image) }}" />
							</li>
							<li data-thumb="{{ url('images/products/'.$product->image) }}">
								<img src="{{ url('images/products/'.$product->image) }}" />
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-5 col-md-offset-1">
				@include('commons/errors')
					<form id="add_cart">
					<div class="details-left-info">
						<h3>{{ $product->product_name }}</h3>
						<h4>{{ $product->description }} </h4>
						<div class="simpleCart_shelfItem">
							<p><span class="item_price qwe"><i class="fa fa-inr" aria-hidden="true"></i>  {{ $product->price }}</span></p> 
							<div class="clearfix"> </div>
							<p class="qty">Qty ::</p><input type="number" max="10" min="1" id="quantity" name="quantity" value="1" class="form-control input-small">
							<div class="single-but item_add">
								<input type="submit"  value="add to cart" data-id="{{ $product->id }}" class="additem">
							</div>
						</div>
					</div>
					</form>
				</div>
				<div class="clearfix"></div>				 	
			</div>
		</div>
	</div>
	<!-- FlexSlider -->
<script defer src="{{ url('js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{ url('css/flexslider.css')}}" type="text/css" media="screen" />
<script type="text/javascript">
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
	$(document).ready(function(){
		$('.additem').click(function(){
			$( '#formerrors' ).empty();
		    $.ajax({
	            url:  "{{ url('cart/add') }}",   
	            type: "POST",
	            data:{
	                product_id: $(this).attr('data-id'),
	                quantity: $('#quantity').val(),
	                _token: $('meta[name="_token"]').attr('content')
	            },
	            success: function(response) {
	                if(response.status)
	                {
	                    alert(response.msg);
	                    var count = $('#total_items').text();
	                    count++;
	                    $('#total_items').text(count);
	                }
	                else
	                {
	                    alert(response.msg);
	                }
	            },
	            error: function(data){
	                if( data.status === 422 ) {
	                    var errors = data.responseJSON;
	                    $.each( errors, function( key, value ) {
	                           errorHtml = value[0] + '<br/>';
	                    });
	                    $( '#formerrors' ).append( errorHtml );
	                }
	            }
	        });
		});
	});
</script>
@endsection