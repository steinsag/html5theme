<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => '1',
		'before_widget' => '<section id="%1$s" class="row widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => '2',
		'before_widget' => '<section id="%1$s" class="row widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

