<?php 
	if((!is_page('home-designs')) && (!is_single()) && (!is_category())){
		get_template_part('tpl','footer-intro');		
	}	
?>
<div id="footer">

  <div class="resize">
    <div class="cols">
      <div class="container">
        <div class="row">
          <div class="span2 col1">
            <h4><a href="<?php echo bloginfo('home')?>/about">ABOUT</a></h4>
            <?php
				$nav = array(
					'theme_location'  => 'menu_about',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);
				
				wp_nav_menu( $nav );
			?>
          </div>
          <div class="span2 col2">
            <h4><a href="<?php echo bloginfo('home')?>/home-designs">HOME Designs</a></h4>
            <?php
				$nav = array(
					'theme_location'  => 'menu_home_designs',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);
				
				wp_nav_menu( $nav );
			?>
            <h4><a href="<?php echo bloginfo('home')?>/home-land">HOME & LAND</a></h4>
            <?php
				$nav = array(
					'theme_location'  => 'menu_home_land',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => '',
					'menu_id'         => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				);
				
				wp_nav_menu( $nav );
			?>
          </div>
          <div class="span2 col3">
            <h4>Display Homes</h4>
            <ul>
            	<li><a href="<?php echo bloginfo('home')?>/display-centre-locations">Display Centre Locations</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/display-homes-for-sale">Display Homes for Sale</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/warwick-farm-display-village">Warwick Farm Display Village</a></li>
            </ul>
            <h4><a href="<?php echo bloginfo('home')?>/promotions">Promotions</a></h4>
            <ul>
            	<li><a href="<?php echo bloginfo('home')?>/mansion-package">Mansion Package</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/yes-inclusions">Yes Inclusions</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/design-workshop">Design Workshop</a></li>
            </ul>
          </div>
          <div class="span2 col4">
            <h4><a href="<?php echo bloginfo('home')?>/services">SERVICES</a></h4>
            <ul>
            	<li><a href="<?php echo bloginfo('home')?>/book-a-meeting-2">Book A Meeting</a></li>
            	<li><a href="http://www.mortgagecalculator.org/" target="_blank">Finance</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/subscribe-newsletter">Subscribe Newsletter</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/suppliers-trade">Suppliers & Trade</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/terms-of-use">Terms Of Use</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/privacy-policy">Privacy Policy</a></li>
            </ul>
          </div>
          <div class="span2 col5">
            <h4>QUICKLINKS</h4>
            <ul>
            	<li><a href="<?php echo bloginfo('home')?>">Home</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/contact">Contact Us</a></li>
            	<li><a href="<?php echo bloginfo('home')?>/login">Login</a></li>
            </ul>
          </div>
          <div class="span2 followus  col6">
            <h4>Follow Us</h4>
            <div class="link">
            	<a class="soc" href="https://www.facebook.com/MastertonHomes" target="_blank"><img src="images/fb.jpg" /></a> 
          		<a class="soc" href="https://twitter.com/MastertonHomes" target="_blank""><img src="images/twitter.jpg" /></a> 
          		<a class="soc" href="#"><img src="images/pinterest.jpg" /></a> 
          		<a class="soc" href="#"><img src="images/rss.jpg" /></a>
          		<a class="soc" href="https://www.youtube.com/user/MastertonHomes" target="_blank"><img src="images/youtube.jpg" /></a> 
            </div>
          </div>
        </div>
      </div>
      <!-- container cols --> 
    </div>
    <!-- cols --> 
  </div>
  <!-- resize -->
  <div class="copyright">
  	<div class="container">
  		<div class="pull-left">&copy; Copyright 2015 Masterton Homes Pty Limited</div> 
  		<div class="pull-right">Web Design & Development by Involve Digital</div>
  	</div>
  </div>
    <br clear="all">
</div>
<!-- #footer --> 


<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="prettyPhoto/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/menusm.js"></script> 
<script type="text/javascript" src="js/scripts.js"></script> 
<script type="text/javascript" src="ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script> 
<script type="text/javascript" src="preloader/js/jquery.preloader.js" charset="utf-8"></script> 
<script type="text/javascript" src="twitter_tweet/jquery.tweet.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/jquery.easing.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/jquery.thumbnailScroller.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/tinynav.min.js"></script> 
<link rel="stylesheet" type="text/css" href="js/rangejs/jquery.range.css"/>
<script type="text/javascript" src="js/rangejs/jquery.range.js"></script>
<script type="text/javascript" src="js/search_homedesign.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/validate.jim.js"></script>
<!--script type="text/javascript" src="js/paging.ajax.js"></script-->
<script type="text/javascript" src="js/orderby.homeland.js"></script>
<script type="text/javascript">
	$(function () {
		$('#nav').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>
</body>
</html>