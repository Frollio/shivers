<?php


/**
 * Menus
 */
function shivers_register_menus() {
	register_nav_menus(
		array(
			'language-menu' => __( 'Language Menu' )
		)
	);
}
add_action( 'init', 'shivers_register_menus' );


/**
 * Load child theme CSS and optional scripts
 *
 * @return void
 */
function shivers_enqueue_scripts() {
	wp_enqueue_style(
		'bootstrap-css',
		'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css'
	);
	wp_enqueue_script(
		'jquery',
		'https://code.jquery.com/jquery-3.5.1.slim.min.js'
	);
	wp_enqueue_script(
		'popper',
		'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'
	);
	wp_enqueue_script(
		'bootstrap-js',
		'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js'
	);
	wp_enqueue_script(
		'fontawesome',
		'https://kit.fontawesome.com/559d33eb67.js'
	);
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	wp_enqueue_style(
		'header',
		get_stylesheet_directory_uri() . '/assets/css/header.css'
	);
	wp_enqueue_style(
		'page', 
		get_stylesheet_directory_uri() . '/assets/css/page.css'
	);
	wp_enqueue_style(
		'archive',
		get_stylesheet_directory_uri() . '/assets/css/archive.css'
	);
	wp_enqueue_style(
		'footer',
		get_stylesheet_directory_uri() . '/assets/css/footer.css'
	);
	wp_enqueue_style(
		'block-editor',
		get_stylesheet_directory_uri() . '/assets/css/block-editor.css'
	);
	wp_enqueue_style(
		'elementor',
		get_stylesheet_directory_uri() . '/assets/css/elementor.css'
	);
	wp_enqueue_style(
		'media-queries',
		get_stylesheet_directory_uri() . '/assets/css/media-queries.css'
	);
}
add_action( 'wp_enqueue_scripts', 'shivers_enqueue_scripts', 20 );


/**
 * Widget Areas
 */
function shivers_widgets_init() {
	register_sidebar( array(
		'name'					=> esc_html__( 'Primary Sidebar', 'shivers' ),
		'id'						=> 'primary',
		'description'		=> esc_html__('Primary widget area.', 'shivers' ),
		'before_widget'	=> '<aside id="%1$s" class="e-sidebar-widget %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h3 class="e-sidebar-widget-title">',
		'after_title'		=> '</h3>',
	) );
	register_sidebar( array(
		'name'					=> esc_html__( 'Footer 1', 'shivers' ),
		'id'						=> 'footer-1',
		'description'		=> esc_html__('First widget area in the footer.', 'shivers' ),
		'before_widget'	=> '<div id="%1$s" class="e-footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="e-footer-widget-title">',
		'after_title'		=> '</h4>',
	) );
	register_sidebar( array(
		'name'					=> esc_html__( 'Footer 2', 'shivers' ),
		'id'						=> 'footer-2',
		'description'		=> esc_html__('Second widget area in the footer.', 'shivers' ),
		'before_widget'	=> '<div id="%1$s" class="e-footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="e-footer-widget-title">',
		'after_title'		=> '</h4>',
	) );
	register_sidebar( array(
		'name'					=> esc_html__( 'Footer 3', 'shivers' ),
		'id'						=> 'footer-3',
		'description'		=> esc_html__('Third widget area in the footer.', 'shivers' ),
		'before_widget'	=> '<div id="%1$s" class="e-footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="e-footer-widget-title">',
		'after_title'		=> '</h4>',
	) );
	register_sidebar( array(
		'name'					=> esc_html__( 'Footer 4', 'shivers' ),
		'id'						=> 'footer-4',
		'description'		=> esc_html__('Fourth widget area in the footer.', 'shivers' ),
		'before_widget'	=> '<div id="%1$s" class="e-footer-widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="e-footer-widget-title">',
		'after_title'		=> '</h4>',
	) );
}
add_action( 'widgets_init', 'shivers_widgets_init' );


/**
 * Add custom classes to <li>
 */
function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/**
 * Theme support
 */
function shivers_add_theme_support() {
	add_theme_support( 'align-wide' ); // Support for full and wide blocks in block editor.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_editor_style( '/assets/css/media-queries.css' );
}
add_action( 'after_setup_theme', 'shivers_add_theme_support' );


/**
 * WP Bootstrap Navwalker
 */
require_once( get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php' );
