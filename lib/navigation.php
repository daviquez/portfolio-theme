<?php
// MENU
function special_nav_class ($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

register_nav_menus(
	array(
		'top_menu' => __('Top Menu', 'theme'),
		'footer_menu' => __('Footer Menu', 'theme'),
	)
);
