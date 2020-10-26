<?php

// SITE STYLES
add_action('wp_enqueue_scripts', 'david_styles');
function david_styles()
{
	/**
	 * User Styles
	 * --Bootstrap		v4.3.1
	 * --Theme base		v2020
	 * --Style			v2020
	 */
	wp_register_style('bootstrap', ROOT . '/assets/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');
	wp_register_style('theme', ROOT . '/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('theme');
	wp_register_style('theme-styles', ROOT . '/assets/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('theme-styles');
	
}

/**
 * User Scripts  
 * --Bootstrap 	v4.3.1
 * --Main.js 	v2020
 */
add_action('wp_enqueue_scripts', 'david_scripts');
function david_scripts()
{	
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', ROOT . '/assets/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
	wp_enqueue_script('bootstrap');
	wp_register_script('custom', ROOT . '/assets/js/main.js', '', '1.0.0', true);
	wp_enqueue_script('custom');
}

/**
 * Admin Scripts  
 * --Bootstrap.js	 	v4.3.1
 * --Bootstrap.min.css 	v4.3.1
 */
add_action('admin_enqueue_scripts', 'addons');
function addons()
{
	wp_enqueue_script('jquery');
	wp_enqueue_media('wp_media');
	wp_register_script('bootstrap', ROOT . '/assets/js/bootstrap.min.js', '', 1, false);
	wp_enqueue_script('bootstrap');
	
	wp_register_style('bootstrap', ROOT . '/assets/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');
}