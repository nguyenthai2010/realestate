<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    <?php
			while ( have_posts() ) : the_post();
			$post = get_post(get_the_ID());
			$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			$slideImg = get_post_meta(get_the_ID(),'tt_picture',false);
		?>
	    <div class="span8 spanRightcontent">
	    	<div class="bgwhite">
	    		<h2> Overture</h2>
		    	<div id="gallery" class="sliderStyle1 sliderStyleHomeDesign">
	                  <div class="row marginleft0">
                          <div class="row-fluid extrabold">
                              <div class="subtab">
                                  <a class="btn-homepage-menu " href="#">OVERVIEW</a>
                                  <a class="btn-homepage-menu" href="#">INTERNALS</a>
                                  <a class="btn-homepage-menu active" href="#">FACADES</a>
                                  
                              </div>
                          </div>
                      </div>
			    	<div class="homedesignGallery">
			    		<div class="bigImage">
			    			<img src="<?php echo $bigImg;?>" />
			    			<div class="description">
			    				<div class="shadow"></div>
			    				<p><?php echo get_the_title(get_the_ID())?></p>
			    			</div>
			    		</div>
			    		<ul id="homedesign-carousel" class="jcarousel-skin-tango" >
		                  <?php 
							foreach ($slideImg as $slide) {
								$thumb = wp_get_attachment_image_src( $slide,'medium' );
		                  ?>
		                  <li>
		                      <div class="item">
		                          <div class="pic"> <img src="<?php echo $thumb[0];?>" alt="" height="156" width="107" /> </div>
		                          <div class="item-caption">
		                          	  <div class="shadow"></div>
		                              <p><?php echo get_the_title(get_the_ID())?></p>
		                          </div>
		                      </div>
		                  </li>
		                  <?php } ?>
		              </ul>
		              <!-- Pagination -->
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
				 <div class="pdfFile">
				 	<a href="#"><img src="images/pdf.png"/></a>
				 	<a href="#" class="add">ADD TO FAVOURITES</a>
				 </div>
				 <div class="introbox">
				 	<h5>Conditions</h5>
				 	<p>Base price includes traditional facade. Alternative facade upgrades available. No applied finishes are included such as render, moroka, bag and paint, stack stone or tiles. These are optional upgrades. Images in this brochure may depict items not supplied by Masterton which include, but are not limited to, landscaping, pathways, driveways, decks, pergolas, fencing, letter boxes, pool, water features and BBQ. Images may depict upgraded items which include, but are not limited to, fireplaces, window furnishings, light fittings, floor coverings, alarm systems, air conditioning, doors and feature tiling. Masterton reserves the right to revise plans, specifications and pricing without notice. All plans and images are subject to copyright protection. Please contact a sales consultant for more information. </p>
				 	<p>Masterton Homes Pty Ltd ABN 52 002 873 047 BLicence 35558C, Masterton Canberra Pty Ltd ABN 98 142 017 089 BLicence 2010666.</p>
				 </div>
	    	</div>
	    </div>
	    <?php 	
			endwhile; 
		?>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
