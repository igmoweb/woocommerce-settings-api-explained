<?php
/**
 * Plugin Name: Hola Dolly
 */

define( 'HOLADOLLY_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

add_filter( 'woocommerce_get_settings_pages', 'holadolly_include_woocommerce_setting_file' );
function holadolly_include_woocommerce_setting_file	( $settings ) {
	$settings[] = include( HOLADOLLY_PLUGIN_DIR . 'class-wc-settings-holadolly.php' );
	return $settings;
}

