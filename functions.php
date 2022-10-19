<?php
 
// Your php code goes here

// Start the engine.
// include_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove).
// define( 'FIT_FRESH_THEME_NAME', 'Fit Fresh' );
// define( 'FIT_FRESH_THEME_URL', 'http://www.fitsmallbusiness.com/' );
// define( 'FIT_FRESH_THEME_LIB', CHILD_DIR . '/lib/' );
// define( 'FIT_FRESH_THEME_LIB_URL', CHILD_URL . '/lib/' );
// define( 'FIT_FRESH_THEME_IMAGES', CHILD_URL . '/images/' );
// define( 'FIT_FRESH_THEME_JS', CHILD_URL . '/assets/js/' );
// define( 'FIT_FRESH_THEME_CSS', CHILD_URL . '/assets/css/' );
// define( 'FIT_FRESH_THEME_MODULES', CHILD_DIR . '/lib/modules/' );

/**
 * Register and Enqueue Scripts.
 *
 * @since Neocuration 1.1
 */
function neocuration_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }

	wp_enqueue_script( 'neocuration-js', get_template_directory_uri() . '/js/custom_script.js', false, $theme_version, false );
	wp_script_add_data( 'neocuration-js', 'async', true );

	print_r(get_template_directory());

	wp_enqueue_script('backbone');

}

add_action( 'wp_enqueue_scripts', 'neocuration_register_scripts' );


function register_my_menus() {
  register_nav_menus(
    array(  
    	'header_navigation' => __( 'header' , 'Header Navigation' ),
		'sidebar_nav' => __( 'sidebar' , 'Sidebar Navigation' ), 
    	'expanded_footer' => __( 'footer' , 'Expanded Footer' )
    )
  );
} 
add_action( 'init', 'register_my_menus' );

function default_header_nav() { // HTML markup for a default message in menu location
	echo "<ul class='nav'>					
		<li>Create the Header Navigation</li>
	</ul>
	<br \>" ;
}

function default_expanded_footer() { 
	echo "<ul class='nav cols four'>					
		<li>Create the Expanded Footer</li>
	</ul>" ;
}

//Sidebar function for 2 dynamic sidebars in widgets area
if ( function_exists('register_sidebars') )
    register_sidebars();
	
add_theme_support( 'post-thumbnails' ); 


// Changing excerpt length
function new_excerpt_length($length) {
return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
