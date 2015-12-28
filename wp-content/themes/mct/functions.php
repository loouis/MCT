<?php
/**
 * mct functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mct
 */

show_admin_bar(false);


add_filter( 'jetpack_development_mode', '__return_true' );

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

	// add_image_size( 'custom-size', 220, 220, array( 'left', 'top' ) ); // Hard crop left top
	
	add_image_size( 'smallest-news-cell', 600, 375, true ); // soft proportional crop mode

	add_image_size( 'retina-smallest', 640, 500, true ); // hard crop mode

	add_image_size( 'location-smallest', 640, 400, true ); // hard crop mode
	
	add_image_size( 'desktop-largest', 1900, 1069 ); // soft proportional crop mode


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mct' ),
		'locations' => esc_html__( 'Locations Menu', 'mct' ),
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

/* Excerpt update */
function custom_excerpt_length( $length ) {
return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




//function to replace invalid ellipsis with text linking to the post
function new_excerpt_more( $more ) {
	return '…';
}
add_filter('excerpt_more', 'new_excerpt_more');

/* WYSIWYG editor chages */

/* Custom stylesheet */
function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

/* Add ACF options page */
if(function_exists('acf_add_options_page')){
	acf_add_options_page();

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* Custom Text colours */
function my_mce4_options($init) {
  $default_colours = '"565656", "Dark title text",
  					  "EFEFEF", "Light grey",
                      "FF02AF", "Brand Colour"
                      ';

  // build colour grid default+custom colors
  $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']';

  // enable 6th row for custom colours in grid
  $init['textcolor_rows'] = 6;

  return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');

/*
 * Modify TinyMCE editor to remove H1.
 */
function tiny_mce_remove_unused_formats($init) {
	// Add block format elements you want to show in dropdown
	$init['block_formats'] = 'Paragraph=p;  Large opening text=h2; Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Address=address;Pre=pre';
	return $init;
}

add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );



function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'Content Block',  
			'block' => 'span',  
			'classes' => 'content-block',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Blue Button',  
			'block' => 'span',  
			'classes' => 'blue-button',
			'wrapper' => true,
		),
		array(  
			'title' => 'Red Button',  
			'block' => 'span',  
			'classes' => 'red-button',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 



/** set default settings of attachment media box */
function attachment_default_settings() {
  update_option('image_default_align', 'left' );
  update_option('image_default_link_type', 'custom' );
  update_option('image_default_size', 'large' );
}
add_action('after_setup_theme', 'attachment_default_settings');




/* Add Purple jobs to custom post type */
function create_post_type() {
  register_post_type( 'purple_job',
    array(
      'labels' => array(
        'name' => __( 'Purple jobs' ),
        'singular_name' => __( 'Job' )
      ),
      'public' => true,
      'has_archive' => true,
    ));
}
add_action( 'init', 'create_post_type' );




function get_the_category_bytax( $id = false, $tcat = 'category' ) {
    $categories = get_the_terms( $id, $tcat );
    if ( ! $categories )
        $categories = array();

    $categories = array_values( $categories );

    foreach ( array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    // Filter name is plural because we return alot of categories (possibly more than #13237) not just one
    return apply_filters( 'get_the_categories', $categories );
}




/**
 * Enqueue scripts and styles.
 */
function mct_scripts() {
	wp_enqueue_style( 'mct-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mct-ie-styles', get_template_directory_uri() . 'ie-styles.css', array(), '29122015', true );

	// wp_enqueue_script( 'mct-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'mct-jquery', get_template_directory_uri() . '/js/libs/jquery.js', array(), '29112015', true );

	wp_enqueue_script( 'mct-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'mct-svg4everybody', get_template_directory_uri() . '/js/libs/svg4everybody.legacy.min.js', array(), '05112015', true );

	wp_enqueue_script( 'mct-respond', get_template_directory_uri() . '/js/libs/respond.min.js', array(), '05112015', true );

	// wp_enqueue_script( 'mct-picturefill', get_template_directory_uri() . '/js/libs/picturefill.min.js', array(), '05112015', true );
	
	wp_enqueue_script( 'mct-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3', true );

	wp_enqueue_script( 'mct-bxslider', get_template_directory_uri() . '/js/libs/bxslider.js', array(), '05112015', true );

	wp_enqueue_script( 'mct-wow', get_template_directory_uri() . '/js/libs/wow.min.js', array(), '14122015', true );


	wp_enqueue_script( 'mct-lazy-load', get_template_directory_uri() . '/js/libs/bj-lazy-load.min.js', array(), '20112015', true );

	wp_enqueue_script( 'mct-classie', get_template_directory_uri() . '/js/libs/classie.js', array(), '11112015', true );

	wp_enqueue_script( 'mct-sticky-kit', get_template_directory_uri() . '/js/libs/sticky-kit.min.js', array(), '14112015', true );

	wp_enqueue_script( 'mct-global', get_template_directory_uri() . '/js/build/global.min.js', array(), '05112015', true );



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




