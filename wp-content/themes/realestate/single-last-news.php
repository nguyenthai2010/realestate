<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray homelandSingle">
    <img src="images/homeland/bigimg.jpg" width="100%"/>
    <?php
		while ( have_posts() ) : the_post();
		$post = get_post(get_the_ID());
		
		$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
	?>
	<div class="homeLand news">
	    <div class="container pad40">
	    	<h2 class="bigtitle">LASTEST NEWS</h2>
	    	<h3 class="land-title">"<?php echo get_the_title(get_the_ID());?>"</h3>
	    	<div class="landcontent bgWhite">
	    		<div class="left100">
	    			<div class="post_content">
	    				<?php echo get_the_content(get_the_ID());?>
	    			</div>
	    			
	    		</div>
	    	</div>
	    	<?php get_template_part('tpl','footer-intro');?>
	    </div>
    </div>
   	<?php endwhile;?>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
