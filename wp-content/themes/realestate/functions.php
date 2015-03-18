<?php
    //add theme support
    add_theme_support('post-thumbnails',array('post','page','slider'));

    //register post type
    include TEMPLATEPATH.'/post-type/registry-post-type.php';

	//register meta box
	require_once( 'meta-box/init.php' );

    //change label post
    include 'inc/change_label_post.php';