<?php

$my_theme = wp_get_theme();
$text_domain = $my_theme->get( 'TextDomain' );

register_nav_menus( array(
		'Mainmenu' => __( 'Main Menu', 'f5buddy' ),
		'Footermenu' => __( 'Footer Menu', 'f5buddy' ),
	) );

function magazino_widgets_init($text_domain) {
	
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
    	'id'          => 'sidebar',
    	'name'        => __( 'Sidebar', $text_domain ),
    	'description' => __( 'This is right sidebar.', $text_domain ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ));
    
    // Add multiple sidebar, increase 2
	$args = array(
		'name'          => __('Sidebar Add %d'), 
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '' );
	
	register_sidebars(2, $args);

}
add_action( 'widgets_init', 'magazino_widgets_init' );
	

    
add_theme_support( 'post-thumbnails' );

$defaults = array(
	'default-image'          => '',
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

// Add active class to main menu
add_filter('nav_menu_css_class', 'active_nav_menu_class', 10, 2);

function active_nav_menu_class($classes, $item){
	if (in_array('current-menu-item', $classes)){
		$classes[] = 'active';
	}
	return $classes;
}

?>
