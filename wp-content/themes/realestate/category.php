<?php
	get_header();
	$category = get_queried_object();
	
?>
  
  <div id="content" class="homedesignPage bgGray categoryDesign">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    
	    <div class="span7 spanRightcontent">
	    	<div class="bgwhite fullwidth">
		    	<div id="gallery" class="sliderStyle1">
			    	<div class="singleGallery">
			    		<ul id="single-carousel" class="jcarousel-skin-tango" >
			    		<?php
								$query_projects = get_category_post($category->name);
								if(have_posts($query_projects->$post)): while(have_posts($query_projects->$post)): the_post($query_projects->$post);
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
			                          	<img src="<?php echo $src[0];?>" alt="" height="220" width="140" />
			                          	<div class="detailBox">
			                          		<div class="shadow"></div>
			                          		<a href="<?php echo get_the_permalink(get_the_ID());?>">
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
			                                  <li class="info"><a href="<?php echo get_the_permalink(get_the_ID());?>"><img src="images/singledesign/info.png"/></a></li>
			                              </ul>
			                          </div>
			                      </div>
			                  </li>
		                  <?php endwhile; endif;?>
		              </ul>
		             
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
	    	</div>
	    	<div class="introhomedesign">
	    		<?php get_template_part('tpl','footer-intro');?>
	    	</div>
	    </div>
	    <?php get_template_part('tpl','jim-form');?>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
