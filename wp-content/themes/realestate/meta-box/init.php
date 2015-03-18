<?php

$prefix = 'tt_';

global $meta_boxes;

$meta_boxes = array();

// 1st meta box
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'homedesign',

    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Home Design',

    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array( 'post'),

    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',

    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',

    // List of meta fields
    'fields' => array(
        // TEXT
        array(
            'name'  => 'Text',
            'id'    => "{$prefix}type",
            'type'  => 'text'
        ),
        array(
            'name' => 'Size (SQM)',
            'id'   =>  "{$prefix}size",
            'type' => 'text',
        ),
        array(
            'name' => 'Width (Metres)',
            'id'   => "{$prefix}width",
            'type' => 'number',
            'min'  => 0,
            'step' => 1,
        ),
        array(
            'name' => 'Picture',
            'id'   => "{$prefix}picture",
            'type' => 'image_advanced'
        ),
        array(
            'name' => 'Bedrooms',
            'id'   => "{$prefix}bedrooms",
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
            'id'   => "{$prefix}bathrooms",
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
            'id'   => "{$prefix}garages",
            'type'    => 'select',
            'options' => array(
                '0' => 'None',
                '1' => '1',
                '2'   => '2',
                '3'     => '3'
            )
        )
    )
);


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function register_meta_boxes()
{
    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if ( !class_exists( 'RW_Meta_Box' ) )
        return;

    global $meta_boxes;
    foreach ( $meta_boxes as $meta_box )
    {
        new RW_Meta_Box( $meta_box );
    }
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'register_meta_boxes' );