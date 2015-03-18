<?php

	function revcon_change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Home Designs';
	    $submenu['edit.php'][5][0] = 'View All';
	    $submenu['edit.php'][10][0] = 'Add New';
	    $submenu['edit.php'][16][0] = 'Tags';
	    echo '';
	}
	function revcon_change_post_object() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Home Designs';
	    $labels->singular_name = 'Home Designs';
	    $labels->add_new = 'Add Home Designs';
	    $labels->add_new_item = 'Add Home Designs';
	    $labels->edit_item = 'Edit Home Designs';
	    $labels->new_item = 'Home Designs';
	    $labels->view_item = 'View Home Designs';
	    $labels->search_items = 'Search Home Designs';
	    $labels->not_found = 'No News found';
	    $labels->not_found_in_trash = 'No News found in Trash';
	    $labels->all_items = 'All Home Designs';
	    $labels->menu_name = 'Home Designs';
	    $labels->name_admin_bar = 'Home Designs';
	}
	 
	add_action( 'admin_menu', 'revcon_change_post_label' );
	add_action( 'init', 'revcon_change_post_object' );