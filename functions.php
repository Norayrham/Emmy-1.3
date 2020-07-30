<?php ############# EMMY 1.1.3 ###############
        ############################  
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

##################################################
############## MAIN SETUP   ######################
##################################################

if ( ! function_exists( 'emmy_wp_setup' ) ) :

    function emmy_wp_setup() {


/*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory. 
     */
    load_theme_textdomain( 'emmy', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    ############ Support for <title> tag  ###############
    add_theme_support( 'title-tag' );



 ##############  SETUP for background image and color #################

$emmy_defaults = array(
    'default-image' => get_template_directory_uri() . '/css/img/3.jpg',
    'default-preset' => 'default',
    'default-position-x' => 'left',
    'default-position-y' => 'top',
    'default-size' => 'auto',
    'default-repeat' => 'repeat',
    'default-attachment' => 'scroll',
    'default-color' => '',
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-background', $emmy_defaults );    


###############    SETUP for custom header ##################

$emmy_args_header = array (
    'height'    => 920,
    'width'     => 1280, 
    'random-default' => true,
    'flex-height' => true,
    'flex-width' => true,
    'default-image' => get_template_directory_uri() . '/css/img/3.jpg',
    'header-text' => true,
    'default-text-color'=> '',
    'video' => true,
    'video-active-callback'=> 'emmy_check_fp',
    'uploads'   => true
    );   
add_theme_support( 'custom-header', $emmy_args_header );

function emmy_check_fp () {
  if (!is_front_page()) {
    return false;
  }
  return true;
}
add_filter ( 'header_video_settings', 'emmy_header_video_settings');
function emmy_header_video_settings($settings) {
  $settings['minWidth'] = 720;
  $settings['minHeight'] = 480;  
  return $settings;
}
###############    SETUP for custom LOGO ##################

$emmy_args_logo = array (
    'height'    => 50,
    'width'     => 80,
    'flex-height' => false,
    'flex-width' => false,
    'header-text' => array ('site-title', 'site-description'
    )  
    );   
add_theme_support( 'custom-logo', $emmy_args_logo );

############### theme starter content ##################

    add_theme_support('starter-content', [
        // Static front page set to Home, posts page set to Blog
        'options' => [
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ],
        // Starter pages to include
        'posts' => ['home','about','contact','blog'
        ],
        // Add pages to primary navigation menu
    'nav_menus' => [
      'menu-top' => [
        'name' => __( 'Top Menu', 'emmy' ),
        'items' => [
          'page_home',
          'page_about',
          'page_blog',
          'page_contact',
          
          // Our Custom Services page
          'page_service' => [
            'type' => 'post_type',
            'object' => 'page',
            'object_id' => '{{services}}',
          ],
        ],
      ],
    ],
 
        'widgets' => [
            'sidebar-single' => [
                'text_business_info',
                'search'
            ]
        ]
    ]);
 ##############  menu #################

register_nav_menus(array(
            'menu-top' => esc_html__('Main Menu', 'emmy'),
            'menu-footer' => esc_html__('Footer Menu', 'emmy'),
        ));
        

##############   post-thumbnails  ##################
add_theme_support ('post-thumbnails', array('post','page'));

/* Set the image size 
    add_image_size('emmy_post-thumbnail', 1500, 1500, true);
    add_image_size('emmy_large', 750, 750, true );  
    add_image_size('emmy_post-thumbnail-large-table', 1200, 500, true );  
    add_image_size('emmy_post-middle', 400, 200, true ); 
    add_image_size('emmy_middle_img', 285, 214, true); 
    add_image_size('emmy_small_img', 175, 175, true);       */

     ############### search form, comment form, and comments to output valid HTML5 ###########
    
    add_theme_support( 'html5', array(
        'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

   ################# Post Formats ################
     
    add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',


    ));
  

// Add Theme Support for Selective Refresh in Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
  }


    endif;  // END of MAIN SETUP
 add_action( 'after_setup_theme', 'emmy_wp_setup' );   



################ for WooCommerce plugin ##################
 ########################################################

 if ( class_exists( 'woocommerce' ) ):       
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'emmy_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'emmy_wrapper_end', 10);

function emmy_wrapper_start() {
  echo '<section id="main">';
}

function emmy_wrapper_end() {
  echo '</section>';
}                                       
    
 function emmy_woocommerce_support()
{
  add_theme_support('woocommerce');
}
 add_action( 'after_setup_theme', 'emmy_woocommerce_support' );
 endif; 
 ################ SET  content ######################

/* function emmy_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'emmy_content_width', 733 );
}
add_action( 'after_setup_theme', 'emmy_content_width', 0 ); */

if ( ! isset ( $content_width )) {
    $content_width = 1200;
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function emmy_excerpt_more( $more ) { if (! is_admin()){
    return sprintf( '&nbsp;&nbsp;<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        esc_html__( '... Read More', 'emmy' )
    );
}}
add_filter( 'excerpt_more', 'emmy_excerpt_more' );

############## CSS    ################
function emmy_stylesheet_connect () {
	wp_enqueue_style( 'emmy-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'emmy_stylesheet_connect' );

function emmy_comment_scripts () {
    if ( is_singular() && comments_open()  ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'emmy_comment_scripts' );

include (get_template_directory() . '/inc/css.php');
add_action('wp_enqueue_scripts', 'emmy_styles');  

################  jscrips  ################

include (get_template_directory() . '/inc/jscripts.php');
add_action( 'wp_enqueue_scripts', 'emmy_scripts_with_jquery' );

################ added editor style sheet ####################    
   

function emmy_editor_style() {
    add_editor_style( '/css/editor-style.css' );
}
add_action( 'admin_init', 'emmy_editor_style' );
 
################  pagination    ##########################

/*function emmy_paginate () {               
  $emmy_paginate = paginate_links();
  $emmy_allowed = [
  'a' => ['href' => [],
  'class' => []]]; 
return   wp_kses($emmy_paginate, $emmy_allowed);                          
}   */       


####################  widgets  ###############
if (!function_exists('emmy_widget')) {
    /**
     * Register widget areas
     */
   include (get_template_directory() . '/inc/widgets.php');

  add_action('widgets_init', 'emmy_widget'); 
    
}

##################   EMMY CUSTOMIZATION  #############


 require get_template_directory() . '/inc/Customization.php';


