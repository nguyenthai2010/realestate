<?php
	get_header();
?>

<div id="content" class="row-promotion testimonialsPage bgGray">
    <div class="container gallery3" id="gallery" style="background:none;">
        <div class="row">
            <div class="separator"></div>
            <h1 class="text-center extrabold"><?php echo get_the_title(get_the_ID())?></h1>
            <p class="text-center extrabold"></p>
            <div class="separator"></div>
            <!-- /now_page -->
        </div>
        <div class="content_page">

            <?php
            $posts_per_page = 200;
            get_template_part('tpl','promotion');
            ?>
    <div class="clr"></div>
    <div class="separator_small"></div>


    </div>
    </div>
    <div class="clr separator"></div>
    <div class="row text-center" style="display: none">
        <a class="btn-showmore" href="#">SHOW MORE</a>
    </div>
    <div class="clr"></div>
</div>
  <!-- #content-->
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
