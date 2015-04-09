<div class="headerbox">
	<div class="paging span4 margin-left-0">
		<p class="total-title">Total Properties: <span>57</span></p>
		<div id="pagination">
			<!--Paging ajax-->
		</div>
		
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
		global $paged;
		$args_homeland = array(
			'post_type' 	 => 'homeland',
			'posts_per_page' =>  5 ,
			'order'			 => 'desc',
			'paged'		=> $paged
		);
		$query_homelands = get_posts($args_homeland);
		foreach ( $query_homelands as $land ) {
	?>
	<div class="item">
		<div class="pad">
			<img src="images/homeland/i-1.jpg"/>
			<div class="desc">
				<h3><?php echo get_the_title($land->ID);?></h3>
				<span class="pos">"Prelude Elite - 600SQM Block Masterton Home and Land Package" </span>
				<div class="text">
					** 
					SECURE YOUR DREAM HOME TODAY WITH A 100% FIXED HOME & LAND PACKAGE PRICE ** DESIGN FEATURES INCLUDE: Spacious, open plan living Home Theatre Gourmet Artline kitchen Luxury Createc high glos...
					<a href="#">View the full details </a>
				</div>
			</div>
			<div class="price">
				<div class="num">
					$749,500
				</div>
				<ul>
					<li class="bed">
						<label>Bedrooms</label>
						<span><i></i><span>4</span></span>
					</li>
					<li class="bath">
						<label>Bathrooms</label>
						<span><i></i><span>2</span></span>
					</li>
					<li class="car">
						<label>Car Spaces</label>
						<span><i></i><span>2</span></span>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php }?>
</div>