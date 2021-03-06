<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray newDesignpage">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    
	    <div class="span7 spanRightcontent">
	    	<div class="bgwhite fullwidth">
		    	<div id="gallery" class="sliderStyle1">
			    	<div class="singleGallery">
			    		<ul id="single-carousel" class="jcarousel-skin-tango" >
			    		<?php
			    				global $paged;
								$args_projects = array(
									'post_type' 	 => 'post',
									'posts_per_page' =>  6,
									'order'			 => 'asc',
									'paged'		=> $paged
								);

                                // FAVOURITES
                                $display = !empty($_GET['display']) ? $_GET['display']:"";
                                if($display =='favourites'){
                                    //get cookies
                                    $array_favourite = array();
                                    if(count($_COOKIE['home_favourites']) > 0) {
                                        $cookie = $_COOKIE['home_favourites'];
                                        $cookie = stripslashes($cookie);
                                        $array_favourite = json_decode($cookie, true);
                                    }

                                    //print_r($array_favourite);
                                    if(count($array_favourite) > 0)
                                        $args_projects['post__in'] = $array_favourite;
                                    else{
                                        $args_projects['post__in'] = array(-1);
                                        echo 'You havent added any favourites yet';
                                    }


                                }

								$query_projects = query_posts($args_projects);
								if(have_posts($query_projects->$post)): while(have_posts($query_projects->$post)): the_post($query_projects->$post);
							    	$category = get_the_category(get_the_ID());
									$cat_slug=  $category[0]->slug;
									$strCat = '';	
									$length = count($category);
									for($i = 0; $i < $length; $i++){
										$strCat .= $category[$i]->slug.' ';
									}
									$img = get_post_meta(get_the_ID(),'tt_picture',true);
									$src = wp_get_attachment_image_src($img ,'full');
									$bed = get_post_meta(get_the_ID(),'tt_bedrooms',true);
									$bath = get_post_meta(get_the_ID(),'tt_bathrooms',true);
									$garages = get_post_meta(get_the_ID(),'tt_garages',true);
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
		                          			<span><?php echo get_the_title(get_the_ID());?></span>
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
		              <div class="paging">
							<div class="paging-normal">
								<?php echo bt_paginate(); ?>
								<!--div id="pagination">
									
								</div-->
							</div>
						</div>
		              <!-- Pagination -->
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
	    	</div>

	    </div>
	    
	    <?php get_template_part('tpl','jim-form');?>	
	   	</div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
