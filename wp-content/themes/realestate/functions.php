<?php
    //add theme support
    add_theme_support('post-thumbnails',array('post','page','sliders','testimonials','promotion'));

    //register post type
    include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//register meta box
	require_once( 'meta-box/init.php' );

    //change label post
    include 'inc/change_label_post.php';
	
	//add type columns
    include 'inc/type_column.php';
	
	//filter home
    include 'inc/filter_home.php';
	
	//contact form
	include TEMPLATEPATH . '/email/smtp.php';
	include TEMPLATEPATH . '/email/xtemplate.contact.php';
	
	//contact form
	include TEMPLATEPATH . '/email/xtemplate.jimform.php';
	
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
	
	//rewrite view all category
	function change_viewall_url_rewrite() {
		if ( is_category()) {
			wp_redirect( home_url( "/category/view-all" ));
			exit();
		}	
	}
	add_action( 'template_redirect', 'change_viewall_url_rewrite' );
	
	function get_page_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'page'");
	    return $id;
	}
	
	function get_post_id_by_slug($slug){
	    global $wpdb;
	    $id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$slug."'AND post_type = 'post'");
	    return $id;
	}
	
	function get_post_id( $slug, $post_type ) {
		if(!empty($slug)){
		    $query = new WP_Query(
		        array(
		            'name' => $slug,
		            'post_type' => $post_type
		        )
		    );
		
		    $query->the_post();
		
		    return get_the_ID();
		}
	}