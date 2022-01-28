<?php
/**
 * kuligi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kuligi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kuligi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kuligi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kuligi, use a find and replace
		 * to change 'kuligi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kuligi', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Header', 'kuligi' ),
				'menu-2' => esc_html__( 'Footer', 'kuligi' ),
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
				'kuligi_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
endif;
add_action( 'after_setup_theme', 'kuligi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kuligi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kuligi_content_width', 640 );
}
add_action( 'after_setup_theme', 'kuligi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kuligi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kuligi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kuligi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kuligi_widgets_init' );

/*
 *	Versioning styles
 */
function wpmix_get_version() {
	$theme_data = wp_get_theme();
	return $theme_data->Version;
}
$theme_version = wpmix_get_version();
global $theme_version;

function wpmix_get_random() {
	$randomizr = '-' . rand(100,999);
	return $randomizr;
}
$random_number = wpmix_get_random();
global $random_number;

/**
 * Enqueue scripts and styles.
 */
function kuligi_scripts() {
	wp_enqueue_style( 'kuligi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kuligi-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kuligi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kuligi_scripts' );

/**
 * ACF local
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

/*
 *	ACF Google Maps
 */
function acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyCVsxlxHIR-f5y2bHNk-_GmTGvbyBuZW_A';
	return $api;
}

add_filter('acf/fields/google_map/api', 'acf_google_map_api');

/**
 * Custom scripts / styles
 */
function kuligi_custom(){
	global $theme_version, $random_number;
	wp_enqueue_style( 'kuligi-custom', get_template_directory_uri() . '/css/custom.css', array(), $theme_version . $random_number );

	// jQuery
	wp_register_script( 'jQuery', get_template_directory_uri() . '/plugins/jQuery/jquery-3.6.0.min.js', null, null, true );
	wp_enqueue_script('jQuery');

	// Slick
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/plugins/slick/slick.css', array(), _S_VERSION );
	wp_register_script( 'slick-script', get_template_directory_uri() . '/plugins/slick/slick.min.js', null, null, true );
	wp_enqueue_script('slick-script');

	// Custom scripts / sliders
	wp_register_script( 'kuligi-script', get_template_directory_uri() . '/js/custom.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('kuligi-script');
	
	wp_register_script( 'kuligi-sliders', get_template_directory_uri() . '/js/_sliders.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('kuligi-sliders');

	wp_register_script( 'kuligi-map', get_template_directory_uri() . '/js/_map.js?ver=' . $theme_version . $random_number, null, null, true );
	wp_enqueue_script('kuligi-map');
	wp_localize_script( 'kuligi-map', 'PBAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'kuligi_custom' );

add_action('wp_ajax_kuligiMapa', 'kuligiMapa');
add_action('wp_ajax_nopriv_kuligiMapa', 'kuligiMapa');

function kuligiMapa(){
	$postID = isset( $_POST['postID'] ) ? $_POST['postID'] : '';

	$data = array(
		'image' => get_field('main_image', $postID),
		'title' => get_the_title($postID),
		'desc' => get_field('main_shortdesc', $postID),
		'url' => get_permalink($postID),
	);

	print json_encode($data);

	die();
}

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Theme editor page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_sub_page(
		array(
			'page_title' 	=> 'Ustawienia globalne',
			'menu_title'	=> 'Ustawienia globalne',
			'parent'	=> 'edit.php?post_type=page',
		)
	);
}