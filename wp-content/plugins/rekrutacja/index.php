<?php
/*
Plugin Name: Recrutation task
Description: Recrutation task
Version: 1.0
Author: Daniel Czerepak
*/
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
	add_menu_page(
            'Plugin new WP Admin page',
            'WP Admin page',
            'manage_options',
            'myplugin/myplugin-admin-page.php',
            'myplguin_admin_page',
            'dashicons-tickets',
            6
    );
}

function myplguin_admin_page(){
    echo '<form action="" class="plugin-form" method="post">';
	$default_content=get_option('plugin-form');
	$editor_id = 'plugin-form';
	$option_name='plugin-form';
	$default_content=html_entity_decode($default_content);
	$default_content=stripslashes($default_content);
	wp_editor( $default_content, $editor_id,array(
            'textarea_name' => $option_name,
            'media_buttons' => false,
            'editor_height' => 350,'
            teeny' => true)
    );
	submit_button('Save', 'primary');   echo '</form>';
	if(isset($_POST['plugin-form'])  ){
		$var2=htmlentities(wpautop($_POST['plugin-form']));
		update_option('plugin-form', $var2);
	}
}