<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register menu locations.
 */
function pdgc_register_nav() {
    register_nav_menus( array(
        'footer-menu' => 'Footer navigation',
        'top-menu' => 'Top menu',
    ) );
}
add_action( 'init', 'pdgc_register_nav' );

/**
 * Add classes on navigation <a> tags
 */
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);