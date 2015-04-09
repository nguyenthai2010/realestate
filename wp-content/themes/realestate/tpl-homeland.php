<?php
$tax = get_queried_object();
	global $paged;
	$args_homeland = array(
		'post_type' 	 => 'homeland',
		'posts_per_page' =>  4,
		'order'			 => 'desc',
		'paged'		=> $paged,
		/*'tax_query' => array( 
	        array( 
	            'taxonomy' => 'homelandtax', //or tag or custom taxonomy
	            'field' => 'id', 
	            'terms' => $tax->ID
	        ) 
	    ) */
	);
	$query_homelands = query_posts($args_homeland);
?>
<div class="headerbox">
	<div class="paging span4 margin-left-0">
		<p class="total-title">Total Properties: <span><?php echo wp_count_posts()->publish;?></span></p>
		<div class="paging-normal"><?php echo bt_paginate(); ?></div>
	</div>
	<div class="viewhomeland span5">
		<div class="middle">
			<a href="#" class="viewlist active">
				<span>VIEW<br/>LIST</span>
			</a>
			<a href="#" class="viewmap">
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
<div class="landList">
	<?php
		//foreach ( $query_homelands as $land ) {
		if(have_posts($query_homelands->$post)): while(have_posts($query_homelands->$post)): the_post($query_homelands->$post);
			$price = get_post_meta(get_the_ID(),'tt_price',true);
			$bed = get_post_meta(get_the_ID(),'tt_bedrooms',true);
			$bath = get_post_meta(get_the_ID(),'tt_bathrooms',true);
			$garages = get_post_meta(get_the_ID(),'tt_garages',true);
			$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
	?>
	<div class="item">
		<div class="pad">
			<img src="<?php echo $bigImg;?>"/>
			<div class="desc">
				<h3><?php echo get_the_title(get_the_ID());?></h3>
				<span class="pos"><?php echo get_field('position',get_the_ID());?> </span>
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