<?php
/**
 * Plugin Name: Craft
 * Description: Craft Elementor Widgets
 * Version:     0.1
 * Author:      Amphora Creative
 * Author URI:  https://amphoracreative.com
 * Text Domain: craft
 */

function register_widgets( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/heading.php' );

	$widgets_manager->register( new \Elementor_Heading() );

}
add_action( 'elementor/widgets/register', 'register_widgets' );