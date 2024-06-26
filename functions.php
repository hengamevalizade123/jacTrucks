<?php
/**
 * Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starter_Theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('starter_theme_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starter_theme_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Starter Theme, use a find and replace
		 * to change 'starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('starter-theme', get_template_directory() . '/languages');

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
				'menu-1' => esc_html__('Primary', 'starter-theme'),
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
				'starter_theme_custom_background_args',
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
				'height' => 250,
				'width' => 250,
				'flex-width' => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'starter_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('starter_theme_content_width', 640);
}
add_action('after_setup_theme', 'starter_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_theme_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'starter-theme'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'starter-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'starter_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts()
{
	wp_enqueue_style('theme-vendor-style', get_template_directory_uri() . '/assets/styles/vendor.min.css', array(), rand(111, 9999), 'all');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/styles/style.min.css', array(), rand(111, 9999), 'all');
	wp_enqueue_script('theme-vendor', get_template_directory_uri() . '/assets/scripts/vendor.min.js', array('jquery'), rand(111, 9999), true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/scripts/main.min.js', array('jquery'), rand(111, 9999), true);
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');

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
// reading_time
if (!function_exists('utf8_str_word_count')) {
	function utf8_str_word_count($string, $format = 0, $charlist = null)
	{
		if ($charlist === null) {
			$regex = '/\\pL[\\pL\\p{Mn}\'-]*/u';
		} else {
			$split = array_map(
				'preg_quote',
				preg_split('//u', $charlist, -1, PREG_SPLIT_NO_EMPTY)
			);
			$regex = sprintf(
				'/(\\pL|%1$s)([\\pL\\p{Mn}\'-]|%1$s)*/u',
				implode('|', $split)
			);
		}
		switch ($format) {
			default:
			case 0:
				// For PHP >= 5.4.0 this is fine:
				return preg_match_all($regex, $string);

			// For PHP < 5.4 it's necessary to do this:
			// $results = null;
			// return preg_match_all($regex, $string, $results);
			case 1:
				$results = null;
				preg_match_all($regex, $string, $results);
				return $results[0];
			case 2:
				$results = null;
				preg_match_all($regex, $string, $results, PREG_OFFSET_CAPTURE);
				return empty ($results[0])
					? array()
					: array_combine(
						array_map('end', $results[0]),
						array_map('reset', $results[0])
					);
		}
	}
}
function reading_time()
{
	$content = get_post_field('post_content', get_the_ID());
	$word_count = utf8_str_word_count(strip_tags($content));
	$readingtime = ceil($word_count / 200);
	if ($readingtime < 1) {
		$totalreadingtime = "کمتر از یک دقیقه";
	} else {
		$totalreadingtime = $readingtime . "دقیقه";
	}
	return $totalreadingtime;
}

/**
 * Product Post Type.
 */
function product_post_type()
{
	register_post_type(
		'product',
		array(
			'labels' => array(
				'name' => __('محصولات', 'textdomain'),
				'singular_name' => __('محصولات', 'textdomain'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
		)
	);
}
add_action('init', 'product_post_type');

// Changing excerpt length
function new_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');
