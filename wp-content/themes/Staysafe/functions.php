<?php 

add_action( 'wp_enqueue_scripts', 'staysafe_scripts' );

function staysafe_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );



	wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true );
};

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_action( 'after_setup_theme', 'add_menu' );

function add_menu() {
	register_nav_menu( 'menu_main_header', 'Main menu' );
	register_nav_menu( 'menu_footer', 'Footer menu' );
	register_nav_menu( 'menu_lang', 'Lang selector' );
};

function carbon_lang_prefix() {
	$prefix = '';
	if ( ! defined( 'ICL_LANGUAGE_CODE' ) ) {
		return $prefix;
	}
	$prefix = '_' . ICL_LANGUAGE_CODE;
	return $prefix;
};


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
	require_once('includes/carbon-fields-options/theme-options.php');
	require_once('includes/carbon-fields-options/post-meta.php');
}

add_action('init', 'create_global_variable');
function create_global_variable() {
	global $stay_safe;
	$stay_safe = [
		'phone' => carbon_get_theme_option('site_phone'),
		'phone_digits' => carbon_get_theme_option('site_phone_digits'),
		'email' => carbon_get_theme_option('site_email'),
		'facebook' => carbon_get_theme_option('facebook'),
		'instagram' => carbon_get_theme_option('instagram'),
		'address_text' => carbon_get_theme_option('address_text'.carbon_lang_prefix()),
		'address_link' => carbon_get_theme_option('address_link'),
		'donate_text' => carbon_get_theme_option('donate_text'.carbon_lang_prefix()),
		'donate' => carbon_get_theme_option('donate'),
		'copy' => carbon_get_theme_option('copy'),
	];
}
?>