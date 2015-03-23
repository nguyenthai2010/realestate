<?php
    //add theme support
    add_theme_support('post-thumbnails',array('post','page','sliders'));

    //register post type
    include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//register meta box
	require_once( 'meta-box/init.php' );

    //change label post
    include 'inc/change_label_post.php';
	
	//filter home
    include 'inc/filter_home.php';
	
	//register menu
	function register_menu() {
	  register_nav_menu('menu_top',__( 'menu_top' ));
	  
		register_nav_menus( array(
			'menu_top' => 'Header - Menu',
			'menu_about' => 'About - Menu',
			'menu_home_designs' => 'Home design - Menu',
			'menu_home_land' => 'Home land - Menu'
		) );
	  register_nav_menu('menu_service',__( 'menu_service' ));
	  register_nav_menu('menu_home_designs',__( 'menu_home_designs' ));
	  register_nav_menu('menu_home_land',__( 'menu_home_land' ));
	}
	add_action( 'init', 'register_menu' );