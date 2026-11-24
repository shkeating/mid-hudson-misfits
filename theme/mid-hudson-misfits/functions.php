<?php
/**
 * Mid-Hudson Misfits block theme setup.
 *
 * Kept small on purpose: layout CSS for the home page compositions, a font
 * preload, and AI-training opt-out signals (see ADR-0001 in the repo wiki).
 *
 * @package mid-hudson-misfits
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the layout stylesheet on the front end and in the editor.
 */
function mhm_enqueue_assets() {
	wp_enqueue_style(
		'mhm-layout',
		get_theme_file_uri( 'assets/css/layout.css' ),
		array(),
		// Use the file's modified time so a new deploy busts server and browser caches.
		(string) filemtime( get_theme_file_path( 'assets/css/layout.css' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'mhm_enqueue_assets' );
add_action( 'enqueue_block_editor_assets', 'mhm_enqueue_assets' );

/**
 * Preload the two self-hosted fonts used above the fold.
 */
function mhm_preload_fonts() {
	$fonts = array(
		'assets/fonts/houndcats-pb.woff'                => 'font/woff',
		'assets/fonts/dm-sans-latin-opsz-normal.woff2' => 'font/woff2',
	);
	foreach ( $fonts as $path => $type ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="%s" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( $path ) ),
			esc_attr( $type )
		);
	}
}
add_action( 'wp_head', 'mhm_preload_fonts', 1 );

/**
 * Ask crawlers not to use pages or images for AI training. These are
 * requests, not enforcement; the Cloudflare rules do the enforcing.
 *
 * @param array $robots Robots directives.
 * @return array
 */
function mhm_ai_optout_meta( $robots ) {
	$robots['noai']      = true;
	$robots['noimageai'] = true;
	return $robots;
}
add_filter( 'wp_robots', 'mhm_ai_optout_meta' );

/**
 * Same signal as an HTTP header, which also covers image requests.
 *
 * @param array $headers Response headers.
 * @return array
 */
function mhm_ai_optout_header( $headers ) {
	$headers['X-Robots-Tag'] = 'noai, noimageai';
	return $headers;
}
add_filter( 'wp_headers', 'mhm_ai_optout_header' );

/**
 * Pattern category for the home page sections.
 */
function mhm_register_pattern_category() {
	register_block_pattern_category(
		'mhm-home',
		array( 'label' => __( 'Misfits home page', 'mid-hudson-misfits' ) )
	);
}
add_action( 'init', 'mhm_register_pattern_category' );
