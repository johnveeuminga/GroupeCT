<?php
/*
    Plugin Name: Groupe CT Roles
    Plugin URI: https://ctrlweb.ca/
    Author: Daniel Le Blanc
    Version: 1.0
    Author URI: https://ctrlweb.ca/
    */

if ( ! defined( 'WPINC' ) ) {
	die;
}

function groupe_ct_roles_menu_page_removing() {
	$user = wp_get_current_user();
	if ( in_array( 'editor', (array) $user->roles ) ) {
		//The user has the "author" role
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'tools.php' );
	}

}
add_action( 'admin_menu', 'groupe_ct_roles_menu_page_removing' );


function groupe_ct_roles_update_editor_caps() {
	$role = get_role( 'editor' );

	$role->remove_cap( 'moderate_comments' );
	$role->add_cap('create_users');
	$role->add_cap('delete_users');
	$role->add_cap('edit_users');
	$role->add_cap('list_users');
	$role->add_cap('remove_users');
	$role->add_cap('manage_options');
}
add_action( 'admin_init', 'groupe_ct_roles_update_editor_caps');

