<?php
/**
 * pixely4 functions and definitions
 *
 * Template Name: Project
 *
 * @package pixely4
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'pixely4_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pixely4_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pixely4, use a find and replace
	 * to change 'pixely4' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pixely4', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pixely4' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pixely4_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // pixely4_setup
add_action( 'after_setup_theme', 'pixely4_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pixely4_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pixely4' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'pixely4_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pixely4_scripts() {
//	wp_enqueue_style( 'pixely4-style', get_stylesheet_uri() );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pixely4_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

// Register Custom Post Type
function projects_post_type() {

	$labels = array(
		'name'                => 'Projects',
		'singular_name'       => 'Project',
		'menu_name'           => 'Projects',
		'parent_item_colon'   => 'Parent Project:',
		'all_items'           => 'All Projects',
		'view_item'           => 'View Project',
		'add_new_item'        => 'Add New Project',
		'add_new'             => 'Add New',
		'edit_item'           => 'Edit Project',
		'update_item'         => 'Update Project',
		'search_items'        => 'Search Project',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);

	$args = array(
		'label'               => 'project',
		'description'         => 'Project pages for our work',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-art',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	register_post_type( 'project', $args );

	// flush_rewrite_rules();

}

// Hook into the 'init' action
add_action( 'init', 'projects_post_type', 0 );

function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Continue reading&hellip;', 'pixely4') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );