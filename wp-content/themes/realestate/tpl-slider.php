<div class="now_carousel" style="min-height: 560px;">
    <div id="main-carousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php
                $i = 0;
                $args_slider = array(
                    'post_type' 	 => 'sliders',
                    'posts_per_page' => 20,
                    'order'			 => 'asc'
                );
                $querySlider = get_posts($args_slider);
                foreach ($querySlider as $slider) {
                    $i++;
                    $url = wp_get_attachment_url(get_post_thumbnail_id($slider->ID));

            ?>
                    <div class="<?php echo $i==1 ?'active ':'' ?>item">
                        <img src="<?php echo $url; ?>" alt=""/>
                        <div class="resize fullscreen">
                            <div class="now_page">
                                <div class="container">
                                    <div class="content_box">
                                        <h1 class="text-center">Masterton Homes have been building homes throughout NSW for over 52 years and are one of themost awarded builders in Australia.</h1>
                                        <p class="text-center">
                                            <span>“</span> Masterton brings excellence in building standards and customer service to each and every home we build <br>
                                            which is proven by continually winning industry awards for our innovative home designs.<span>”</span>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- #now_page -->

                        </div>
                    </div>

            <?php
                }//end for
            ?>
        </div>
        <!-- Carousel nav -->
        <!--<nav>
            <a class="carousel-control left" href="#main-carousel" data-slide="prev">&nbsp;</a> <a class="carousel-control right" href="#main-carousel" data-slide="next">&nbsp;</a>
        </nav>-->

        <nav class="lookingfor">
            <ul>
                <li class="firstchild">I’M LOOKING FOR:</li>
                <li class="icon1">Yes</li>
                <li class="icon2">Mansion</li>
                <li class="icon3">Knock down<br>rebuild </li>
                <li class="icon4">Duplex</li>
                <li class="icon5">More+ </li>
            </ul>
        </nav>

        <nav class="search-slider">
            <ul>
                <li class="prev"><!--<a class="carousel-control left" href="#main-carousel" data-slide="prev">&nbsp;</a>--></li>
                <li >
                	<form action="<?php echo bloginfo('url')?>/result/" method="get" id="searchDesign">
	                    <div class="search-detail">
	                        <ul>
	                            <li class="title">
	                                Find your dream home
	                            </li>
	                            <li class="selectbox">
	                                <select class="selecthome" name="s_types">
					    				<option value="">STOREY</option>
					    				<?php
											$categories = get_categories(); 
											//print_r($categories);
											$i = 0;
											  foreach ($categories as $category) {
											  	$i++;
											  	$catname = $category->cat_name;
												$catslug = $category->slug;
										?>
										<option value="<?php echo $catslug;?>"><?php echo $catname;?></option>
										<?php }?>
					    			</select>
	                            </li>
	                            <li class="line"><div></div></li>
	                            <li class="selectbox">
	                                <select class="selecthome" name="bedroom">
	                                    <option value="">BATH</option>
	                                    <option value="1">1</option>
	                                    <option value="2">2</option>
	                                    <option value="3">3</option>
	                                    <option value="4">4</option>
	                                </select>
	                            </li>
	                            <li class="line"><div></div></li>
	                            <li class="selectbox">
	                                <select class="selecthome" name="bathroom">
	                                    <option value="">BED</option>
	                                    <option value="1">1</option>
	                                    <option value="2">2</option>
	                                    <option value="3">3</option>
	                                    <option value="4">4</option>
	                                    <option value="5">5</option>
	                                </select>
	                            </li>
	                            <li class="line"><div></div></li>
	                            <li class="selectbox">
	                                <select class="selecthome" name="s_types">
	                                    <option value="">LOT WIDTH</option>
	                                    <?php
	                                    	for ($i = 8; $i <= 36; $i++) {
	                                    ?>
	                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
	                                    <?php }?>
	                                </select>
	                            </li>
	                            <li class="button">
	                                <a class="btn-homepage-menu btnpromotion" onclick="$('#searchDesign').submit();" href="javascript:void(0);">SEARCH</a>
	                            </li>
	                        </ul>
	                    </div>
	                  </form>
                </li>
                <li class="next"><!--<a class="carousel-control right" href="#main-carousel" data-slide="next">&nbsp;</a>--></li>
            </ul>
        </nav>
    </div>
    <!-- carousel -->
</div>
<!-- now_carousel -->


