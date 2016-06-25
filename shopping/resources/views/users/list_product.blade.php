<?php if(!$products): ?>
	<span> Sorry no products available for this category.</span>
<?php else: ?>
	<?php foreach ($products as $row): ?>
		<div class="products-grd">
			<div class="p-one simpleCart_shelfItem prd">
				<a href="<?php echo site_url('product'),'/'.$row->slug?>">
					<img src="<?php echo $row->product_img != null ? base_url('assets/images/products').'/'.$row->product_img : base_url('assets/images/products/default.jpg') ?>" alt="" class="img-responsive" />
					<div class="mask">
						<span>Quick View</span>
					</div>
					<h4><?php echo $row->product_name ?></h4>
				</a>
				<input type="hidden" id="quantity" value="1">
				<p data-id="<?php echo $row->product_id?>" class="additem">
					<i></i>
					<span class=" item_price valsa"><?php echo $row->product_price ?><e class="fa fa-inr" aria-hidden="true"></e></span>
				</p>
			</div>	
		</div> 
	<?php endforeach ?>
<?php endif ?>