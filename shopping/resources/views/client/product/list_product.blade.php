@foreach ($products as $row)
	<div class="products-grd col-md-4">
		<div class="p-one simpleCart_shelfItem prd">
			<a href="{{ url('product/'.$row->slug) }}">
				<img src="{{ url('images/products').'/'.$row->image }}" alt="" class="img-responsive" />
				<div class="mask">
					<span>Quick View</span>
				</div>
				<h4>{{ $row->product_name }}</h4>
			</a>
			<input type="hidden" id="quantity" value="1">
			<p data-id="{{ $row->id }}" class="additem">
				<i></i>
				<span class=" item_price valsa">{{ $row->price }}<e class="fa fa-inr" aria-hidden="true"></e></span>
			</p>
		</div>	
	</div> 
@endforeach