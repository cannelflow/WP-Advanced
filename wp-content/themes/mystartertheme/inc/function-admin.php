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

function mysunset_custom_settings() {
	register_setting( 'sunset-settings-group', 'first_name' );
	register_setting( 'sunset-settings-group', 'last_name' );
	register_setting( 'sunset-settings-group', 'twitter_handler', 'sunset_sanitize_twitter_handler' );
	register_setting( 'sunset-settings-group', 'facebook_handler' );
	register_setting( 'sunset-settings-group', 'gplus_handler' );
	
	add_settings_section( 'sunset-sidebar-options', 'Sidebar Option', 'sunset_sidebar_options', 'alecaddd_sunset');
	add_settings_field( 'sidebar-name', 'Full Name', 'sunset_sidebar_name', 'alecaddd_sunset', 'sunset-sidebar-options');
    add_settings_field( 'sidebar-twitter', 'Twitter handler', 'sunset_sidebar_twitter', 'alecaddd_sunset', 'sunset-sidebar-options');
	add_settings_field( 'sidebar-facebook', 'Facebook handler', 'sunset_sidebar_facebook', 'alecaddd_sunset', 'sunset-sidebar-options');
	add_settings_field( 'sidebar-gplus', 'Google+ handler', 'sunset_sidebar_gplus', 'alecaddd_sunset', 'sunset-sidebar-options');
	
}

function sunset_sidebar_options() {
	echo 'Customize your Sidebar Information';
}

function sunset_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function sunset_sidebar_twitter() {
	$twitter = esc_attr( get_option( 'twitter_handler' ) );
	echo '<input type="text" name="twitter_handler" value="'.$twitter.'" placeholder="Twitter handler" /><p class="description">Input your Twitter username without the @ character.</p>';
}

function sunset_sidebar_facebook() {
	$facebook = esc_attr( get_option( 'facebook_handler' ) );
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook handler" />';
}

function sunset_sidebar_gplus() {
	$gplus = esc_attr( get_option( 'gplus_handler' ) );
	echo '<input type="text" name="gplus_handler" value="'.$gplus.'" placeholder="Google+ handler" />';
}





//Activate custom settings
	add_action( 'admin_init', 'mysunset_custom_settings' );


function mysunset_theme_create_page() {
	//generation of our admin page
	require_once( get_template_directory() . '/inc/templates/sunset-admin.php' );
}

function mysunset_theme_settings_page() {
	//generation of our admin page
	echo '<h1>Sunset Custom CSS</h1>';
}