<?php if ( ! defined( 'ABSPATH' ) ) exit;

function pdgc_add_assets() {

    // Main theme assets.
    wp_enqueue_style( 'pdgc-main', PDGC_ASSETS . '/css/main.css', array(), PDGC_VER );
    wp_enqueue_script( 'pdgc-main', PDGC_ASSETS . '/main.js', array( 'jquery' ), PDGC_VER, true );
    wp_enqueue_script('pdgc-grt-popup', PDGC_ASSETS . '/vendor/grt-popup/grt-youtube-popup.js', array('jquery'), PDGC_VER, null);
    wp_enqueue_style('pdgc-grt-popup', PDGC_ASSETS . '/vendor/grt-popup/grt-youtube-popup.css', array(), null);

    // Late loaded assets.
    wp_enqueue_style( 'pdgc-late', PDGC_ASSETS . '/vendor/theme/late.css', array(), PDGC_VER );
    wp_enqueue_script( 'pdgc-late', PDGC_ASSETS . '/vendor/theme/late.js', array(), PDGC_VER, true );

}
add_action( 'wp_enqueue_scripts', 'pdgc_add_assets', 20 );

/**
 * Add an aysnc attribute to an enqueued script
 * 
 * @param string $tag Tag for the enqueued script.
 * @param string $handle The script's registered handle.
 * @return string Script tag for the enqueued script
 */
function namespace_async_scripts( $tag, $handle ) {
    // Just return the tag normally if this isn't one we want to async
    if ( 'pdg-google-maps' !== $handle ) {
        return $tag;
    }
    return str_replace( ' src', ' async src', $tag );
}
add_filter( 'script_loader_tag', 'namespace_async_scripts', 10, 2 );