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
            //print_r($row);
            $i++;
            $url = wp_get_attachment_url(get_post_thumbnail_id($row->ID));
            $youtube_url = get_post_meta($row->ID,'tt_type',true);

            ?>
            <div class="span3">
                <div class="pic"> <a class=""><img src="<?php echo $url; ?>" style="visibility: visible; opacity: 1;"></a> <a href="<?php echo $youtube_url; ?>" class="zoom img-circle" rel="prettyPhoto[id]"></a> </div>
                <h3><a href="#"><?php echo $row->post_name;?></a></h3>
                <p><?php echo $row->post_content;?></p>
                <a class="btn-color-watch" href="<?php echo $youtube_url; ?>" rel="prettyPhoto[id]"><img src="images/pages/testimonials/play_s.png" width="25">WATCH NOW</a>
            </div>
        <?php }?>


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
