<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'unite-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'unite-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    

}


/**
 * Add the new Post Type Film
 */

if ( ! function_exists('film') ) {

// Register Custom Post Type
function film() {

	$labels = array(
		'name'                  => _x( 'Films', 'Post Type General Name', 'films' ),
		'singular_name'         => _x( 'Film', 'Post Type Singular Name', 'films' ),
		'menu_name'             => __( 'Films', 'films' ),
		'name_admin_bar'        => __( 'Film', 'films' ),
		'archives'              => __( 'Film Archives', 'films' ),
		'attributes'            => __( 'Film Attributes', 'films' ),
		'parent_item_colon'     => __( 'Parent Film:', 'films' ),
		'all_items'             => __( 'All Films', 'films' ),
		'add_new_item'          => __( 'Add New Film', 'films' ),
		'add_new'               => __( 'Add New', 'films' ),
		'new_item'              => __( 'New Film', 'films' ),
		'edit_item'             => __( 'Edit Film', 'films' ),
		'update_item'           => __( 'Update Film', 'films' ),
		'view_item'             => __( 'View Film', 'films' ),
		'view_items'            => __( 'View Films', 'films' ),
		'search_items'          => __( 'Search Film', 'films' ),
		'not_found'             => __( 'Not found', 'films' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'films' ),
		'featured_image'        => __( 'Featured Image', 'films' ),
		'set_featured_image'    => __( 'Set featured image', 'films' ),
		'remove_featured_image' => __( 'Remove featured image', 'films' ),
		'use_featured_image'    => __( 'Use as featured image', 'films' ),
		'insert_into_item'      => __( 'Insert into item', 'films' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'films' ),
		'items_list'            => __( 'Films list', 'films' ),
		'items_list_navigation' => __( 'Films list navigation', 'films' ),
		'filter_items_list'     => __( 'Filter items list', 'films' ),
	);
	$args = array(
		'label'                 => __( 'Film', 'films' ),
		'description'           => __( 'Films', 'films' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'films', $args );

}
add_action( 'init', 'film', 0 );

}
?>