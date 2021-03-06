<?php
//constants
define('THEME_NAME', 'cleanwebOne');
define('THEME_SLUG', 'cleanwebOne');
define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
// define('THEME_IMG', THEME_URI . '/img');
// define('THEME_CSS', THEME_URI . '/css');
// define('THEME_JS', THEME_URI . '/js');
// define('THEME_INCLUDES', THEME_URI . '/includes');

// define('THEME_FRAMEWORK', THEME_DIR . '/framework');
// define('THEME_GLOBAL', THEME_FRAMEWORK . '/global');
// define('THEME_CUSTOM_TYPES', THEME_FRAMEWORK . '/custom_post_types');
// define('THEME_WIDGETS', THEME_FRAMEWORK . '/widgets');
// define('THEME_SHORTCODES', THEME_FRAMEWORK . '/shortcodes');

// define('THEME_ADMIN', THEME_FRAMEWORK . '/admin');
// define('THEME_ADMIN_URI', THEME_URI . '/framework/admin');
// define('THEME_ADMIN_CSS', THEME_ADMIN_URI . '/css');
// define('THEME_ADMIN_JS', THEME_ADMIN_URI . '/js');
// define('THEME_ADMIN_IMG', THEME_ADMIN_URI . '/img');
// define('THEME_ADMIN_OPTIONS', THEME_ADMIN . '/options');
// define('THEME_ADMIN_METABOXES', THEME_ADMIN . '/metaboxes');



// load_theme_textdomain( THEME_SLUG, TEMPLATEPATH . '/languages' ); 

class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		$id_field = $this->db_fields['id'];
 
		if ( isset( $args[0] ) && is_object( $args[0] ) )
		{
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
 
		}
 
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
 
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( is_object($args) && !empty($args->has_children) )
		{
			$link_after = $args->link_after;
			$args->link_after = ' <b class="caret"></b>';
		}
 
		parent::start_el($output, $item, $depth, $args, $id);
 
		if ( is_object($args) && !empty($args->has_children) )
			$args->link_after = $link_after;
	}
 
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu list-unstyled\">\n";
	}
}

add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
	if ( $args->has_children )
	{
		$atts['data-toggle'] = 'dropdown';
		$atts['class'] = 'dropdown-toggle';
	}
 
	return $atts;
}, 10, 3);

function register_my_menu() {
  register_nav_menu('main_nav', THEME_NAME . ' Header Menu');
}
add_action( 'init', 'register_my_menu' );




//global functions
// require_once (THEME_GLOBAL . '/head.php');
// require_once (THEME_GLOBAL . '/theme-functions.php');
// require_once (THEME_GLOBAL . '/getoption.php');
// require_once (THEME_GLOBAL . '/filters.php');
// require_once (THEME_GLOBAL . '/pagination.php');
// require_once (THEME_GLOBAL . '/image-resize.php');
// require_once (THEME_GLOBAL . '/mobile-detect.php');
// require_once (THEME_GLOBAL . '/update-notifier.php');



//custom post types
//require_once (THEME_CUSTOM_TYPES . '/gallery.php');
//require_once (THEME_CUSTOM_TYPES . '/portfolio.php');

//admin
// require_once (THEME_ADMIN_METABOXES . '/post.php');
// require_once (THEME_ADMIN_METABOXES . '/page.php');
// require_once (THEME_ADMIN_METABOXES . '/portfolio.php');
// require_once (THEME_ADMIN_METABOXES . '/gallery.php');
// require_once (THEME_ADMIN_METABOXES . '/shortcodes.php');
// require_once (THEME_ADMIN_METABOXES . '/cc.php');
// require_once (THEME_ADMIN_METABOXES . '/attachment.php');

// Custom functions and plugins
// require_once (THEME_ADMIN . '/admin-functions.php');

// Admin Interfaces (options,framework, seo)		
// require_once (THEME_ADMIN . '/admin-interface.php');		

// Options panel settings and custom settings
// require_once (THEME_ADMIN . '/theme-options.php'); 
// require_once (THEME_ADMIN . '/global_functions.php');
// require_once (THEME_ADMIN . '/head.php');


