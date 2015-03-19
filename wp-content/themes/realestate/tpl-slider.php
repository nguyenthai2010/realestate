<div class="now_carousel">
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
                                            “ Masterton brings excellence in building standards and customer service to each and every home we build <br>
                                            which is proven by continually winning industry awards for our innovative home designs.”

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
        <a class="carousel-control left" href="#main-carousel" data-slide="prev">&nbsp;</a> <a class="carousel-control right" href="#main-carousel" data-slide="next">&nbsp;</a> </div>

    <!-- carousel -->
</div>
<!-- now_carousel -->


