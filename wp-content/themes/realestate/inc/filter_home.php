<?php

function search_home_design($homestyle, $housesize, $housewidth, $bedroom, $bathroom, $garage){
	$args_search = array(
		'relation' 		 => 'OR',
		'post_type' 	 => 'post',
		'posts_per_page' =>  6 ,
		'order'			 => 'asc',
		'meta_query' => array(
			array(
				'key' => 'tt_types',
				'value' => $homestyle ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_bedrooms',
				'value' => $bedroom ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_bathrooms',
				'value' => $bathroom ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_garages',
				'value' => $garage ,
				'compare' => 'LIKE'
			)
		)
	);
	
	return query_posts($args_search);
}
