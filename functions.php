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
 * Register custom post type
 */
require get_template_directory() . '/inc/custom-post-types.php';



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
register_sidebar( array(
    'name' => __( 'Footer-block-one', '' ),
    'id' => 'footer-block-one',
    'description' => __( '', '' ),
    'before_widget' => '<div class="footer-sml-block">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
) );
register_sidebar( array(
    'name' => __( 'Footer-block-two', '' ),
    'id' => 'footer-block-two',
    'description' => __( '', '' ),
    'before_widget' =>'<div class="footer-sml-block">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
) );

register_sidebar( array(
    'name' => __( 'Footer-block-three', '' ),
    'id' => 'footer-block-three',
    'description' => __( '', '' ),
    'before_widget' => '<div class="footer-sml-block" >',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
) );


register_sidebar( array(
    'name' => __( 'Section 4 text', '' ),
    'id' => 'Section-4-text',
    'description' => __( '', '' ),
    'before_widget' => '<div id="#text-block">',
    'after_widget' => '</div>',
    'before_title' => '<h1>',
    'after_title' => '</h1>',
) );

function sk_register_theme_customizer( $wp_customize ){

    /*
     * Failsafe is safe
     */
    if ( ! isset( $wp_customize ) ) {
        return;
    }

    /**
     * Add 'Home Top' Section.
     */
    $wp_customize->add_section(
    // $id
        'sk_section_home_top',
        // $args
        array(
            'title'		    => __( 'Section 4 background', 'theme-slug' ),
            // 'description'	=> __( 'Some description for the options in the Home Top section', 'theme-slug' ),
            'active_callback' => 'is_front_page',
        )
    );

    /**
     * Add 'Home Top Background Image' Setting.
     */
    $wp_customize->add_setting(
    // $id
        'sk_home_top_background_image',
        // $args
        array(
            'default'		=> get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
            'sanitize_callback'	=> 'esc_url_raw',
            'transport'		=> 'postMessage'
        )
    );

    /**
     * Add 'Home Top Background Image' image upload Control.
     */
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        // $wp_customize object
            $wp_customize,
            // $id
            'sk_home_top_background_image',
            // $args
            array(
                'settings'		=> 'sk_home_top_background_image',
                'section'		=> 'sk_section_home_top',
                'label'			=> __( 'Background Image', 'theme-slug' ),
                'description'	=> __( 'Select the image to be used .', 'theme-slug' )
            )
        )
    );

}

// Settings API options initilization and validation.
add_action( 'customize_register', 'sk_register_theme_customizer' );

/**
 * Writes the Home Top background image out to the 'head' element of the document
 * by reading the value from the theme mod value in the options table.
 */
function sk_customizer_css() {
    ?>
    <style type="text/css">
        <?php
            if ( get_theme_mod( 'sk_home_top_background_image' ) ) {
                $home_top_background_image_url = get_theme_mod( 'sk_home_top_background_image' );
            } else {
                $home_top_background_image_url = get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg';
            }
            // if ( 0 < count( strlen( ( $home_top_background_image_url = get_theme_mod( 'sk_home_top_background_image', sprintf( '%s/images/minimography_005_orig.jpg', get_stylesheet_directory_uri() ) ) ) ) ) ) { ?>
        .home-top {
            background-image: url( <?php echo $home_top_background_image_url; ?> );
        }
        <?php // } // end if ?>
    </style>
    <?php
} // end sk_customizer_css
add_action( 'wp_head', 'sk_customizer_css');
/**
 * Registers the Theme Customizer Preview with WordPress.
 *
 * @package    sk
 * @since      0.3.0
 * @version    0.3.0
 */
function sk_customizer_live_preview() {
    wp_enqueue_script(
        'sk-theme-customizer',
        get_stylesheet_directory_uri() . '/js/theme-customizer.js',
        array( 'customize-preview' ),
        '0.1.0',
        true
    );
} // end sk_customizer_live_preview
add_action( 'customize_preview_init', 'sk_customizer_live_preview' );

function home_block_bg(){
    ?>
<style> .have_block{background-image: url(" <?php echo
    get_theme_mod( 'sk_home_top_background_image');?>")
    ;} </style>
<?php }
function logo_register_theme_customizer( $wp_customize ){

    if ( ! isset( $wp_customize ) ) {
        return;
    }

    $wp_customize->add_section(

        'logo_section_home_top',
        // $args
        array(
            'title'		    => __( 'Logo', 'theme-slug' ),
            // 'description'	=> __( 'Some description for the options in the Home Top section', 'theme-slug' ),
            'active_callback' => 'is_front_page',
        )
    );

    /**
     * Add 'Home Top Background Image' Setting.
     */
    $wp_customize->add_setting(
    // $id
        'logo_background_image',
        // $args
        array(
            'default'		=> get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg',
            'sanitize_callback'	=> 'esc_url_raw',
            'transport'		=> 'postMessage'
        )
    );

    /**
     * Add 'Home Top Background Image' image upload Control.
     */
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        // $wp_customize object
            $wp_customize,
            // $id
            'logo_background_image',
            // $args
            array(
                'settings'		=> 'logo_background_image',
                'section'		=> 'logo_section_home_top',
                'label'			=> __( 'Logo Image', 'theme-slug' ),
                'description'	=> __( 'Select the image to be used .', 'theme-slug' )
            )
        )
    );

}

// Settings API options initilization and validation.
add_action( 'customize_register', 'logo_register_theme_customizer' );

/**
 * Writes the Home Top background image out to the 'head' element of the document
 * by reading the value from the theme mod value in the options table.
 */
function logo_customizer_css() {
    ?>
    <style type="text/css">
        <?php
            if ( get_theme_mod( 'logo_background_image' ) ) {
                $home_top_background_image_url = get_theme_mod( 'logo_background_image' );
            } else {
                $home_top_background_image_url = get_stylesheet_directory_uri() . '/images/minimography_005_orig.jpg';
            }
            // if ( 0 < count( strlen( ( $home_top_background_image_url = get_theme_mod( 'sk_home_top_background_image', sprintf( '%s/images/minimography_005_orig.jpg', get_stylesheet_directory_uri() ) ) ) ) ) ) { ?>
        .home-top {
            background-image: url( <?php echo $home_top_background_image_url; ?> );
        }
        <?php // } // end if ?>
    </style>
    <?php
} // end sk_customizer_css
add_action( 'wp_head', 'logo_customizer_css');
/**
 * Registers the Theme Customizer Preview with WordPress.
 *
 * @package    sk
 * @since      0.3.0
 * @version    0.3.0
 */
function customizer_live_preview() {
    wp_enqueue_script(
        'sk-theme-customizer',
        get_stylesheet_directory_uri() . '/js/theme-customizer.js',
        array( 'customize-preview' ),
        '0.1.0',
        true
    );
} // end sk_customizer_live_preview
add_action( 'customize_preview_init', 'sk_customizer_live_preview' );