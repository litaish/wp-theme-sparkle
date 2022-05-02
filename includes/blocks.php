<?php if ( ! defined( 'ABSPATH' ) ) exit;

function pdgc_acf_blocks() {

        // Check function exists.
        if( function_exists('acf_register_block_type') ) {

            // register a block.
            acf_register_block_type(array(
                'name'              => 'header_text',
                'title'             => __('Header Title'),
                'description'       => __('Galvenes teksta bloks.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/header-text/index.php',
                'category'          => 'common',
                'icon'              => 'dashicons-editor-aligncenter',
                'keywords'          => array( 'header', 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                'background' => '#FFCB66',
                'foreground' => '#fff',
                'src' => 'text',
                    )
            ));
            acf_register_block_type(array(
                'name'              => 'background_quote',
                'title'             => __('Picture background with quote'),
                'description'       => __('Fona attēls ar citātu.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/background-quote/index.php',
                'category'          => 'common',
                'icon'              => 'dashicons-format-quote',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'format-quote',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'person_quote',
                'title'             => __('Quoted person'),
                'description'       => __('Citāta bloks.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/person-quote/index.php',
                'category'          => 'common',
                'icon'              => 'dashicons-format-quote',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                // Specifying colors
                'icon' => array(
                    // Specifying a background color to appear with the icon e.g.: in the inserter.
                    'background' => '#FFCB66',
                    // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
                    'foreground' => '#fff',
                    // Specifying a dashicon for the block
                    'src' => 'format-quote',
                )
                            
            ));
            acf_register_block_type(array(
                'name'              => 'video_block',
                'title'             => __('Video block'),
                'description'       => __('Video bloks ar rediģējamu thumbnail.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/video-block/index.php',
                'category'          => 'embed',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'enqueue_script'    => get_stylesheet_directory_uri() . '/template-parts/blocks/video-block/video-block.js',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'format-video',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'business_goals',
                'title'             => __('Business Goals'),
                'description'       => __('Uzņēmuma mērķi.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/business-goals/index.php',
                'category'          => 'layout',
                'keywords'          => array( 'quote', 'layout' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'id-alt',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'header_text_small',
                'title'             => __('Header Text Small'),
                'description'       => __('Galvene (small)'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/header-text-small/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'edit-large',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'yellow_info',
                'title'             => __('Yellow Info Block'),
                'description'       => __('Dzeltens Informācijas bloks'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/yellow-info/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'welcome-widgets-menus',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'selected_by',
                'title'             => __('Selected By'),
                'description'       => __('Sapņus atlasa.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/selected-by/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'welcome-write-blog',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'buttons_to_pages',
                'title'             => __('Buttons To Pages'),
                'description'       => __('Pogas uz saitēm.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/buttons-to-pages/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'admin-site-alt3',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'regular_paragraph',
                'title'             => __('Regular Paragraph'),
                'description'       => __('Parasts paragrāfs'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/regular-paragraph/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'menu-alt3',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'img_gallery',
                'title'             => __('Image Gallery'),
                'description'       => __('Attēlu galerija'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/img-gallery/index.php',
                'category'          => 'layout',
                'keywords'          => array( 'gallery' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'images-alt2',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'supporters',
                'title'             => __('Supporters Logos'),
                'description'       => __('Atbalstītāji un atbalstītāju logo'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/supporters-logos/index.php',
                'category'          => 'layout',
                'keywords'          => array( 'gallery' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'format-gallery',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'cards_with_links',
                'title'             => __('Cards With Links'),
                'description'       => __('Kartiņas ar saitēm.'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/cards-links/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'welcome-widgets-menus',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'team_members',
                'title'             => __('Team Members Cards'),
                'description'       => __('Komandas biedru kartiņas'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/team-members/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'admin-users',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'stories',
                'title'             => __('Stories Cards'),
                'description'       => __('Stāsti'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/stories/index.php',
                'category'          => 'common',
                'keywords'          => array( 'quote' ),
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'enqueue_script'    => get_stylesheet_directory_uri() . '/template-parts/blocks/stories/stories.js',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'welcome-view-site',
                )
            ));
            acf_register_block_type(array(
                'name'              => 'supporters-map',
                'title'             => __('Supporters Map'),
                'description'       => __('Atbalstītāju karte'),
                'render_template'   => PDGC_PATH . '/template-parts/blocks/supporters-map/index.php',
                'category'          => 'common',
                'enqueue_style'     => PDGC_ASSETS . '/css/main.css',
                'enqueue_script'    => get_stylesheet_directory_uri() . '/template-parts/blocks/supporters-map/supporters-map.js',
                'icon' => array(
                    'background' => '#FFCB66',
                    'foreground' => '#fff',
                    'src' => 'admin-site-alt',
                )
            ));
        }

}
add_action( 'acf/init', 'pdgc_acf_blocks' );