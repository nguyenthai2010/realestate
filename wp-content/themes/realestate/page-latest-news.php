<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray">
    <img src="images/homeland/bigimg.jpg" width="100%"/>
	<div class="homeLand news">
	    <div class="container pad40">
	    	<h2 class="bigtitle">NEWS</h2>
	    	<div class="landList" id="landpageList">
			<?php
				global $paged;
				$args_news = array(
					'post_type' 	 => 'last-news',
					'posts_per_page' =>  6,
					'order'			 => 'asc',
					'paged'		=> $paged
				);
				$query_news = query_posts($args_news);
				$num = 0;
				if(have_posts($query_news->$post)): while(have_posts($query_news->$post)): the_post($query_news->$post);
				$num++;
					
					$bigImg = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
			?>
			<div class="item">
				<div class="pad">
					<div class="img-box">
						<img src="<?php echo $bigImg;?>"/>
					</div>
					<div class="desc">
						<h3><?php echo get_the_title(get_the_ID());?></h3>
						<span class="pos"><?php echo get_field('position',get_the_ID());?> </span>
						<div class="text">
							** 
							<?php echo wp_trim_words(get_the_content(get_the_ID()),55,$more='...');?> 
							<a href="<?php echo get_the_permalink(get_the_ID())?>">View the full details </a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<?php endwhile; endif;?>
			<div class="paging">
				<div class="paging-normal" id="pagingBox">
					Pages: <?php echo bt_paginate(); ?>
					<!--div id="pagination">
						
					</div-->
				</div>
			</div>
		</div>
	    </div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
