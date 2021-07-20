<?php
/**
 * Theme functionality.
 *
 * @author WebDevStudios
 * @package wds-headless-theme
 * @since 1.0
 */

// Load TGM Plugin Activation.
require_once 'inc/tgm/tgm.php';

// Load WordPress helpers.
require_once 'inc/wordpress.php';

require_once 'inc/acf-pro.php';
require_once 'inc/block-manager.php';
require_once 'inc/custom-post-types.php';
require_once 'inc/wp-search-with-algolia.php';
require_once 'inc/wp-graphql.php';
require_once 'inc/yoast-seo.php';

/**
 * Sets up theme defaults.
 *
 * @author WebDevStudios
 * @since 1.0
 */
function wds_theme_setup() {

	// Add support for post thumbnails.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'nineteen-twenty', 1920, 540, true );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Add excerpts to pages.
	add_post_type_support( 'page', 'excerpt' );

	// Register nav menus.
	register_nav_menus(
		[
			'footer-menu'  => esc_html__( 'Footer Menu' ),
			'mobile-menu'  => esc_html__( 'Mobile Menu' ),
			'primary-menu' => esc_html__( 'Primary Menu' ),
		]
	);
}
add_action( 'after_setup_theme', 'wds_theme_setup' );

/**
 * Enqueue Block Script.
 *
 * @author WebDevStudios
 * @since 1.0
 */
function wds_enqueue_block_editor_assets() {
	wp_enqueue_script(
		'bri-blocks',
		get_stylesheet_directory_uri() . '/js/blocks.js',
		[ 'wp-blocks', 'wp-element' ],
		'1.0',
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wds_enqueue_block_editor_assets' );

add_action('acf/init', 'my_acf_init');
add_action('acf/init', 'register_acf_block_types');
function my_acf_init() {

    // check function exists
    if( function_exists('acf_register_block') ) {

        // register a testimonial block
        acf_register_block(array(
            'name'				=> 'testimonial',
            'title'				=> __('Testimonial'),
            'description'		=> __('A custom testimonial block.'),
            'render_callback'	=> 'my_acf_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'testimonial', 'quote' ),
        ));
    }
}

function register_acf_block_types(){

    acf_register_block_type(
        array(
            'name' => 'toaster',
            'title' => __('Toaster'),
            'description' => __('A custom toaster block.'),
            'render_template' => 'template-parts/toaster/toaster.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('toaster', 'product'),
        )
    );
}

function my_acf_block_render_callback( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/blocks/content-{$slug}.php") );
    }
}
