<?php
// Define the version so we can easily replace it throughout the theme
define( 'RLS_2022', 1.0 );

if ( ! isset( $content_width ) ) $content_width = 900;

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'reikilightspace' ),
		'header-menu' => __( 'Header Menu' ),
    'footer-menu' => __( 'Footer Menu' ),
	)
);

function reikilightspace_widgets() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'description' => 'Sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>',
		'empty_title'=> '',
	));

	register_sidebar(array(
    'name' => 'Contact Info',
    'id' => 'contact-info',
    'description' => 'Add a text block with your contact info',
    'before_widget' => '<section class="address">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
		'empty_title'=> '',
  ));
} 

add_action( 'widgets_init', 'reikilightspace_widgets' );


function reikilightspace_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');

	// add javascript
	wp_enqueue_script( 'twshealth-js', get_template_directory_uri() . '/main.js', array(), RLS_2022, true );
	
	// add theme scripts
	wp_enqueue_script( 'reikilightspace', get_template_directory_uri() . '/js/theme.min.js', array(), RLS_2022, true );
  
}
add_action( 'wp_enqueue_scripts', 'reikilightspace_scripts' );

function add_column( $columns ){
	$columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
	if( $column === 'post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);