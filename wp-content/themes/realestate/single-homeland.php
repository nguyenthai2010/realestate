<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray homelandSingle">
    <img src="images/homeland/bigimg.jpg" width="100%"/>
    <?php
		while ( have_posts() ) : the_post();
		$post = get_post(get_the_ID());
		$propertyid = get_field('property_id',get_the_id());
		$price = get_post_meta(get_the_ID(),'tt_price',true);
		$bed = get_post_meta(get_the_ID(),'tt_bedrooms',true);
		$bath = get_post_meta(get_the_ID(),'tt_bathrooms',true);
		$garages = get_post_meta(get_the_ID(),'tt_garages',true);		
		$cat = get_post_meta(get_the_ID(),'tt_category',true);
		$building = get_post_meta(get_the_ID(),'tt_building',true);
		$features = get_post_meta(get_the_ID(),'tt_features',true);
		$land = get_post_meta(get_the_ID(),'tt_land',true);
		$location = get_field('google_map');
		
		$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
	?>
	<div class="homeLand">
	    <div class="container pad40">
	    	<h2 class="bigtitle">HOME AND LAND PACKAGES</h2>
	    	<h3 class="land-title">"<?php echo get_the_title(get_the_ID());?>"</h3>
	    	<p class="property-id">Property ID: <span><?php echo $propertyid;?></span></p>
	    	<div class="landcontent bgWhite">
	    		<div class="pricebox">
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
	    		<div class="left50">
	    			<div class="post_content">
	    				<?php echo get_the_content(get_the_ID());?>
	    			</div>
	    			<div class="land-detail">
	    				<p>
	    					<label>Category: </label>
	    					<span><?php echo $cat;?></span>
	    				</p>
	    				<p>
	    					<label>Building:</label>
	    					<span><?php echo $building;?></span>
	    				</p>
	    				<p class="feat">
	    					<label>Features:</label>
	    					<span><?php echo $features;?></span>
	    				</p>
	    				<p>
	    					<label>Land:</label>
	    					<span><?php echo $land;?></span>
	    				</p>
	    				<p>
	    					<label>Location:</label>
	    					<span>
	    						<?php echo $location['address'];?>
	    					</span>
	    				</p>
	    				<p>
	    					<label>Price:</label>
	    					<span class="orange">$<?php echo number_format($price);?></span>
	    				</p>
	    			</div>
	    		</div>
	    		<div class="right50">
	    			<div class="big">
	    				<img src="<?php echo $bigImg;?>" />
	    			</div>
	    			<ul>
	    				<?php
	    					$features = get_post_meta(get_the_ID(),'tt_picture',false);
							foreach ($features as $key => $fea) {
								$imgfea = wp_get_attachment_url( get_post_thumbnail_id($fea->ID) );
	    				?>
	    				<li><img src="<?php echo $imgfea;?>"/></li>
	    				<?php }?>
	    			</ul>
	    		</div>
	    		<div class="clear"></div>
	    		<div class="box-map">
	    			<?php
	    				
						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; 
	    			?>
	    		</div>
	    		<div class="agent-contact">
	    			<div class="agent-left">
	    				<h4>Agent Info</h4>
	    				<p>Christine Assoni <br/>02 8778 9163 </p>
	    			</div>
	    			<div class="agent-right">
	    				<h4>Make Contact</h4>
	    				<div class="make-contact">
	    					<form action="" id="agentcontactForm" method="post">
	    						<p>
	    							<input value="" type="text" name="firstname" placeholder="Name (Required)"/>
	    						</p>
	    						<p>
	    							<input value="" type="text" name="email" placeholder="Email Address (Required)"/>
	    						</p>
	    						<p>
	    							<input value="" type="text" name="phone" placeholder="Phone (Required)"/>
	    						</p>
	    						<p>
	    							<textarea name="comments" placeholder="Comments"></textarea>
	    						</p>
	    						<p>
	    							<input type="submit" value="SEND" />
	    						</p>
	    					</form>
	    				</div>
	    			</div>
	    			<div class="clear"></div>
	    		</div>
	    		
	    	</div>
	    	<?php get_template_part('tpl','footer-intro');?>
	    </div>
    </div>
   	<?php endwhile;?>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
