<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray">
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
								$garage = !empty($_GET['garage']) ? $_GET['garage']:"";
								$query_projects = search_home_design($homestyle,"","",$bedroom,$bathroom,$garage);
								foreach ($query_projects as $project) {
									
									$img = get_post_meta($project->ID,'tt_picture',true);
									$src = wp_get_attachment_image_src($img ,'full');
									$bed = get_post_meta($project->ID,'tt_bedrooms',true);
									$bath = get_post_meta($project->ID,'tt_bathrooms',true);
									$garages = get_post_meta($project->ID,'tt_garages',true);
									$title_project = get_the_title($project->ID);
  									$first_title = explode(" ", $title_project,2);
									//$url = wp_get_attachment_image_src( get_post_thumbnail_id($projects->ID), 'large' );
							?>
			                  <li>
			                      <div class="item">
			                          <div class="pic"> 
			                          	<img src="<?php echo $src[0];?>" alt="" height="220" width="140" />
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
		                  <?php }?>
		              </ul>
		              <!-- Pagination -->
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
				 
				 <div class="introbox">
				 	<h5>Conditions</h5>
				 	<p>Base price includes traditional facade. Alternative facade upgrades available. No applied finishes are included such as render, moroka, bag and paint, stack stone or tiles. These are optional upgrades. Images in this brochure may depict items not supplied by Masterton which include, but are not limited to, landscaping, pathways, driveways, decks, pergolas, fencing, letter boxes, pool, water features and BBQ. Images may depict upgraded items which include, but are not limited to, fireplaces, window furnishings, light fittings, floor coverings, alarm systems, air conditioning, doors and feature tiling. Masterton reserves the right to revise plans, specifications and pricing without notice. All plans and images are subject to copyright protection. Please contact a sales consultant for more information. </p>
				 	<p>Masterton Homes Pty Ltd ABN 52 002 873 047 BLicence 35558C, Masterton Canberra Pty Ltd ABN 98 142 017 089 BLicence 2010666.</p>
				 </div>
	    	</div>
	    </div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
