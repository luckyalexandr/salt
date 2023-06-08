<?php
add_action( 'wp_enqueue_scripts', 'true_enqueue_js_and_css' );
function true_enqueue_js_and_css(): void {

	// CSS
	wp_enqueue_style(
		'bootstrap_css',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css',
	);
	wp_enqueue_style(
		'awesome_css',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css',
	);
	wp_enqueue_style(
		'style_css',
		get_stylesheet_directory_uri() . '/css/style.css',
	);

	// JavaScript
	wp_enqueue_script(
		'jquery_js',
		'https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js',
		array(),
		time(),
		true
	);
	wp_enqueue_script(
		'popper_js',
//		get_stylesheet_directory_uri() .
		'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js',
		array(),
		time(),
		true
	);
	wp_enqueue_script(
		'bootstrap_js',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js',
		array(),
		time(),
		true
	);
	wp_enqueue_script(
		'navigation_js',
		get_stylesheet_directory_uri() . '/js/navigation.js',
		array(),
		time(),
		true
	);
}

//add_filter( 'show_admin_bar', '__return_false');

## Add custom menus
register_nav_menus( array(
	'main'      => 'Главное меню',
	'in_footer' => 'Меню в подвале',
	'languages' => 'Переключатель языков',
) );

//add_action('init', 'register_nav_menus');

## закроем возможность публикации через xmlrpc.php
add_filter('xmlrpc_enabled', '__return_false');

## Включаем поддержку виджетов. Добавляем область для виджетов
if( function_exists('register_sidebar') ){
	register_sidebar(array(
		'id' => 'language-switcher',
		'before_widget' => '<div class="language-switcher">',
		'after_widget'  => '</div>',
	));
}

// Миниатюры
add_theme_support( 'post-thumbnails' );
