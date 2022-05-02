<?php if ( ! defined( 'ABSPATH' ) ) exit;?>

<?php

    function sparkle_register_styles(){

        wp_enqueue_style('sparkle-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
        wp_enqueue_style('sparkle-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array(), '6.0.0', 'all');

    }


    add_action('wp_enqueue_scripts', 'sparkle_register_styles');

    function sparkle_register_scripts(){

        wp_enqueue_script('sage/acf-input.min.js', plugins_url('advanced-custom-fields-pro/assets/js/acf-input.js'), ('jquery'), null, true);
        wp_enqueue_script('sage/acf-input.min.js', plugins_url('advanced-custom-fields-pro/assets/js/acf-field-group.js'), ('jquery'), null, true);

    }

    add_action('wp_enqueue_scripts', 'sparkle_register_scripts');

    function sparkle_theme_support(){
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('widgets');
    }

    add_action('after_setup_theme', 'sparkle_theme_support');

    /**
     * Add dashicon loading functionality for blocks
     */
    function ww_load_dashicons(){
        wp_enqueue_style('dashicons');
     }

    add_action('wp_enqueue_scripts', 'ww_load_dashicons');

    /**
     * Add options page for footer
     */
    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Footer Information',
            'menu_title'	=> 'Footer Options'
        ));
        
    }

?>