<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	function modify_jquery() {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js', false, '1.8.2');
		wp_enqueue_script('jquery');
	
}
add_action('init', 'modify_jquery');


	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
	// Don't use main-sidebar as your name
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Primary Sidebar',
    		'id'   => 'primary-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div></div>',
    		'before_title'  => '<div class="widget-title"><h3>',
    		'after_title'   => '</h3></div><div class="widget-body">'
    	));
    }


$args = array(
	'width'         => 2000,
	'height'        => 250,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );





//Register multiple menus
	function register_my_menus() {
	  register_nav_menus(
		array(
		  'main-menu' => __( 'Main Menu' ),
		  'blog-menu' => __( 'Blog Menu' ),
		  'portfolio-menu' => __( 'Portfolio Menu' )
		)
	  );
	}
	add_action( 'init', 'register_my_menus' );
		
		

// this adds theme support for custom menus. Wordpress backend: Appearance ->Menus
add_theme_support( 'menus' );




// remove the brackets and three dots at end of excerpt and replace with below:
function new_excerpt_more( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');




// featured images support
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' ); 

}


// Add new image sizes
add_image_size('instagram-image', 320, 320, TRUE);



if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'post'
 ) );

 }




register_sidebar(array(
	'name' => 'Social Links',
    'before_widget' => '',
    'after_widget' => '',
	'before_title' => '<p style="display:none;">',
    'after_title' => '</p>',
    ));
	




function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }	
	
	
	

?>