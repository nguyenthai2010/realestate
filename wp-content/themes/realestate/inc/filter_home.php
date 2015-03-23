<?php

function search_home_design($homestyle, $housesize, $housewidth, $bedroom, $bathroom, $garage){
	$args_search = array(
		'relation' 		 => 'AND',
		'post_type' 	 => 'post',
		'posts_per_page' =>  6 ,
		'order'			 => 'asc',
			array(
				'key' => 'tt_type',
				'value' => $homestyle ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_size',
				'value' => array( $price_min, $price_max ) ,
				'type' => 'numeric',
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_width',
				'value' => $housewidth ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'tt_size',
				'value' => $housesize ,
				'compare' => 'LIKE'
			),
			array(
				'key' => 'price',
				'value' => array( $price_min, $price_max ),
				'type' => 'numeric',
				'compare' => 'BETWEEN'
			),
	);
}
