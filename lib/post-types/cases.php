<?php
/*
Plugin Name: DigiMix Reviews
Plugin URI: http://digimix.us/
Description: Declares a plugin that will create a custom post type displaying Reviewss.
Version: 1.0
Author: DigiMix
Author URI: http://digimix.us/
License: GPLv2
*/

function create_cases() {
    register_post_type( 'cases',
        array(
            'labels' => array(
			'name'                => _x( 'Case', 'Post Type General Name', 'mix' ),
			'singular_name'       => _x( 'Case', 'Post Type Singular Name', 'mix' ),
			'menu_name'           => __( 'Cases', 'mix' ),
			'parent_item_colon'   => __( 'Parent Item:', 'mix' ),
			'all_items'           => __( 'All Cases', 'mix' ),
			'view_item'           => __( 'View Case', 'mix' ),
			'add_new_item'        => __( 'Add New Case', 'mix' ),
			'add_new'             => __( 'Add New', 'mix' ),
			'edit_item'           => __( 'Edit Case', 'mix' ),
			'update_item'         => __( 'Update Case', 'mix' ),
			'search_items'        => __( 'Search Cases', 'mix' ),
			'not_found'           => __( 'Not found', 'mix' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'mix' ),
            ),
            'label' => __( 'cases', 'mix' ),
            'description' => __( 'Cases directory.', 'mix' ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'recent-cases' ),
            'capability_type' => 'post',
            'menu_position' => 9,
            'supports' => array('title','editor', 'thumbnail',  'excerpt'),
            'taxonomies' => array( '',),
            'menu_icon'=> 'dashicons-id-alt',
            'has_archive' => true,
            'hierarchical' => false
        )
    );

        /* IMPORTIONT: Remember this line! */
    flush_rewrite_rules( false );/* Please read "Update 2" before adding this line */
}

add_action( 'init', 'create_cases', 11 );

?>