//shortcodes
// require_once (THEME_SHORTCODES . '/formatting.php');
// require_once (THEME_SHORTCODES . '/blog.php');
// require_once (THEME_SHORTCODES . '/portfolio-projects.php');
// require_once (THEME_SHORTCODES . '/portfolio-list.php');
// require_once (THEME_SHORTCODES . '/pricing-table.php');
// require_once (THEME_SHORTCODES . '/buttons.php');
// require_once (THEME_SHORTCODES . '/columns.php');
// require_once (THEME_SHORTCODES . '/contactform.php');
// require_once (THEME_SHORTCODES . '/gmap.php');
// require_once (THEME_SHORTCODES . '/gallery.php');
// require_once (THEME_SHORTCODES . '/images.php');
// require_once (THEME_SHORTCODES . '/tabs.php');
// require_once (THEME_SHORTCODES . '/toggles.php');
// require_once (THEME_SHORTCODES . '/slideshow.php');
// require_once (THEME_SHORTCODES . '/slogan.php');
// require_once (THEME_SHORTCODES . '/typography.php');
// require_once (THEME_SHORTCODES . '/videos.php');



// add_action( 'widgets_init', 'register_theme_widgets' ); 

// function register_theme_widgets() {  
// 
// 	register_widget('Theme_Widget_Flickr');  
// 	register_widget('Theme_Widget_Portfolio');  
// 	register_widget('Theme_Widget_Popular_Posts');  
// 	register_widget('Theme_Widget_Recent_Posts');  
// 	register_widget('Theme_Widget_Related_Posts');  
// 	register_widget('Theme_Widget_Twitter');  
// 	
// }  

//widgets
// require_once (THEME_WIDGETS . '/flickr.php');
// require_once (THEME_WIDGETS . '/popular.php');
// require_once (THEME_WIDGETS . '/recent.php');
// require_once (THEME_WIDGETS . '/related.php');
// require_once (THEME_WIDGETS . '/twitter.php');
// require_once (THEME_WIDGETS . '/portfolio.php');


// The redirect here works fine on production but needs to be disabled for development.
// Probably harmess?
remove_filter('template_redirect', 'redirect_canonical');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function my_widgets_init() {

	register_sidebar( array(
		'name' => 'Blog right sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<p class="rounded name">',
		'after_title' => '</p>',
	) );
}
add_action( 'widgets_init', 'my_widgets_init' );

// We probably should have much earlier registered all our JavaScript here.

add_action( 'wp_enqueue_scripts', 'enqueue_and_register_scripts' );

function enqueue_and_register_scripts() {
  if( !is_admin() ) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("//code.jquery.com/jquery-1.10.2.min.js"), false, '1.10.2');
    wp_enqueue_script('jquery');

    wp_deregister_script('jquery-ui');
    wp_register_script('jquery-ui', ("//code.jquery.com/ui/1.10.4/jquery-ui.min.js"), false, '1.10.4');
    wp_enqueue_script('jquery-ui');

    wp_deregister_script('jquery-mobile');
    wp_register_script('jquery-mobile', ("//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css"), false, '1.4.0');
    wp_enqueue_script('jquery-mobile');

    wp_deregister_script('bootstrap');
    wp_register_script('bootstrap', ("//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"), false, '3.0.0');
    wp_enqueue_script('bootstrap');

    wp_deregister_script('typekit');
    wp_register_script('typekit', ("//use.typekit.net/cfg6qvz.js"), false);
    wp_enqueue_script('typekit');

    wp_deregister_script('jquery-blackandwhite');
    wp_register_script('jquery-blackandwhite', (get_bloginfo('stylesheet_directory')."/js/jquery.BlackAndWhite.js"), false);
    wp_enqueue_script('jquery-blackandwhite');

    wp_deregister_script('leaflet');
    wp_register_script('leaflet', ("//cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"), false, '0.6.4');
    wp_enqueue_script('leaflet');

    wp_deregister_script('jquery-transform2d');
    wp_register_script('jquery-transform2d', (get_bloginfo('stylesheet_directory')."/js/jquery.transform2d.js"), false);
    wp_enqueue_script('jquery-transform2d');

    wp_deregister_script('jquery-rotate-knobs');
    wp_register_script('jquery-rotate-knobs', (get_bloginfo('stylesheet_directory')."/js/jquery.rotate-knobs.js"), false);
    wp_enqueue_script('jquery-rotate-knobs');

    wp_deregister_script('jquery-mosaic-flow');
    wp_register_script('jquery-mosaic-flow', (get_bloginfo('stylesheet_directory')."/js/jquery.mosaicflow.min.js"), false);
    wp_enqueue_script('jquery-mosaic-flow');

  }
}

?>
