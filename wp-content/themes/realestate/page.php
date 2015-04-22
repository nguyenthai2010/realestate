<?php
get_header();
?>

<div id="content" class="bgGray">
    <div class="container pad40">
        <?php
        while ( have_posts() ) : the_post();
            $post = get_post(get_the_ID());
            $slideImg = get_post_meta(get_the_ID(),'tt_picture',false);
            ?>
            <div class="content_page content_detail_new">
                <div class="content_full_size">
                    <h2><span><?php echo get_the_title(get_the_ID())?></span></h2>
                    <div class="clr"></div>
                    <?php echo get_the_content(get_the_ID())?>


                  

                    <div class="clr"></div>
                </div>
                <div class="separator"></div>

            </div>
        <?php
        endwhile;
        ?>
    </div>
</div>
<!-- #content-->

</div>
<!-- #wrapper -->

<?php get_footer(); ?>
