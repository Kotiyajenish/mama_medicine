<?php

/**
 * mamamedicine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mamamedicine
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mamamedicine_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mamamedicine, use a find and replace
		* to change 'mamamedicine' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('mamamedicine', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'mamamedicine'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mamamedicine_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'mamamedicine_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mamamedicine_content_width()
{
	$GLOBALS['content_width'] = apply_filters('mamamedicine_content_width', 640);
}
add_action('after_setup_theme', 'mamamedicine_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mamamedicine_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'mamamedicine'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'mamamedicine'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'mamamedicine_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mamamedicine_scripts()
{
	wp_enqueue_style('mamamedicine-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('mamamedicine-style', 'rtl', 'replace');

	wp_enqueue_script('mamamedicine-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'mamamedicine_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


// wysing editor showing
add_filter('use_block_editor_for_post', '__return_false');



add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles(){
	// Add CSS in header
	wp_enqueue_style('uikit-rtl-min-css', get_template_directory_uri() . '/assets/css/uikit-rtl.min.css', array(), '5.11.2');
	wp_enqueue_style('uikit-rtl-css', get_template_directory_uri() . '/assets/css/uikit-rtl.css', array(), '5.11.2');
	wp_enqueue_style('uikit-min-css', get_template_directory_uri() . '/assets/css/uikit.min.css', array(), '5.11.2');
	wp_enqueue_style('uikit-css', get_template_directory_uri() . '/assets/css/uikit.css', array(), '5.11.2');
	wp_enqueue_style('app-css-map', get_template_directory_uri() . '/assets/css/app-css-map.css', array(), '1.0.0');
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0.0');
	wp_enqueue_style('swiper-min-css', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0.0');
	wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0');

	// Add JS in footer
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.5.1', true);
	wp_enqueue_script('uikit-min-js', get_template_directory_uri() . '/assets/js/uikit.min.js', array('jquery'), '3.5.5', true);
	wp_enqueue_script('uikit-js', get_template_directory_uri() . '/assets/js/uikit.js', array('jquery'), '3.5.5', true);
	wp_enqueue_script('uikit-icons-min-js', get_template_directory_uri() . '/assets/js/uikit-icons.min.js', array('jquery', 'uikit-min-js'), '3.5.5', true);
	wp_enqueue_script('uikit-icons-js', get_template_directory_uri() . '/assets/js/uikit-icons.js', array('jquery', 'uikit-js'), '3.5.5', true);
	wp_enqueue_script('amplitude-js', get_template_directory_uri() . '/assets/js/amplitude.js', array(), '1.0.0', true);
	wp_enqueue_script('amplitude-js-map', get_template_directory_uri() . '/assets/js/amplitude.js.map', array(), '1.0.0', true);
	wp_enqueue_script('swiper-min-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '3.5.1', true);
	wp_enqueue_script('functions-js', get_template_directory_uri() . '/assets/js/functions.js', array(), '1.0.0', true);
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0', true);
}



// add options for header & footer
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1568, 9999);

register_nav_menus(
	array(
		'primary' => esc_html__('Primary menu', 'twentytwentyone'),
		'secondary'  => esc_html__('Secondary menu', 'twentytwentyone'),
		'main-menu' => esc_html__('Main menu', 'twentytwentyone'),
		'footer'  => esc_html__('Footer menu', 'twentytwentyone'),
		'header' => esc_html__('Header menu', 'twentytwentyone'),

	)
);


// SVG support media :-
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


// Register custom post type
function register_upcoming_events_post_type() {
    $labels = array(
        'name'                  => _x('Upcoming Events', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Upcoming Event', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Upcoming Events', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Upcoming Event', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Upcoming Event', 'textdomain'),
        'new_item'              => __('New Upcoming Event', 'textdomain'),
        'edit_item'             => __('Edit Upcoming Event', 'textdomain'),
        'view_item'             => __('View Upcoming Event', 'textdomain'),
        'all_items'             => __('All Upcoming Events', 'textdomain'),
        'search_items'          => __('Search Upcoming Events', 'textdomain'),
        'parent_item_colon'     => __('Parent Upcoming Events:', 'textdomain'),
        'not_found'             => __('No upcoming events found.', 'textdomain'),
        'not_found_in_trash'    => __('No upcoming events found in Trash.', 'textdomain'),
        'featured_image'        => _x('Upcoming Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Upcoming Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into upcoming event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this upcoming event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter upcoming events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Upcoming events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Upcoming events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'upcoming-events'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'show_in_rest'       => true, // Enables Gutenberg editor
    );

    register_post_type('upcoming_events', $args);
}

add_action('init', 'register_upcoming_events_post_type');



// Register custom post type
function my_custom_blog() {
  $labels = array(
    'name'               => _x( 'Blog', 'post type general name' ),
    'singular_name'      => _x( 'Blog', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Blog' ),
    'add_new_item'       => __( 'Add New Blog' ),
    'edit_item'          => __( 'Edit Blog' ),
    'new_item'           => __( 'New Blog' ),
    'all_items'          => __( 'All Blog' ),
    'view_item'          => __( 'View Blog' ),
    'search_items'       => __( 'Search Blog' ),
    'not_found'          => __( 'No Blog found' ),
    'not_found_in_trash' => __( 'No Blog found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Blog'
);

$args = array(
    'labels'        => $labels,
    'description'   => 'Blog',
    'public'        => true,
    'show_ui'        => true,
    'capability_type'  => 'post',
    'menu_position' => 5,
    'supports'      => array( 'title' , 'thumbnail', 'editor', 'page-attributes', 'excerpt'),
    'has_archive'   => true,
);

register_post_type( 'event', $args );
}
add_action( 'init', 'my_custom_blog' );