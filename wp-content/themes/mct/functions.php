<?php
/**
 * mct functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mct
 */

show_admin_bar(false);

add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top


if ( ! function_exists( 'mct_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mct_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mct, use a find and replace
	 * to change 'mct' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mct', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'mct' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mct_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mct_setup
add_action( 'after_setup_theme', 'mct_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mct_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mct_content_width', 640 );
}
add_action( 'after_setup_theme', 'mct_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mct_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mct' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mct_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mct_scripts() {
	wp_enqueue_style( 'mct-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mct-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mct-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'mct-svg4everybody', get_template_directory_uri() . '/js/libs/svg4everybody.legacy.min.js', array(), '05112015', true );

	wp_enqueue_script( 'mct-respond', get_template_directory_uri() . '/js/libs/respond.min.js', array(), '05112015', true );

	wp_enqueue_script( 'mct-picturefill', get_template_directory_uri() . '/js/libs/picturefill.min.js', array(), '05112015', true );
	
	wp_enqueue_script( 'mct-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3', true );

	wp_enqueue_script( 'mct-bxslider', get_template_directory_uri() . '/js/libs/bxslider.js', array(), '05112015', true );

	wp_enqueue_script( 'mct-classie', get_template_directory_uri() . '/js/libs/classie.js', array(), '11112015', true );

	wp_enqueue_script( 'mct-global', get_template_directory_uri() . '/js/global.js', array(), '05112015', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mct_scripts' );

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




