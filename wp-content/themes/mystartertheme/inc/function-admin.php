<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN PAGE
	========================
*/

function mysunset_add_admin_page() {
	
	add_menu_page( 'Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd-sunset', 'mysunset_theme_create_page', get_template_directory_uri() . '/img/sunset-icon.png', 110 );
	
}
add_action( 'admin_menu', 'mysunset_add_admin_page' );

function mysunset_theme_create_page() {
	//generation of our admin page
}