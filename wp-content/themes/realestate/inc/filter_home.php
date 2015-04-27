<?php

function search_home_design($homestyle, $housesize, $housewidth, $bedroom, $bathroom, $garage){
	$hsize = split(',',$housesize);
	$hwidth = split(',',$housewidth);
	if(!empty($homestyle)){
		
	}
	$args_search = array(
		'relation' 		 => 'AND',
		'post_type' 	 => 'post',
		'posts_per_page' =>  12 ,
		'order'			 => 'asc',
		'category_name'  => $homestyle,
		'meta_query' => array(
			'relation' => 'AND',

			array(
				'key' => 'tt_size',
				'value' => array(
						$hsize[0], // don't forget to escape user input
						$hsize[1]
				),
				'compare' => 'BETWEEN'
			),
			array(
				'key' => 'tt_width',
				'value' => array(
						$hwidth[0], // don't forget to escape user input
						$hwidth[1]
				),
				'compare' => 'BETWEEN'
			),
            array(
                'key' => 'tt_bedrooms',
                'value' => $bedroom ,
                'compare' => '='
            ),
            array(
                'key' => 'tt_bathrooms',
                'value' => $bathroom ,
                'compare' => '='
            ),
			array(
				'key' => 'tt_garages',
				'value' => $garage ,
				'compare' => '='
			)
		)
	);
	
	return new WP_Query($args_search);
}

function get_category_post($category){
	//print_r($category);
	if ($category == 'view-all'){
		$category = '';
	}
	global $paged;
	$args_cat = array(
		'post_type' 	 => 'post',
		'posts_per_page' =>  -1 ,
		'order'			 => 'asc',
		'category_name'  => $category,
		'paged'		=> $pageds
	);
	
	return query_posts($args_cat);
}
