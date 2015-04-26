<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

<title><?php echo get_bloginfo('name')?> | <?php echo get_bloginfo('description')?></title>
<base href="<?php bloginfo('template_url')?>/"></base>

<?php
	//contact
	require_once 'inc/clsMobileDetect.php'; 
	require_once 'inc/application_top.php';
?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- Mobile Specific Metas  ================================================== -->
<?php echo $iMobile == TRUE ? '<meta name="viewport" content="width=480" />':'' ?>
<?php echo $iPad == TRUE ? '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">':'' ?>

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
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
<script type="text/javascript" src="js/map_location.js"></script> 
<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
	var LANG = "<?php echo $lang ?>";
	var ROOT = "<?php echo ROOT_WS_NAME ?>";
	var iMobile = <?php echo $iMobile == TRUE ? 'true':'false' ?>;
	var iPad = <?php echo $iPad == TRUE ? 'true':'false' ?>;
	var iTablet = <?php echo $iTablet == TRUE ? 'true':'false' ?>;
	var isDesktop = <?php echo $isDesktop == TRUE ? 'true':'false' ?>;
	var iSingle = <?php echo (is_single()) ? 'true':'false';?>;
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js" async="async"></script>
<script type="text/javascript">
	$(function() {
        $(".bookmarkme").click(function() {
            // Mozilla Firefox Bookmark
            if ('sidebar' in window && 'addPanel' in window.sidebar) { 
                window.sidebar.addPanel(location.href,document.title,"");
            } else if( /*@cc_on!@*/false) { // IE Favorite
                window.external.AddFavorite(location.href,document.title); 
            } else { // webkit - safari/chrome
                alert('Press ' + (navigator.userAgent.toLowerCase().indexOf('mac') != - 1 ? 'Command/Cmd' : 'CTRL') + ' + D to bookmark this page.');
            }
        });
    });</script>
</head>

<body>
<div class="loadingfull">
    <img src="images/pages/loading.GIF" width="64" height="64">
</div>
<div id="wrapper">
  
  <div class="navbar">
      <div id="header">
      	<div class="container-fluid">
	        <div class="navbar-inner">
	          <div class="logo pull-left">
	            <a href="<?php echo bloginfo('home');?>" class="extrabold"><img src="images/logo.jpg"/></a> </div>
	          	<div class="social pull-right"> 
	          		<div>
	          			<a class="soc" href="https://www.facebook.com/MastertonHomes" target="_blank"><img src="images/fb.jpg" /></a> 
		          		<a class="soc" href="https://twitter.com/MastertonHomes" target="_blank"><img src="images/twitter.jpg" /></a> 
		          		<a class="soc" href="#" target="_blank"><img src="images/pinterest.jpg" /></a> 
						
		          		<a class="soc" href="http://feeds.feedburner.com/Masterton" target="_blank"><img src="images/rss.jpg" /></a>
		          		<a class="soc" href="https://www.youtube.com/user/MastertonHomes" target="_blank"><img src="images/youtube.jpg" /></a>  
		          		<a class="addthis_button_compact soc"><img src="images/share.jpg" /></a> 
		          		<a class="soc bookmarkme" href="javascript:void(0);" id="bookmarkme"><img src="images/favourite.jpg" /></a>
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