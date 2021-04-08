<?php

<?php
/**
 * Functions.
 *
 * @package Gemstone
 */

// Constants
if ( ! defined( 'GEMSTONE_BUILD_URI' ) ) {
	define( 'GEMSTONE_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}


function gemstone_files() {
    wp_enqueue_style('gemstone_main_style', GEMSTONE_BUILD_URI . '/style.css');
    wp_enqueue_style('main-css', GEMSTONE_BUILD_URI . 'assets/build/css/main.css', false, '1.1', 'all');
    wp_enqueue_style('main-js', GEMSTONE_BUILD_URI . '/assets/src/js/main.js', ['jquery'], '1.1', true);
}

add_action('wp_enqueue_scripts', 'gemstone_files');

                        // google font 

function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap', false );
}


add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
   