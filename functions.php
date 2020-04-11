<?php

function music_default_functions(){

	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');


	load_theme_textdomain('music',get_template_directory_uri().'/languages');

	register_nav_menus(array(
		'main-menu'		=> __('Main Menu','music'),
		'footer-menu'	=> __('Footer Menu','music')

	));


}
add_action('after_setup_theme','music_default_functions');


function read_more($limit){
		$post_content = explode(" ", get_the_content());
		$lesss_content = array_slice($post_content,0, $limit);
		echo implode(" ", $lesss_content);
	}


?>