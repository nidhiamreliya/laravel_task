@extends('layouts.user.user_layout')
@section('content')
	<!-- products -->
	<div class="products">
		<div class="container">
			<div class="products-grids">
				<div class="col-md-8 products-grid-left">
					<div class="products-grid-lft" id="products">
						@forelse ($products as $row)
							<div class="products-grd">
								<div class="p-one simpleCart_shelfItem prd">
									<a href="{{ url('user/'.$row->slug) }}">
										<img src="{{ url('images/products').'/'.$row->image }}" alt="" class="img-responsive" />
										<div class="mask">
											<span>Quick View</span>
										</div>
										<h4>{{ $row->product_name }}</h4>
									</a>
									<input type="hidden" id="quantity" value="1">
									<p data-id="{{ $row->product_id }}" class="additem">
										<i></i>
										<span class=" item_price valsa">{{ $row->price }}<e class="fa fa-inr" aria-hidden="true"></e></span>
									</p>
								</div>	
							</div> 
						@empty
							<span> Sorry no products available for this category.</span>
						@endforelse
					</div>
					<div class="row">
						<!-- <div class="text-center">
							<font color="#F65A5B">
							<ul class="pagination pagination-md">
								<a class="btn btn-block continue" id="view_more" val="1" max="1">View More</a>
								<img id="loading" src="{{ url('images/pg.gif') }}"/>
			  				</ul>
			  				</font>
			  			</div> -->
				  	</div>
				</div>
				<div class="col-md-4 products-grid-right">
					<div class="w_sidebar">
						<div class="w_nav1">
							<a href="{{ url('jewellery') }}"><h4>All</h4></a>
						</div>
						<section  class="sky-form">
							<h4>catogories</h4>
							<div class="row1 scroll-pane">
								@forelse ($category as $row)
									<div class="col col-4">
										
										@if($row->slug == Request::segment(2))
											<label class="checkbox"><a href="{{ url('jewellery/'.$row->slug) }}">
												<input type="checkbox" name="checkbox" checked="">
												<i></i>{{ $row->category_name }}</a>
											</label>
										@else
											<label class="checkbox"><a href="{{ url('jewellery/'.$row->slug) }}">
												<input type="checkbox" name="checkbox">
												<i></i>{{ $row->category_name }}</a>
											</label>
										@endif 
									</div>
								@empty
									<p>Sorry no categorys available</p>
								@endforelse
							</div>
						</section>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection