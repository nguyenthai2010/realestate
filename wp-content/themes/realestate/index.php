<?php
	get_header();
?>

  <div id="content">
    <?php get_template_part('tpl','slider')?>


    <div class="resize row-history">

        <div class="content_page">
            <div class="content_full_size">
                <div class="one_half_pad">
                    <h2>The Masterton Story</h2>
                    <p class="imghistor"><img src="images/pages/home/history.jpg"></p>
                </div>
                <div class="one_half_pad column-last">
                    <h4>Building quality homes since 1962,  Masterton Homes has become one of the largest and most respected builders in Australia. </h4>
                    <p>
                        There aren't too many people in NSW that haven't heard of Jim Masterton. Truthfully, Jim's also pretty well known around the other states of Australia too, which isn't surprising when you've spent over fifty years of your life in the same industry, and can boast to have built 50,000 new homes for Australian families over that time.<br><br>

                        Ask anyone at Masterton how "Jim's Way" influences the work we do and the way we look after our customers, and they'll tell you that even in his early 80's, Jim still plays a very active and valuable part in our company.<br><br>

                        Masterton Homes has now been part of the NSW home building community for half a century. Jim's legacy will live on for decades to come, through generations of the Masterton family now actively involved in the business - and through the values he instilled in all of us over the years.<br><br>

                        There will always be "Jim's Way", and we'll always respect and honour the lessons Jim taught us.
                    </p>
                </div>
                <div class="dc_clear"></div>
            </div>

        </div>

        <!-- #now_page -->


      <!-- gallery -->
    </div>

    <div class="row-slider fullscreen">
          <div class="resize">
              <div id="gallery" class="sliderStyle1">
                  <div class="container">
                      <div class="row">
                          <div class="row-fluid text-center">
                              <h1>HOME DESIGNS</h1>
                              <div class="submenu">
                                  <a class="btn-homepage-menu active">Single</a><a class="btn-homepage-menu" href="/category/double/">Double</a><a class="btn-homepage-menu" href="/category/duplex/">Duplex</a><a class="btn-homepage-menu" href="/home-designs/">All</a>
                              </div>
                          </div>
                      </div>
                      <ul id="gallery-carousel" class="jcarousel-skin-tango" >
                          <?php
                          global $paged;
                          $args_projects = array(
                              'post_type' 	 => 'post',
                              'posts_per_page' =>  6,
                              'order'			 => 'asc',
                              'category_name'    => 'single-storey',
                              'paged'		=> $paged
                          );
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

                              $img_src = empty($src[0])  ? 'images/pages/home/thum1.png':$src[0];
                              ?>
                              <li>
                                  <div class="item">
                                      <div class="pic"> <img src="<?php echo $img_src ;?>" alt="" height="234" width="139" /> <a href="<?php echo get_the_permalink(get_the_ID());?>" class="zoom img-circle"></a> </div>
                                      <div class="item-caption">
                                          <p><?php echo get_the_title(get_the_ID());?></p>
                                          <ul>
                                              <li class="icon1"><?php echo $bed;?></li>
                                              <li class="icon4"><?php echo $bath;?></li>
                                              <li class="icon2"><?php echo $garages;?></li>
                                              <li class="icon3"></li>
                                          </ul>
                                      </div>
                                  </div>
                              </li>
                          <?php endwhile; endif;?>
                          <li>
                              <div class="item">
                                  <div class="pic"> <img src="images/pages/home/thum1.png" alt="" height="234" width="139" /> <a href="http://cdn.pimg.co/p/800x600/183381/fff/img.png" rel="prettyPhoto[gallery]" class="zoom img-circle"></a> </div>
                                  <div class="item-caption">
                                      <p>1 Affinity</p>
                                      <ul>
                                          <li class="icon1">4</li>
                                          <li class="icon4">2</li>
                                          <li class="icon2">2</li>
                                          <li class="icon3"></li>
                                      </ul>
                                  </div>
                              </div>
                          </li>

                      </ul>
                  </div>
                  <!-- container -->
              </div>

          </div>
          <!-- #now_page -->

      </div>

    <div class="row fullscreen row-promotion">
        <div class="container " >
            <div class="row">
                <div class="separator"></div>
                <h1 class="text-center">CURRENT PROMOTIONS</h1>
                <div class="separator"></div>
                <?php
                    $posts_per_page = 3;
                    get_template_part('tpl','promotion');
                ?>
                <!-- /now_page -->
            </div>

            <div class="clr separator"></div>
        </div>

    </div>

    <div class="row-slider fullscreen">
        <div class="resize">
            <div id="gallery" class="sliderStyle1 gallery3 gallery-testimonials" >
                <div class="container">
                    <div class="row">
                        <div class="row-fluid text-center">
                            <h1>TESTIMONIALS</h1>
                            <p>“our happy customer and their experience with Masterton Homes”</p>
                        </div>
                    </div>
                    <ul id="gallery-carousel" class="jcarousel-skin-tango" >
                        <?php
                        $i = 0;
                        $args = array(
                            'post_type' 	 => 'testimonials',
                            'posts_per_page' => 20 ,
                            'order'			 => 'asc'
                        );
                        $queryRows = get_posts($args);

                        foreach ($queryRows as $row) {
                            $i++;
                            $url = wp_get_attachment_url(get_post_thumbnail_id($row->ID));
                            $youtube_url = get_post_meta($row->ID,'tt_type',true);
                            //

                            $description = get_post_meta($row->ID,'tt_description',true);
                            //echo $row->post_content;
                            ?>


                            <li>
                                <div class="span3">
                                    <div class="pic"> <a class=""><img src="<?php echo $url; ?>" style="visibility: visible; opacity: 1;"></a> <a href="<?php echo $youtube_url; ?>" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
                                    <h3><a href="#"><?php echo $row->post_name;?></a></h3>
                                    <p><?php echo $row->post_content;?></p>
                                    <a class="btn-color-watch" href="<?php echo $youtube_url; ?>" rel="prettyPhoto[id]"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
                                </div>
                            </li>

                        <?php }?>

                    </ul>
                </div>
                <!-- container -->
            </div>

        </div>
        <!-- #now_page -->

    </div>

  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
