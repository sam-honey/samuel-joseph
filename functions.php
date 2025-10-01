<?php
/**
 * sjhoney functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sjhoney
 */


function sjhoney_enqueue_scripts() {
    $theme_dir = get_template_directory_uri() . '/js/';

    wp_enqueue_script(
        'fadein-scroll',
        $theme_dir . 'fadein-scroll.js',
        array(), // dependencies if any (like jQuery), empty here
        filemtime(get_template_directory() . '/js/fadein-scroll.js'),
        true // load in footer
    );

  wp_enqueue_script(
        'parallax',
        $theme_dir . 'parallax.js',
        array(), // dependencies if any (like jQuery), empty here
        filemtime(get_template_directory() . '/js/parallax.js'),
        true // load in footer
    );



    wp_enqueue_script(
        'light-box',
        $theme_dir . 'light-box.js',
        array(),
        filemtime(get_template_directory() . '/js/light-box.js'),
        true
    );

    wp_enqueue_script(
        'fixed-header',
        $theme_dir . 'fixed-header.js',
        array(),
        filemtime(get_template_directory() . '/js/fixed-header.js'),
        true
    );

    wp_enqueue_script(
        'float-contact-form',
        $theme_dir . 'float-contact-form.js',
        array(),
        filemtime(get_template_directory() . '/js/float-contact-form.js'),
        true
    );

    # wp_enqueue_script(
    #     'contact',
    #     $theme_dir . 'contact.js',
    #     array(),
    #     filemtime(get_template_directory() . '/js/contact.js'),
    #     true
    # );

    wp_enqueue_script(
        'main',
        $theme_dir . 'main.js',
        array('float-contact-form', 'fixed-header'),
        filemtime(get_template_directory() . '/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'sjhoney_enqueue_scripts');





if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sjhoney_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on sjhoney, use a find and replace
		* to change 'sjhoney' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'sjhoney', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
    add_image_size('project-thumb', 800, 600, true);

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
			'menu-1' => esc_html__( 'Primary', 'sjhoney' ),
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
			'sjhoney_custom_background_args',
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
add_action( 'after_setup_theme', 'sjhoney_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sjhoney_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sjhoney_content_width', 640 );
}
add_action( 'after_setup_theme', 'sjhoney_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sjhoney_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'sjhoney' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'sjhoney' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sjhoney_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sjhoney_enqueue_styles() {
    // Enqueue the main style.css (required by WordPress)
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    // Enqueue modular CSS files in proper dependency order
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/css/reset.css',
        array('main-style'), // dependent on main-style
        '1.0.0'
    );

    wp_enqueue_style(
        'variables-style',
        get_template_directory_uri() . '/css/variables.css',
        array('reset-style'), // dependent on reset-style
        '1.0.0'
    );

    wp_enqueue_style(
        'base-style',
        get_template_directory_uri() . '/css/base.css',
        array('variables-style'), // dependent on variables-style
        '1.0.0'
    );

    wp_enqueue_style(
        'layout-style',
        get_template_directory_uri() . '/css/layout.css',
        array('base-style'), // dependent on base-style
        '1.0.0'
    );

    wp_enqueue_style(
        'components-style',
        get_template_directory_uri() . '/css/components.css',
        array('layout-style'), // dependent on layout-style
        '1.0.0'
    );

    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/css/custom.css',
        array('components-style'), // dependent on components-style
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'sjhoney_enqueue_styles');


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
 * Enqueue scripts and styles.
 */

function display_image($sub_dir, $image_file, $alt = 'Image Alt Text', $width = null, $height = null) {
    // Get the template directory URL
    $template_directory_url = esc_url(get_template_directory_uri());

    // Construct the image tag
    $image_src = $template_directory_url . $sub_dir . $image_file;

    // Build additional attributes based on provided values
    $attributes = '';
    if ($width !== null) {
        $attributes .= ' width="' . esc_attr($width) . '"';
    }
    if ($height !== null) {
        $attributes .= ' height="' . esc_attr($height) . '"';
    }

    // Construct the complete image tag
    $image_tag = '<img src="' . $image_src . '" alt="' . esc_attr($alt) . '"' . $attributes . '>';

    // Output the image tag
    echo $image_tag;
}

register_post_type('projects', array(
    'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'), // include 'thumbnail'
));

add_filter( 'wp_get_attachment_image_attributes', function( $attr, $attachment, $size ) {
    if ( get_post_type() === 'projects' ) {
        if ( empty( $attr['alt'] ) ) {
            $attr['alt'] = 'SJHoney Project Image';
        }
    }
    return $attr;
}, 10, 3 );