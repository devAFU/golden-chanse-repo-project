<?php 
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! function_exists( 'garden_care_lite_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function garden_care_lite_setup() {
	$GLOBALS['content_width'] = apply_filters( 'garden_care_lite_content_width', 640 );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'custom-logo', array(
		'height'      => 74,
		'width'       => 172,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'garden-care-lite' )				
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
} 
endif; // garden_care_lite_setup
add_action( 'after_setup_theme', 'garden_care_lite_setup' );

function garden_care_lite_widgets_init() { 	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'garden-care-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'garden-care-lite' ),
		'id'            => 'fc-1-gcl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'garden-care-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'garden-care-lite' ),
		'id'            => 'fc-2-gcl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'garden-care-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'garden-care-lite' ),
		'id'            => 'fc-3-gcl',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'after_widget'  => '</aside>',
	) );
}
add_action( 'widgets_init', 'garden_care_lite_widgets_init' );


add_action( 'wp_enqueue_scripts', 'garden_care_lite_enqueue_styles' );
function garden_care_lite_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
} 

add_action( 'wp_enqueue_scripts', 'garden_care_lite_child_styles', 99);
function garden_care_lite_child_styles() {
  wp_enqueue_style( 'garden-care-lite-child-style', get_stylesheet_directory_uri()."/css/responsive.css" );
} 

function garden_care_lite_admin_style() {
  wp_enqueue_script('garden-care-lite-admin-script', get_stylesheet_directory_uri()."/js/garden-care-lite-admin-script.js");
}
add_action('admin_enqueue_scripts', 'garden_care_lite_admin_style');

function garden_care_lite_admin_about_page_css_enqueue($hook) {
   if ( 'appearance_page_garden_care_lite_guide' != $hook ) {
        return;
    }
    wp_enqueue_style( 'garden-care-lite-about-page-style', get_stylesheet_directory_uri() . '/css/garden-care-lite-about-page-style.css' );
}
add_action( 'admin_enqueue_scripts', 'garden_care_lite_admin_about_page_css_enqueue' );

/**
 * Show notice on theme activation
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	add_action( 'admin_notices', 'garden_care_lite_activation_notice' );
}
function garden_care_lite_activation_notice(){
    ?>
    <div class="notice notice-info is-dismissible"> 
        <div class="skt-gardening-lite-notice-container">
        	<div class="skt-gardening-lite-notice-img"><img src="<?php echo esc_url( GARDEN_CARE_LITE_SKTTHEMES_THEME_URI . 'images/icon-skt-templates.png' ); ?>" alt="<?php echo esc_attr('SKT Templates');?>" ></div>
            <div class="skt-gardening-lite-notice-content">
            <div class="skt-gardening-lite-notice-heading"><?php echo esc_html__('Thank you for installing Garden Care Lite!', 'garden-care-lite'); ?></div>
            <p class="largefont"><?php echo esc_html__('Garden Care Lite comes with 150+ ready to use Elementor templates. Install the SKT Templates plugin to get started.', 'garden-care-lite'); ?></p>
            </div>
            <div class="skt-gardening-lite-clear"></div>
        </div>
    </div>
    <?php
}

if ( ! function_exists( 'garden_care_lite_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function garden_care_lite_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

define('GARDEN_CARE_LITE_SKTTHEMES_URL','https://www.sktthemes.org');
define('GARDEN_CARE_LITE_SKTTHEMES_PRO_THEME_URL','https://www.sktthemes.org/shop/garden-landscaper-wordpress-theme/');
define('GARDEN_CARE_LITE_SKTTHEMES_FREE_THEME_URL','https://www.sktthemes.org/shop/free-garden-care-wordpress-theme/');
define('GARDEN_CARE_LITE_SKTTHEMES_THEME_DOC','https://sktthemesdemo.net/documentation/gardening-documentation/');
define('GARDEN_CARE_LITE_SKTTHEMES_LIVE_DEMO','https://sktperfectdemo.com/themepack/garden-care/');
define('GARDEN_CARE_LITE_SKTTHEMES_THEMES','https://www.sktthemes.org/themes');
define('GARDEN_CARE_LITE_SKTTHEMES_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

function garden_care_lite_remove_parent_function(){	 
	remove_action( 'admin_notices', 'skt_gardening_lite_activation_notice');
	remove_action( 'admin_menu', 'skt_gardening_lite_abouttheme');
	remove_action( 'customize_register', 'skt_gardening_lite_customize_register');
	remove_action( 'wp_enqueue_scripts', 'skt_gardening_lite_custom_css');
}
add_action( 'init', 'garden_care_lite_remove_parent_function' );

function garden_care_lite_remove_parent_theme_stuff() {
    remove_action( 'after_setup_theme', 'skt_gardening_lite_setup' );
}
add_action( 'after_setup_theme', 'garden_care_lite_remove_parent_theme_stuff', 0 );

function garden_care_lite_unregister_widgets_area(){
	unregister_sidebar( 'fc-1' );
	unregister_sidebar( 'fc-2' );
	unregister_sidebar( 'fc-3' );
	unregister_sidebar( 'fc-4' );
}
add_action( 'widgets_init', 'garden_care_lite_unregister_widgets_area', 11 );

require_once get_stylesheet_directory() . '/inc/about-themes.php';  
require_once get_stylesheet_directory() . '/inc/customizer.php';