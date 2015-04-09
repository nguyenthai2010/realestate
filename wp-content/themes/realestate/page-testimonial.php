<?php
	get_header();
?>


<div id="content" class="testimonialsPage bgGray">
    <div class="container gallery3" id="gallery" style="background:none;">
        <div class="row">
            <div class="separator"></div>
            <h1 class="text-center extrabold"><?php echo get_the_title(get_the_ID())?></h1>
            <p class="text-center extrabold">“our happy customer and their experience with Masterton Homes”</p>
            <div class="separator"></div>
            <!-- /now_page -->
        </div>
        <div class="content_page">

            <?php get_template_part('tpl','testimonial')?>
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
