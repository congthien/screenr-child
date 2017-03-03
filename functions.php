<?php
/*
    Screenr Child theme
*/

/**
 * Loads parent and child themes' style.css
 */
function screenr_child_theme_enqueue_styles() {
    $parent_style = 'screenr_parent_style';
    $parent_base_dir = 'screenr';

    wp_enqueue_style( $parent_style,
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( $parent_base_dir ) ? wp_get_theme( $parent_base_dir )->get('Version') : ''
    );

    wp_enqueue_style( $parent_style . '_child_style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'screenr_child_theme_enqueue_styles' );
