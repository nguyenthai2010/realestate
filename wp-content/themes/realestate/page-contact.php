<?php
	get_header();
?>
  
  <div id="content" class="contactPage bgGray">
    <img src="images/contact.jpg" width="100%"/>
    <div class="container pad40">
    	<?php
			$idContact = get_page_id_by_slug('contact');
			$contact = get_post($idContact);
			$contact_item = get_field('contact_item'); 
			//print_r($contact_item);
			$count = count($contact_item);
		?>
    	<div class="span8">
    		<?php
    				$i = 0;
					$j = 0;
    				if( have_rows('contact_item') ){
						while ( have_rows('contact_item') ) : the_row();
						$i++;
						$title = get_sub_field("title");
						$img = get_sub_field("contact_image");
						$desc = get_sub_field("description");
						$email = get_sub_field("email");
    		?>
	    	<div class="span4">
	    		<h3><?php echo $title;?></h3>
	    		<?php
	    			if(!empty($img)){
	    		?>
	    		<img src="<?php echo $img['url'];?>"/>
	    		<?php }?>
	    		<div class="desc">
					<?php echo $desc;?>	    			
	    		</div>
	    		<a href="mailto:<?php echo $email;?>" class="link"><?php echo $email;?></a>
	    	</div>
	    	<?php if($i%3 == 0 ){
	    		$j++;
	    		if($j < $count/3){?>
	    		<div class="padtop23"></div>
	    		<?php }?>
	    	<?php } ?>
	    	<?php endwhile; } ?>
	    	
	    </div>
        <?php get_template_part('tpl','contact')?>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->
<?php get_footer(); ?>
