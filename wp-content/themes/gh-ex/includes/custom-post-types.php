<?php
/**
 * Custom post types
 *
 * @package Deliver
 */

function offering_post_type() {

    // Labels
    $labels = array(
        'name' => _x("offering", "post type general name"),
        'singular_name' => _x("offering", "post type singular name"),
        'menu_name' => 'offering Profiles',
        'add_new' => _x("Add New", "offering item"),
        'add_new_item' => __("Add New offering"),
        'edit_item' => __("Edit offering"),
        'new_item' => __("New offering"),
        'view_item' => __("View offering"),
        'search_items' => __("Search offering"),
        'not_found' =>  __("No offering Found"),
        'not_found_in_trash' => __("No offering Found in Trash"),
        'parent_item_colon' => ''
    );

    // Register post type
    register_post_type('clients' , array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'rewrite' => false,
        'supports' => array('title', 'editor', 'thumbnail')
    ) );
}
add_action( 'init', 'offering_post_type', 0 );