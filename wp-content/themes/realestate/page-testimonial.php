<?php
	get_header();
?>

<?php
    $i = 0;
    $args = array(
        'post_type' 	 => 'testimonials',
        'posts_per_page' => 200 ,
        'order'			 => 'asc'
    );
    $queryRows = get_posts($args);
?>

<div id="content" class="testimonialsPage bgGray">
    <div class="container gallery3" id="gallery" style="background:none;">
        <div class="row">
            <div class="separator"></div>
            <h1 class="text-center extrabold">TESTIMONIALS</h1>
            <p class="text-center extrabold"></p>
            <div class="separator"></div>
            <!-- /now_page -->
        </div>
        <div class="content_page">

    <div class="row">
        <?php
        foreach ($queryRows as $row) {
            $i++;
            $idthump = get_post_meta($row->ID,'_cmb_gallery_image_thump',true);
            $idlarge = get_post_meta($row->ID,'_cmb_gallery_image_large',true);
            ?>
            <div class="span3">
                <div class="pic"> <a class=""><img src="images/pages/testimonials/p-1.png" style="visibility: visible; opacity: 1;"></a> <a href="http://cdn.pimg.co/p/800x600/456987/fff/img.png" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
                <h3><a href="#">Brian & Elayne</a></h3>
                <p>Brian & Elayne talk about their experience of building a new home with Masterton Homes.</p>
                <a class="btn-color-watch" href="#"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
            </div>
        <?php }?>

        <!--<div class="span3">
            <div class="pic"> <a class=""><img src="images/pages/testimonials/p-1.png" style="visibility: visible; opacity: 1;"></a> <a href="http://cdn.pimg.co/p/800x600/456987/fff/img.png" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
            <h3><a href="#">Brian & Elayne</a></h3>
            <p>Brian & Elayne talk about their experience of building a new home with Masterton Homes.</p>
            <a class="btn-color-watch" href="#"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
        </div>
        <div class="span3">
            <div class="pic"> <a class=""><img src="images/pages/testimonials/p-2.png" style="visibility: visible; opacity: 1;"></a> <a href="http://cdn.pimg.co/p/800x600/456987/fff/img.png" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
            <h3><a href="#">GREG & Sally </a></h3>
            <p>GREG & Sally  talk about their experience of building a new home with Masterton Homes.</p>
            <a class="btn-color-watch" href="#"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
        </div>
        <div class="span3">
            <div class="pic"> <a class=""><img src="images/pages/testimonials/p-3.png" style="visibility: visible; opacity: 1;"></a> <a href="http://cdn.pimg.co/p/800x600/456987/fff/img.png" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
            <h3><a href="#">MATTHEW & ALISHA</a></h3>
            <p>MATTHEW & ALISHA talk about their experience of building a new home with Masterton Homes.</p>
            <a class="btn-color-watch" href="#"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
        </div>
        <div class="span3">
            <div class="pic"> <a class=""><img src="images/pages/testimonials/p-4.png" style="visibility: visible; opacity: 1;"></a> <a href="http://cdn.pimg.co/p/800x600/456987/fff/img.png" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
            <h3><a href="#">PETER & DAWN</a></h3>
            <p>PETER & DAWN talk about their experience of building a new home with Masterton Homes.</p>
            <a class="btn-color-watch" href="#"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
        </div>-->
    </div>
    <div class="clr"></div>
    <div class="separator_small"></div>


    </div>
    </div>
    <div class="clr separator"></div>
    <div class="row text-center" style="display: none">
        <a class="btn-showmore" href="#">SHOW MORE</a>
    </div>
    <div class="clr"></div>
    <div class="separator_small"></div>
</div>
  <!-- #content-->
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
