<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION
function add_search_form($items, $args) {
    if( $args->theme_location == 'menu-1' ){
    $items .= '<li class="menu-item">'
            . '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">'
            . '<label>'
            . '<span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>'
            . '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
            . '</label>'
            . '<input type="submit" class="search-submit" value="'. esc_attr_x('Search', 'submit button') .'" />'
            . '</form>'
            . '</li>';
    }
  return $items;
}
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);