<?php
	
	// Register Navigation Menus
function custom_navigation_menus() {
/*
	$locations = array(
		'news' => __( 'News', 'text_domain' ),
	);
	register_nav_menus( $locations );
*/
	register_nav_menu('header-menu',__( 'Menu 1' ));
}

// Hook into the 'init' action
add_action( 'init', 'custom_navigation_menus' );

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');

function special_nav_class($classes, $item){
     if(is_single() && $item->title == "Activities"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "dropdown-toggle";
     }
     return $classes;
}

add_filter('wp_nav_menu' , 'special_nav_class' , 10 , 2);
?>