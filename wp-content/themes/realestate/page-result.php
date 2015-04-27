<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray resultSearch">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    
	    <div class="span8 spanRightcontent">
	    	<div class="bgwhite fullwidth">
		    	<div id="gallery" class="sliderStyle1">
			    	<div class="singleGallery">
			    		<ul id="single-carousel" class="jcarousel-skin-tango" >
			    		<?php
								$homestyle = !empty($_GET['s_types']) ? $_GET['s_types']:"";
								$bedroom = !empty($_GET['bedroom']) ? $_GET['bedroom']:"";
								$bathroom = !empty($_GET['bathroom']) ? $_GET['bathroom']:"";
								$housesize = !empty($_GET['housesize']) ? $_GET['housesize']:"";
								$housewidth = !empty($_GET['housewidth']) ? $_GET['housewidth']:"";
								$garage = !empty($_GET['garage']) ? $_GET['garage']:"";
								$query_projects = search_home_design($homestyle,$housesize,$housewidth,$bedroom,$bathroom,$garage);
								//print_r($query_projects);
								//foreach ($query_projects as $project) {
								if ( $query_projects->have_posts() ) : while ( $query_projects->have_posts() ) : $query_projects->the_post();	
									$img = get_post_meta(get_the_ID(),'tt_picture',true);
									$src = wp_get_attachment_image_src($img ,'full');
									$bed = get_post_meta(get_the_ID(),'tt_bedrooms',true);
									$bath = get_post_meta(get_the_ID(),'tt_bathrooms',true);
									$garages = get_post_meta(get_the_ID(),'tt_garages',true);
									$title_project = get_the_title(get_the_ID());
  									$first_title = explode(" ", $title_project,2);
									//$url = wp_get_attachment_image_src( get_post_thumbnail_id($projects->ID), 'large' );
							?>
			                  <li>
			                      <div class="item">
			                          <div class="pic"> 
			                          	<img src="<?php echo $src[0]=='' ? 'images/singledesign/i-1.jpg':$src[0] ;?>" alt="" height="220" width="140" />
			                          	<div class="detailBox">
			                          		<div class="shadow"></div>
			                          		<a href="<?php echo get_the_permalink($project->ID);?>">
			                          			<i></i>
			                          			<span><?php echo $first_title[0]?><br/><?php echo $first_title[1];?></span>
			                          		</a>
			                          	</div> 
			                          </div>
			                          <div class="item-caption">
			                          	  <p class="name">Accent</p>
			                              <ul>
			                                  <li class="icon1"><?php echo $bed;?></li>
			                                  <li class="icon4"><?php echo $bath;?></li>
			                                  <li class="icon2"><?php echo $garages;?></li>
			                                  <li class="info"><a href="<?php echo get_the_permalink($project->ID);?>"><img src="images/singledesign/info.png"/></a></li>
			                              </ul>
			                          </div>
			                      </div>
			                  </li>
		                  <?php endwhile; ?>
		                  <div class="paging">
							<div class="paging-normal">
								<?php echo bt_paginate(); ?>
								<!--div id="pagination">
									
								</div-->
							</div>
						</div>
		                  <?php else : ?>
								<p>Your search did not return any results, please try again.</p>
							<?php endif; ?>
		              </ul>
		              <!-- Pagination -->
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
				 
				
	    	</div>
	    </div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
