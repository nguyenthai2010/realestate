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