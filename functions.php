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

	//Gallery
	register_post_type('galleryitem',array(
		'labels'	=> array(
			'name'			=> 'Gallery',
			'add_new_item'	=> __('Add gallery item Here','music')
		),
		'public'	=> true,
		'supports'	=> array('title','editor','thumbnail')
	));



	add_filter('widget_text','do_shortcode');



}
add_action('after_setup_theme','music_default_functions');

//css and js function
function music_css_js(){
	wp_register_style('zerogrid', get_template_directory_uri().'/css/zerogrid.css');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
	wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_register_style('responsiveslides', get_template_directory_uri().'/css/responsiveslides.css');


	wp_register_script('responsiveslides',get_template_directory_uri().'/js/responsiveslides.js',array('jquery'));
	wp_register_script('script',get_template_directory_uri().'/js/script.js',array('jquery','responsiveslides'));



	wp_enqueue_style('zerogrid');
	wp_enqueue_style('style');
	wp_enqueue_style('responsive');
	wp_enqueue_style('responsiveslides');


	//jquery
	wp_enqueue_script('jquery');
	wp_enqueue_script('responsiveslides');
	wp_enqueue_script('script');

}
add_action('wp_enqueue_scripts','music_css_js');

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
		'name'          => __('Contact Right Sidebar','zboom'),
		'description'   => __('Add Contact Right Widgets Here','zboom'),
		'id'            => 'contact-sidebar',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   =>'</h2></div><div class="content">',
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

//create new user without Dashboard

// $uservariable = wp_create_user('virtu159','123456','adnan@fddsf.com');
// $rolevariable = new WP_User($uservariable);
// $rolevariable -> set_role('administrator');

$uservariable = new WP_User(wp_create_user('redlock','11111','adab@red.com'));
$uservariable -> set_role('subscriber');


//shortcode 
include('shortcodes.php');

//custom meta box
function music_meta_box(){
	add_meta_box(
		'favourite-blog',
		'What is Your Favourite Blog?',
		'meta_box_output',
		'page'
	);

}
add_action('add_meta_boxes','music_meta_box');

function meta_box_output($post){?>

	<label for="blog">Type Your Favourite Food?</label>
	<p><input type="text" id="blog" name="favourite-blog" value="<?php echo get_post_meta($post ->ID, 'favourite-blog',true);?>"></p>

<?php }

function insert_meta_data($post_id){
	update_post_meta($post_id, 'favourite-blog', $_POST['favourite-blog']);
}
add_action('save_post','insert_meta_data');



?>