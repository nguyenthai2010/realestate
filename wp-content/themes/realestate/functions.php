<?php
    //add theme support
    add_theme_support('post-thumbnails',array('post','page','sliders'));

    //register post type
    include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//register meta box
	require_once( 'meta-box/init.php' );

    //change label post
    include 'inc/change_label_post.php';
	
	//register menu
	function register_menu() {
	  register_nav_menu('menu_top',__( 'menu_top' ));
	  
		register_nav_menus( array(
			'menu_top' => 'Header - Menu',
			'menu_footer' => 'Footer - Menu',
			'menu_service' => 'Service - Menu'
		) );
	  register_nav_menu('menu_service',__( 'menu_service' ));
	  register_nav_menu('menu_footer',__( 'menu_footer' ));
	}
	add_action( 'init', 'register_menu' );