<?php
function add_metaboxes_homedesign( $meta_boxes ) {
    $prefix = '_cmb_homedesign_'; // Prefix for all fields
    $meta_boxes[] = array(
        'id' => 'homedesign_metabox',
        'title' => 'Add more information',
        'pages' => array('homedesign'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
				'name' => 'Type',
                'id'   => $prefix . 'type',
                'type' => 'text'
            ),
			array(
				'name' => 'Size (SQM)',
                'id'   => $prefix . 'size',
                'type' => 'text'
            ),
			array(
				'name' => 'Width (Metres)',
                'id'   => $prefix . 'width',
                'type' => 'number',
                'min'  => 0,
                'step' => 5,
            ),
            array(
                'name' => 'Picture',
                'id'   => $prefix . 'picture',
                'type' => 'file'
            ),
            array(
                'name' => 'Bedrooms',
                'id'   => $prefix . 'bedrooms',
                'type'    => 'select',
                'options' => array(
                    '0' => 'None',
                    '1' => '1',
                    '2'   => '2',
                    '3'     => '3',
                    '4'     => '4',
                    '5'     => '5',
                )
            ),
            array(
                'name' => 'Bathrooms',
                'id'   => $prefix . 'bathrooms',
                'type'    => 'select',
                'options' => array(
                    '0' => 'None',
                    '1' => '1',
                    '2'   => '2',
                    '3'     => '3',
                    '4'     => '4'
                )
            ),
            array(
                'name' => 'Garages',
                'id'   => $prefix . 'garages',
                'type'    => 'select',
                'options' => array(
                    '0' => 'None',
                    '1' => '1',
                    '2'   => '2',
                    '3'     => '3'
                )
            )
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'add_metaboxes_homedesign' );

