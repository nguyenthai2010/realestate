<?php
	$tax = get_queried_object();
	$post_count  = wp_count_posts()->publish;
	if(!empty($tax->term_id)){
		$arrTax = array( 
	            'taxonomy' => 'homelandtax', //or tag or custom taxonomy
	            'field' => 'id', 
	            'terms' => $tax->term_id
	    );
		$post_count = $tax -> count;
	}
	global $paged;
	$args_homeland = array(
		'post_type' 	 => 'homeland',
		'posts_per_page' =>  4,
		'order'			 => 'asc',
		'paged'		=> $paged,
		'tax_query' => array( 
	        $arrTax
	    ) 
	);
	$query_homelands = query_posts($args_homeland);
?>
<div class="headerbox">
	<div class="paging span4 margin-left-0">
		<p class="total-title">Total Properties: <span><?php echo $post_count;?></span></p>
		<div class="paging-normal" id="pagingBox">
			<?php echo bt_paginate(); ?>
			<!--div id="pagination">
				
			</div-->
		</div>
	</div>
	<div class="viewhomeland span5">
		<div class="middle">
			<a href="#viewlist" class="viewlist active">
				<span>VIEW<br/>LIST</span>
			</a>
			<a href="#viewmap" class="viewmap">
				<span>VIEW<br/>MAP</span>
			</a>
		</div>
	</div>
	<div class="orderbybox span4 pull-right">
		<div class="orderbyleft">
			<label>
				ORDER BY
			</label>
			<select class="select" name="orderby">
				<option value="asc">Latest Listing</option>
				<option value="desc">Orderest Listing</option>
			</select>
		</div>
	</div>
</div>
<input name="ajaxurl" type="hidden" class="ajaxurl" value="<?php echo bloginfo('home').'/wp-admin/admin-ajax.php'; ?>"/>
<input name="taxid" type="hidden" class="taxid" value="<?php echo $tax->term_id; ?>"/>
<input name="taxcount" type="hidden" class="taxcount" value="<?php echo $post_count; ?>"/>
<input name="taxpage" type="hidden" class="taxpage" value="<?php echo $paged; ?>"/>

<div class="landList" id="landpageList">
	<div class="homelandTab active" id="viewlist">
		<?php
			//foreach ( $query_homelands as $land ) {
			$num = 0;
			if(have_posts($query_homelands->$post)): while(have_posts($query_homelands->$post)): the_post($query_homelands->$post);
			$num++;
				$price = get_post_meta(get_the_ID(),'tt_price',true);
				$bed = get_post_meta(get_the_ID(),'tt_bedrooms',true);
				$bath = get_post_meta(get_the_ID(),'tt_bathrooms',true);
				$garages = get_post_meta(get_the_ID(),'tt_garages',true);
				$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
				$location = get_field('google_map',get_the_ID());
		?>
		<div class="item" order="<?php echo $num;?>">
			<div class="pad">
				<div class="img-box">
					<img src="<?php echo $bigImg;?>"/>
				</div>
				<div class="desc">
					<h3><?php echo get_the_title(get_the_ID());?></h3>
					<span class="pos"><?php echo $location['address'];?> </span>
					<div class="text">
						** 
						<?php echo wp_trim_words(get_the_content(get_the_ID()),35,$more='...');?> 
						<a href="<?php echo get_the_permalink(get_the_ID())?>">View the full details </a>
					</div>
				</div>
				<div class="price">
					<div class="num">
						$<?php echo number_format($price);?>
					</div>
					<ul>
						<li class="bed">
							<label>Bedrooms</label>
							<span><i></i><span><?php echo $bed;?></span></span>
						</li>
						<li class="bath">
							<label>Bathrooms</label>
							<span><i></i><span><?php echo $bath;?></span></span>
						</li>
						<li class="car">
							<label>Car Spaces</label>
							<span><i></i><span><?php echo $garages;?></span></span>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php endwhile; endif;?>
	</div>
	<div class="homelandTab" id="viewmap">
		<?php
			$locs = array();
			$i = 0;
	    	if(have_posts($query_homelands->$post)): while(have_posts($query_homelands->$post)): the_post($query_homelands->$post);
			$i++;
			$location = get_field('google_map',get_the_ID());
			$latlng = array(
				'address' => $location['address'], 
				'lat' => $location['lat'], 
				'lng' => $location['lng']
			);
			array_push($locs,$latlng);	
		endwhile; endif;?>
		<div class="acf-map">
		<?php
			foreach ($locs as $loc) {
				if(!empty($loc['lat'])){
			?>
				
				<div class="marker" data-lat="<?php echo $loc['lat']; ?>" data-lng="<?php echo $loc['lng']; ?>">
					<h4 style="font-size: 12px;"><?php echo $loc['address']; ?></h4>
				</div>
				
		<?php } }?>
		</div>
	</div>
</div>