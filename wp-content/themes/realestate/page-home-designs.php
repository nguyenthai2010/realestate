<?php
	get_header();
?>
  
  <div id="content" class="homedesignPage bgGray">
    <img src="images/home_design.jpg" width="100%"/>
    <div class="container pad40">
	    <?php get_sidebar();?>
	    
	    <div class="span7 spanRightcontent">
	    	<div class="bgwhite fullwidth">
		    	<div id="gallery" class="sliderStyle1">
			    	<div class="singleGallery">
			    		<ul id="single-carousel" class="jcarousel-skin-tango" >
			    		<?php
								$args_projects = array(
									'post_type' 	 => 'post',
									'posts_per_page' =>  6 ,
									'order'			 => 'asc'
								);
								$query_projects = get_posts($args_projects);
								foreach ( $query_projects as $projects ) {
							    	$category = get_the_category($projects->ID);
									$cat_slug=  $category[0]->slug;
									$strCat = '';	
									$length = count($category);
									for($i = 0; $i < $length; $i++){
										$strCat .= $category[$i]->slug.' ';
									}
									$img = get_post_meta($projects->ID,'tt_picture',true);
									$src = wp_get_attachment_image_src($img ,'full');
									$bed = get_post_meta($projects->ID,'tt_bedrooms',true);
									$bath = get_post_meta($projects->ID,'tt_bathrooms',true);
									$garages = get_post_meta($projects->ID,'tt_garages',true);
									//$url = wp_get_attachment_image_src( get_post_thumbnail_id($projects->ID), 'large' );
							?>
		                  <li>
		                      <div class="item">
		                          <div class="pic"> 
		                          	<img src="<?php echo $src[0];?>" alt="" height="220" width="140" />
		                          	<div class="detailBox">
		                          		<div class="shadow"></div>
		                          		<a href="<?php echo get_the_permalink($projects->ID);?>">
		                          			<i></i>
		                          			<span><?php echo get_the_title($projects->ID);?></span>
		                          		</a>
		                          	</div> 
		                          </div>
		                          <div class="item-caption">
		                          	  <p class="name">Accent</p>
		                              <ul>
		                                  <li class="icon1"><?php echo $bed;?></li>
		                                  <li class="icon4"><?php echo $bath;?></li>
		                                  <li class="icon2"><?php echo $garages;?></li>
		                                  <li class="info"><a href="<?php echo get_the_permalink($projects->ID);?>"><img src="images/singledesign/info.png"/></a></li>
		                              </ul>
		                          </div>
		                      </div>
		                  </li>
		                  <?php }?>
		              </ul>
		              <!-- Pagination -->
					  <p class="jcarousel-pagination" data-jcarouselpagination="true"></p>
			    	</div>
				 </div>
	    	</div>
	    	<div class="introhomedesign">
	    		<?php get_template_part('tpl','footer-intro');?>
	    	</div>
	    </div>
	    
	    <div class="span4 sidebarright">
			<div class="sidebar">
	    	<?php
		    if(!empty($_POST['email']))
	    	{
		    	$data['firstname'] = $_POST['firstname'];
		        //$data['surname'] = $_POST['surname'];
		        $data['email'] = $_POST['email'];
		        $data['phone'] = sha1($_POST['phone']);
		        //$data['choosedesign'] = $_POST['choosedesign'];
		        $data['comments'] = $_POST['comments'];
				//$data['buildin'] = $_POST['buildin'];
		        //$data['displayvillage'] = $_POST['displayvillage'];
		       // $data['contactyou'] = $_POST['contactyou'];
				$sendmail = contact_form($data['firstname'],$data['surname'], $data['email'],$data['phone'],$data['choosedesign'],$data['comments'],$data['buildin'], $data['displayvillage'], $data['contactyou']);
				if($sendmail){ 
				    $message = "Send message successful";
				}		
				else 
				    $message = 'Current can not send message. Please try again.';
			}
		    ?>
	    	<form action="" method="post" id="presstoJim" class="presstoJimForm">
	    		<h2>ENQUIRY</h2>
	    		<?php
	                if($message != "")
	                {
	                    $alert = $logged == true ? "alert-success" : "alert-danger";
	                    echo '<div class="alert '.$alert.'">'.$message.'</div>';
	                }
	                    
	            ?> 
	    		
	    		<p>
	    			<input value="" type="text" name="firstname" placeholder="First Name (Required)"/>
	    		</p>
	    		
	    		<p>
	    			<input value="" type="text" name="email" placeholder="Email Address (Required)"/>
	    		</p>
	    		<p>
	    			<input value="" type="text" name="phone" placeholder="Phone (Required)"/>
	    		</p>
    			<div class="selectGroup fullwidth">
    				
	    			<textarea name="comments" placeholder="Comments"></textarea>
	    			
    			</div>
	    		<div class="pressToBtn">
	    			<div class="btnWrap">
	    				<span>PRESS TO</span>
	    				<input type="submit" value="Ask Jim"/>
	    			</div>
	    		</div>
	    	</form>
	    </div>	    	
	   	</div>
    </div>
  </div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<?php get_footer(); ?>
