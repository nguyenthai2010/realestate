<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>
<base href="<?php bloginfo('template_url')?>/"></base>

<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- Mobile Specific Metas  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="css/jcarousel_skin.css" type="text/css">
<link rel="stylesheet" type="text/css" href="preloader/css/preloader.css"  />
<link rel="stylesheet" type="text/css" href="prettyPhoto/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="css/menusm.css" />
<link type="text/css" href="ui_totop/css/ui.totop.css" rel="stylesheet" />
<link type="text/css" href="twitter_tweet/jquery.tweet.css" rel="stylesheet" />
<link type="text/css" href="css/jquery.thumbnailScroller.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/dc_columns.css"/>
<link rel="stylesheet" type="text/css" href="css/layout.css"/>

<link rel="stylesheet" type="text/css" href="css/custom.css"/>

</head>

<body>
<div id="wrapper">
  
  <div class="navbar">
      <div id="header">
      	<div class="container-fluid">
	        <div class="navbar-inner">
	          <div class="logo pull-left">
	            <a href="<?php echo bloginfo('home');?>" class="extrabold"><img src="images/logo.jpg"/></a> </div>
	          	<div class="social pull-right"> 
	          		<div>
	          			<a class="soc" href="#"><img src="images/fb.jpg" /></a> 
		          		<a class="soc" href="#"><img src="images/twitter.jpg" /></a> 
		          		<a class="soc" href="#"><img src="images/pinterest.jpg" /></a> 
		          		<a class="soc" href="#"><img src="images/rss.jpg" /></a>
		          		<a class="soc" href="#"><img src="images/youtube.jpg" /></a>  
		          		<a class="soc" href="#"><img src="images/share.jpg" /></a> 
		          		<a class="soc" href="#"><img src="images/favourite.jpg" /></a> 
	          		</div>
	          		<div class="phone pull-right">
		          		<span>1300 44 66 37</span>
		          	</div>
	          	</div>
	          	
	        </div>
	      </div>
	  </div>
	  <!-- header -->
	  <?php get_template_part('tpl','menu')?>
  </div>