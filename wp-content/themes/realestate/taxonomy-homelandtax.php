<?php
	get_header();
	$tax = get_queried_object();
	//print_r($tax);
?>
  
  <div id="content" class="homedesignPage bgGray">
    <img src="images/homeland/bigimg.jpg" width="100%"/>
	<div class="homeLand">
	    <div class="container pad40">
	    	<h2 class="bigtitle">
	    		<?php if(!empty($tax->term_id)){
	    			echo $tax->name;	
	    		} else{
	    			echo 'HOME AND LAND PACKAGES';
	    		}?>
	    	</h2>
	    	<?php get_template_part('tpl','homeland');?>
	    </div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
