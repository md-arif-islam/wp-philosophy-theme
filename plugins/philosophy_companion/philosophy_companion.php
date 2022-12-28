<?php
/*
Plugin Name: Philosophy-Companion
Plugin URI:
Description: Companion plugin for the philosophy theme
Version: 1.0
Author: LWHH
Author URI:
License: GPLv2 or later
Text Domain: philosophy_companion
*/

function philosophy_companion_register_my_cpts_book() {

    /**
     * Post Type: Books.
     */

    $labels = array(
        "name" => __( "Books", "philosophy" ),
        "singular_name" => __( "Book", "philosophy" ),
        "all_items" => __( "My Books", "philosophy" ),
        "add_new" => __( "New Book", "philosophy" ),
    );

    $args = array(
        "label" => __( "Books", "philosophy" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => "books",
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array( "slug" => "book", "with_front" => false ),
        "query_var" => true,
        "menu_position" => 6,
        "menu_icon" => "dashicons-book-alt",
        "supports" => array( "title", "editor", "thumbnail", "excerpt" ),
        "taxonomies" => array( "category" ),
    );

    register_post_type( "book", $args );
}

add_action( 'init', 'philosophy_companion_register_my_cpts_book' );
