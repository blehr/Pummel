<?php
/**
 * brandon functions and definitions
 *
 * @package brandon
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'bpl_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bpl_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on brandon, use a find and replace
	 * to change 'bpl' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'bpl', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bpl' ),
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
	add_theme_support( 'custom-background', apply_filters( 'bpl_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // bpl_setup
add_action( 'after_setup_theme', 'bpl_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bpl_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bpl' ),
		'id'            => 'sidebar-1',
		'description'   => 'Display Widgets in the Sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'bpl_widgets_init' );


function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));

}



create_widget( 'Front Top Middle Left', 'front-top-middle-left', 'Displays on the left side of the frontpage top middle row' );
create_widget( 'Front Top Middle Center', 'front-top-middle-center', 'Displays on the center of the frontpage top middle row' );
create_widget( 'Front Top Middle Right', 'front-top-middle-right', 'Displays on the right side of the frontpage top middle row' );

create_widget( 'Front Bottom Middle Left', 'front-bottom-middle-left', 'Displays on the left side bottom of the frontpage bottom middle row' );
create_widget( 'Front Bottom Middle Center', 'front-bottom-middle-center', 'Displays on the center bottom of the frontpage bottom middle row' );
create_widget( 'Front Bottom Middle Right', 'front-bottom-middle-right', 'Displays on the right side bottom of the frontpage bottom middle row' );

create_widget( 'Front-Third Left', 'front-third-left', 'Displays on the left side of the frontpage bottom row' );
create_widget( 'Front-Third Right', 'front-third-right', 'Displays on the right side of the frontpage bottom row' );

create_widget( 'Footer Left', 'footer-left', 'Displays on the left of the Footer' );
create_widget( 'Footer Center', 'footer-center', 'Displays in the center of the Footer' );
create_widget( 'Footer Right', 'footer-right', 'Displays on the right of the Footer' );


/**
 * Enqueue scripts and styles.
 */
function bpl_scripts() {
	
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style('font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	
	wp_enqueue_style('googlefont_playfair_css', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic');
	 
	wp_enqueue_style( 'bpl-style', get_stylesheet_uri() );
	
	
	
	global $wp_scripts;
    
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
    
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);
    
    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9');
    
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true);

	wp_enqueue_script( 'bpl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bpl_scripts' );




/**
 * Add breadcrumbs functionality to your WordPress theme 
 *
 * Once you have included the function in your functions.php file
 * you can then place the following anywhere in your theme templates
 * if(function_exists('mine_breadcrumbs')) mine_breadcrumbs();
 *
 * 
 */
function mine_breadcrumbs() {
	if(!is_front_page()) {
		echo '<nav class="breadcrumb">';
		echo '<a href="'.home_url('/').'">Home</a><span class="divider"> / </span>';
		if (is_home() || is_single() || is_archive()){
			echo '<a href="'.home_url('/blog').'">Blog</a>';
			if (is_single()) {
				echo ' <span class="divider">/</span> ';
				the_title();
			}
			
			if (is_archive()) {
				echo ' <span class="divider">/</span> ';
					if ( is_category() ) {
						single_cat_title();

					}
					
					if ( is_tag() ) 
						single_tag_title();

					}
					
					if ( is_author() ) {
						/* Queue the first post, that way we know
						 * what author we're dealing with (if that is the case).
						*/
						the_post();
						printf( __( 'Author: %s', 'bpl' ), '<span class="vcard">' . get_the_author() . '</span>' );
						/* Since we called the_post() above, we need to
						 * rewind the loop back to the beginning that way
						 * we can run the loop properly, in full.
						 */
						rewind_posts();
					}
					
					if ( is_day() ) {
						printf( __( 'Day: %s', 'bpl' ), '<span>' . get_the_date() . '</span>' );
					}

					if ( is_month() ) {
						printf( __( 'Month: %s', 'bpl' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
					}

					if ( is_year() ) {
						printf( __( 'Year: %s', 'bpl' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
					}

					if ( is_tax( 'post_format', 'post-format-aside' ) ) {
							_e( 'Asides', 'bpl' );
					}
					
					if ( is_tax( 'post_format', 'post-format-image' ) ) {
						_e( 'Images', 'bpl');
					}

					if ( is_tax( 'post_format', 'post-format-video' ) ) {
						_e( 'Videos', 'bpl' );
					}

					if ( is_tax( 'post_format', 'post-format-quote' ) ) {
						_e( 'Quotes', 'bpl' );
					}

					if ( is_tax( 'post_format', 'post-format-link' ) ) {
						_e( 'Links', 'bpl' );
					}

					

		
		} elseif (is_page()) {
			echo the_title();
		}
		echo '</nav>';
	}
}









// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
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
