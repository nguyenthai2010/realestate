<?php 
function bt_paginate(){ 
		global $wp_query, $wp_rewrite;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		$pagination = array(
	    'base'         => @add_query_arg('paged','%#%'),
	    'format'       => '',
	    'total'        => $wp_query->max_num_pages,
	    'current'      => $current,
	    'show_all'     => false,
	    'end_size'     => 1,
	    'mid_size'     => 5,
	    'prev_next'    => true,
	    'prev_text'    => __('← Previous'),
        'next_text'    => __('Next →'),
	    'type'         => 'plain',
	    'add_args'     => False,
		 'add_fragment' =>''  ); 		

		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
		
		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );		
		echo paginate_links( $pagination );
		
}

function paging_ajax_for_pagination() {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Page number
	$html = '';
	$pag = 0;
	if( filter_var( intval( $paged ), FILTER_VALIDATE_INT ) ) {
		$pag = $paged;
		$args = array(
			'post_type' 	 => 'homeland',
			'paged' => $pag, // Uses the page number passed via AJAX
			'posts_per_page' => 2 // Change this as you wish
		);
		$loop = new WP_Query( $args );
			
		if( $loop->have_posts() ) {
			while( $loop->have_posts() ) {
				$loop->the_post();
				// Build the HTML string with your post's contents
			}
				
			wp_reset_query();
		}
	}
		
	echo $html;
	exit();

}

add_action( 'wp_ajax_paging_homeland', 'paging_ajax_for_pagination' );
add_action( 'wp_ajax_nopriv_paging_homeland', 'paging_ajax_for_pagination' );