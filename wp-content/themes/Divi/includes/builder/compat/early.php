<?php
// Compatibility code that needs to be run early and for each request.

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( function_exists( 'ud_get_stateless_media' ) ) {
	// WP Stateless Plugin.
	function et_compat_stateless_skip_cache_busting( $result, $filename ) {
		return $filename;
	}

	add_filter( 'stateless_skip_cache_busting', 'et_compat_stateless_skip_cache_busting', 10, 2 );
}

if ( function_exists( 'sg_cachepress_purge_cache' ) ) {
	// Disable JQuery Body when SG CachePress JS Combine option is enabled
	// because the two features aren't compatible.
	if ( '1' === get_option( 'siteground_optimizer_combine_javascript' ) ) {
		add_filter( 'et_builder_enable_jquery_body', '__return_false' );
	}
}
