<?php
/**
 * Boat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Boat
 */

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

if ( ! function_exists( 'boat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
    function enqueue_styles() {
        wp_enqueue_style('main',get_template_directory_uri() . '/main.css');
        wp_enqueue_style('style',get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
        wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Oswald:400,300');
        wp_enqueue_style( 'font-style');
    }
    add_action('wp_enqueue_scripts', 'enqueue_styles');

    function enqueue_scripts () {
        wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
        wp_enqueue_script('html5-shim');
    }
    add_action('wp_enqueue_scripts', 'enqueue_scripts');

function boat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Boat, use a find and replace
	 * to change 'boat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'boat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'boat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'boat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'boat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function boat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'boat_content_width', 640 );
}
add_action( 'after_setup_theme', 'boat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'boat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'boat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'boat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function boat_scripts() {
	wp_enqueue_style( 'boat-style', get_stylesheet_uri() );

	wp_enqueue_script( 'boat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'boat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'boat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function font_awesome() {
    if (!is_admin()) {
        wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
        wp_enqueue_style('font-awesome');
    }
}
add_action('wp_enqueue_scripts', 'font_awesome');

register_sidebar( array(
    'name' => __( 'Destinations', '' ),
    'id' => 'destinations-statistic',
    'description' => __( '', '' ),
    'before_widget' => '<div class="numbers_text">',
    'after_widget' => '</div>',
    'before_title' => '<div class="numbers">',
    'after_title' => '</div>',
) );

register_sidebar( array(
    'name' => __( 'Cities', '' ),
    'id' => 'cities-statistic',
    'description' => __( '', '' ),
    'before_widget' => '<div class="numbers_text">',
    'after_widget' => '</div>',
    'before_title' => '<div class="numbers">',
    'after_title' => '</div>',
) );

register_sidebar( array(
    'name' => __( 'Boats', '' ),
    'id' => 'boats-statistic',
    'description' => __( '', '' ),
    'before_widget' => '<div class="numbers_text">',
    'after_widget' => '</div>',
    'before_title' => '<div class="numbers">',
    'after_title' => '</div>',
) );

register_sidebar( array(
    'name' => __( 'Sailors', '' ),
    'id' => 'sailors-statistic',
    'description' => __( '', '' ),
    'before_widget' => '<div class="numbers_text">',
    'after_widget' => '</div>',
    'before_title' => '<div class="numbers">',
    'after_title' => '</div>',
) );