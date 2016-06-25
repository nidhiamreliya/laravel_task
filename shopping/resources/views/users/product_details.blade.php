@extends('layouts.user.user_layout')
@section('content')
	<!-- single-page -->
	<div class="single">
		<div class="container">
			<div class="single-page">
				<div clas="col-md-6">  
					<div class="flexslider details-lft-inf">
						<ul class="slides">
							<li>
								<img class="preview" src="{{ url('images/products/'.$product->image) }}" />
							</li>
							<li>
								<img class="preview" src="{{ url('images/products/'.$product->image) }}" />
							</li>
							<li>
								<img class="preview" src="{{ url('images/products/'.$product->image) }}" />
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-5 col-md-offset-1">
				<div class="details-left-info">
					<h3>{{ $product->product_name }}</h3>
					<h4>{{ $product->description }} </h4>
					<div class="simpleCart_shelfItem">
						<p><span class="item_price qwe"><i class="fa fa-inr" aria-hidden="true"></i>  {{ $product->price }}</span></p> 
						<div class="clearfix"> </div>
						<p class="qty">Qty ::</p><input type="number" max="10" min="1" id="quantity" name="quantity" value="1" class="form-control input-small">
						<p class="text-danger" style="color: red; font-size: 15px;">
		                	
		                </p>
						<div class="single-but item_add">
							<input type="submit"  value="add to cart" data-id="{{ $product->id }}" class="additem">
						</div>		
					</div>				
				</div>
				</div>
				<div class="clearfix"></div>				 	
			</div>
		</div>
	</div>
<!-- FlexSlider -->
<script defer src="{{ url('js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{ url('css/flexslider.css')}}" type="text/css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	$('.flexslider').flexslider({
				animation: "slide",
			  });
});
</script>
@endsection