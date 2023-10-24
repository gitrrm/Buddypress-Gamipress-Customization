<?php  
/**
 * Theme Functions
 * 
 * @package Nandan.Global
 */ 

if(!defined('NANDAN_DIR_PATH')){
	define('NANDAN_DIR_PATH', untrailingslashit(get_template_directory()));
}

if( !defined('NANDAN_DIR_URI')){
	define('NANDAN_DIR_URI', untrailingslashit(get_template_directory_uri()));
}



function theme_styles_scripts(){
	// enqueue style
	wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(NANDAN_DIR_PATH . '/style.css'),'all');
	wp_enqueue_style('bootstrap-grid-css', NANDAN_DIR_URI . '/assets/src/lib/css/bootstrap-grid.min.css', [], false,'all');

	// enqueue script

	wp_enqueue_script('main-js', NANDAN_DIR_URI . '/assets/main.js', [], filemtime(NANDAN_DIR_PATH . '/assets/main.js'), true);
	wp_enqueue_script('bootstrap-js', NANDAN_DIR_URI . '/assets/src/lib/js/bootstrap.min.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'theme_styles_scripts');


// Babu Rao Apte as the default avatar if the current user role is administrator or subscriber and do not have the profile picture uploaded.

function replace_default_avatar_with_custom($avatar, $id_or_email, $size, $default, $alt) {

	$current_user = wp_get_current_user();
	$user_id = $current_user->ID;
	$roles = (array) $current_user->roles;

    // Check if the user is an object (user ID was provided) or email.
    /*if (is_object($id_or_email)) {
        $user = $id_or_email;

    } else {
        $user = get_user_by('email', $id_or_email);
    }*/

    // Check if the user has set a custom avatar.
    $custom_avatar = get_user_meta($user_id, 'custom_avatar', true);

    if(is_user_logged_in()){
    	if(in_array('administrator', (array)$roles) || in_array('subscriber', (array)$roles)){
    		if ($custom_avatar) {    	
	    		// Use the custom avatar image if available.
	        	$avatar = '<img alt="' . esc_attr($alt) . '" src="' . esc_url($custom_avatar) . '" class="avatar avatar-' . esc_attr($size) . '" height="' . esc_attr($size) . '" width="' . esc_attr($size) . '" />';        
		    } else {		    	
				$avatar = '<img alt="' . esc_attr($alt) . '" src="http://34.93.75.211/wp-content/uploads/2023/10/default-user.png" class="avatar avatar-' . esc_attr($size) . '" height="' . esc_attr($size) . '" width="' . esc_attr($size) . '" />'; 	
		    }
    	}
    }
    return $avatar;
}

add_filter('get_avatar', 'replace_default_avatar_with_custom', 10, 5);
