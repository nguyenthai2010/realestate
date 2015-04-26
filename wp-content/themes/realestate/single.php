<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray singleDesign">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    <?php
			while ( have_posts() ) : the_post();
			$post = get_post(get_the_ID());
			$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			$slideImg = get_post_meta(get_the_ID(),'tt_picture',false);
			$slideImg_2 = get_post_meta(get_the_ID(),'tt_picture_facades',false);
		?>
	    <div class="span7 spanRightcontent">
	    	<div class="bgwhite">
	    		<h2> Overture</h2>
		    	<div id="gallery" class="sliderStyle1 sliderStyleHomeDesign">
	                  <div class="row marginleft0">
                          <div class="row-fluid extrabold">
                              <div class="subtab">
                                  <a class="btn-homepage-menu active" href="javascript:void(0)" data-id = "#singleTab01">OVERVIEW</a>
                                  <a class="btn-homepage-menu " href="javascript:void(0)" data-id = "#singleTab02">INTERNALS</a>
                                  <a class="btn-homepage-menu " href="javascript:void(0)" data-id = "#singleTab03">FACADES</a>
                                  
                              </div>
                          </div>
                      </div>
			    	<div class="singleTab">
			    		<div class="homedesignGallery current" id="singleTab01">
			    			<div class="introbox">
							 	<?php echo get_the_content(get_the_ID());?>
							 </div>				    	
				    	</div>
			    		<div class="homedesignGallery" id="singleTab02">
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
			                          <div class="pic"> <img src="<?php echo $thumb[0];?>" alt="" height="150" width="105" /> </div>
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
				    	<div class="homedesignGallery" id="singleTab03">
				    		<div class="bigImage">
				    			<img src="<?php echo $bigImg;?>" />
				    			<div class="description">
				    				<div class="shadow"></div>
				    				<p><?php echo get_the_title(get_the_ID())?></p>
				    			</div>
				    		</div>
				    		<ul id="homedesign-carousel" class="jcarousel-skin-tango" >
			                  <?php 
								foreach ($slideImg_2 as $slide_2) {
									$thumb_2 = wp_get_attachment_image_src( $slide_2,'medium' );
			                  ?>
			                  <li>
			                      <div class="item">
			                          <div class="pic"> <img src="<?php echo $thumb_2[0];?>" alt="" height="156" width="107" /> </div>
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
				 </div>
                <div class="pdfFile">
                    <a href="#"><img src="images/pdf.png"/></a>
                    <a href="#" class="add bookmarkme">ADD TO FAVOURITES</a>
                </div>
	    	</div>
	    </div>
	    <?php 	
			endwhile; 
		?>
		 <?php get_template_part('tpl','jim-form');?>	
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
