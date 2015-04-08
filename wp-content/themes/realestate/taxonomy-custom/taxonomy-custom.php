<?php

function homeland_init() {
	// create a new taxonomy
	register_taxonomy(
		'homeland',
		'homeland',
		array(
			'label' => __( 'Home Land Category' ),
			'rewrite' => array( 'slug' => 'homeland-category' ),
			
		)
	);
}
add_action( 'init', 'homeland_init' );