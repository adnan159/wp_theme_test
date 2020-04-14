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
	//sliders
	register_post_type('musicslider',array(
		'labels'	=> array(
			'name'			=> 'Slider',
			'add_new_item'	=> __('Add Silder Here','muusic')
		),
		'public'	=> true,
		'supports'	=> array('title','editor','thumbnail')
	));

	//blocks
	register_post_type('musicblocks',array(
		'labels'	=> array(
			'name'			=> 'Srevices',
			'add_new_item'	=> __('Add services Here','music')
		),
		'public'	=> true,
		'supports'	=> array('title','editor','thumbnail')
	));


}
add_action('after_setup_theme','music_default_functions');

//side bar
function music_sidebar(){
	register_sidebar(array(
		'name'          => __('Right Sidebar','music'),
		'description'   => __('Add Right Widgets Here','music'),
		'id'			=> 'right-sidebar',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   =>'</h2></div><div class="content">',
	));

	register_sidebar(array(
		'name'          => __('Concact Right Sidebar','music'),
		'description'   => __('Add Contact Widgets Here','music'),
		'id'            => 'contact-sidebar',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   =>'</h2></div><div class="content">',
		'after_widget'  => '</div></div></div></div>',
	));

	register_sidebar(array(
		'name'          => __('Footer Sidebar','music'),
		'description'   => __('Add Footer Widgets Here','music'),
		'id'            => 'footer-sidebar',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   =>'</h2></div><div class="content">',
		'after_widget'  => '</div></div></div></div>',
	));

}
add_action('widgets_init', 'music_sidebar');

function read_more($limit){
	$post_contet 	= explode(" ", get_the_content());
	$less_content 	= array_slice($post_contet, 0, $limit);

	echo implode(" ",$less_content);
}


?>