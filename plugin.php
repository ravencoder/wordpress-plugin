<?php
/*
Plugin Name: Cyclone Slider Template: Rodman
Version: 0.1
Description: Creates a super light minimalist slideshow.
*/

add_filter( 'cycloneslider_template_list', 'cycloneslider_template_rodman' );
function cycloneslider_template_rodman( $template_list ) {

    $template_list[ 'rodman' ] = array(
        'name'          => 'Rodman',
        'path'          => realpath( plugin_dir_path( __FILE__ ) ),
        'url'           => plugin_dir_url( __FILE__ ),
        'supports'      => array(
            'image'
        ),
        'location_name' => 'plugin',
        'scripts'       => array(
            'tcycle.js'
        ),
        'styles'        => array()
    );

    return $template_list;
}