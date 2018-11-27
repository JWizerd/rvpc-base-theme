<?php

if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Header Company Details',
		'id'   => 'header-company-details',
		'description'   => 'For company details at top of page',
		'before_widget' => '<span id="%1$s" class="widget %2$s company-header-details">',
		'after_widget'  => '</span>',
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget 1',
		'id'   => 'sidebar-widget-1',
		'description'   => 'top widget area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget 2',
		'id'   => 'sidebar-widget-2',
		'description'   => 'middle widget area',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Sidebar Widget 3',
		'id'   => 'sidebar-widget-3',
		'description'   => 'bottom widget area',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Widget 1',
		'id'   => 'footer-widget-1',
		'description'   => 'footer widget area left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Widget 2',
		'id'   => 'footer-widget-2',
		'description'   => 'footer widget area middle',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Widget 3',
		'id'   => 'footer-widget-3',
		'description'   => 'footer widget area right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Footer Widget 4',
		'id'   => 'footer-widget-4',
		'description'   => 'footer widget area right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
}

?>
