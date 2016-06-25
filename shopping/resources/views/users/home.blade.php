@extends('layouts.user.user_layout')

@section('content')
	<!-- cate -->
	<div class="cate">
		<div class="container">
			@if($nacklaces)
				<div class="cate-left">
					<h3>Necklaces <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
					<span>Our Catelog</span></h3>
				</div>
				<div class="cate-right">
					<!-- slider -->
					<ul id="flexiselDemo1">
						@foreach ($nacklaces as $row)
							<li>
								<div class="sliderfig-grid">
									<img src="{{ url('images/products').'/'. $row->image }}" alt=" " class="img-responsive">
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>
		<!-- //slider -->
		<div class="clearfix"> </div>
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container catelog">
				<div class="row">
					<div class="cate-hed">
						<h3>Our New products <i class="glyphicon glyphicon-menu-down" aria-hidden="true"></i></h3>
					</div>
					<div class="catalog">
                    @forelse ($products as $row)
						<div class="col-md-2 product-left"> 
							<div class="p-two simpleCart_shelfItem jwe">							
								<a href="{{ url('product').'/'.$row->slug }}">
									<img src="{{ url('images/products').'/'.$row->image }}" alt="" class="img-responsive" />
									<div class="mask">
										<span>Quick View</span>
									</div>
								</a>
								<div class="product-left-cart">
									<div class="product-left-cart-l text-center">
										<p><a class="item_add" href="#"><span class=" item_price"><i class="fa fa-inr" aria-hidden="true"></i>{{ $row->price }}</span></a></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					@empty
                        <tr><td colspan="8"><span class="text-info">Sorry no products available.</span></td></tr>
                    @endforelse 
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 3
						}, 
						landscape: { 
							changePoint:640,
							visibleItems:4
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			});
	</script>
	<script type="text/javascript" src="{{ url('js/jquery.flexisel.js') }}"></script>
@endsection