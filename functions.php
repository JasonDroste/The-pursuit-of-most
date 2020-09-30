<?php
/*
 ======================================================
	Include Scripts "Enqueue"
		remember: 
		-css 'hook'
		-absolute path to style sheet
		-empty array
		-version
		-media type
		-'true' places javaScript in the footer. 'False' will place it is the header
 ======================================================
*/
function pursuit_script_enqueue(){
	//css 
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style('scrolling-nav', get_template_directory_uri().'/css/scrolling-nav.css', array(), '1.0.0', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/pursuit.css', array(), '1.0.0', 'all');
	wp_enqueue_style('teststyle', get_template_directory_uri().'/css/test.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0', 'all');
	
	
	
	//js
	wp_enqueue_script('jquery'); //'true' if you want the jquery in the footer
	//wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery.js', array(), '3.3.7', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '3.3.7', true);
	/*wp_enqueue_script('jquery.easing.js', get_template_directory_uri(). '/js/jquery.easing.min.js', array(), '1.0.0', true);
	wp_enqueue_script('scrolling-nav', get_template_directory_uri(). '/js/scrolling-nav.js', array(), '1.0.0', true);*/
	
	
}
add_action('wp_enqueue_scripts', 'pursuit_script_enqueue');

/*
	=====================================================
						Activate Menus
		This sets up various options for active menus
		Simply drag and drop to dynamically add menu pages
	=====================================================
*/
function pursuit_theme_setup(){
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'pursuit_theme_setup');

/*
	=====================================================
				Theme Support functions
		This pertains to Blog posts - styling & position
	=====================================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
	=====================================================
						Sidbar/widgets
		Customizing widget bar options
	=====================================================
*/

function pursuit_widget_setup(){
	register_sidebar(
		array(
			'name' 	=> 'Sidebar',
			'id'   	=> 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</aside>',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',	
		)
	);
	register_sidebar(
		array(
			'name' 	=> 'Sidebar2',
			'id'   	=> 'sidebar-2',
			'class' => 'custom',
			'description' => 'Standard sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</aside>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',	
		)
	);
	register_sidebar(
		array(
			'name' 	=> 'Sidebar3',
			'id'   	=> 'sidebar-3',
			'class' => 'custom',
			'description' => 'Standard sidebar',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'	=> '</li> <hr />',
			'before_title'	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',	
		)
	);
}
add_action('widgets_init','pursuit_widget_setup');

/*
	======================================================
				Custom Excerpts
	======================================================
*/
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<br /><br />
						<a href="%1$s" class="btn btn-outline-primary btn-lg active btn-square read-more" role="button" aria-pressed="true">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/*
	=====================================================
				Thumbnail/featured image resize
	=====================================================
*/


if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
// delete the next line if you do not need additional image sizes
add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}


/*
	=====================================================
				Include Walker file
	=====================================================
*/
require get_template_directory() . '/inc/walker.php';
?>