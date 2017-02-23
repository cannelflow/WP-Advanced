<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN PAGE
	========================
*/

function mysunset_add_admin_page() {
	
	//Generate Sunset Admin Page
	add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'cannelflow_sunset', 'mysunset_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
	
	//Generate Sunset Admin Sub Pages
	add_submenu_page( 'cannelflow_sunset', 'Sunset Theme Options', 'General', 'manage_options', 'cannelflow_sunset', 'mysunset_theme_create_page' );
	add_submenu_page( 'cannelflow_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'cannelflow_sunset_css', 'mysunset_theme_settings_page');
	
}
add_action( 'admin_menu', 'mysunset_add_admin_page' );

function mysunset_theme_create_page() {
	//generation of our admin page
	require_once( get_template_directory() . '/inc/templates/sunset-admin.php' );
}

function mysunset_theme_settings_page() {
	//generation of our admin page
	echo '<h1>Sunset Custom CSS</h1>';
}