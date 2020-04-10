<?php

function music_default_functions(){

	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post-thamnails');

}
add_action('after_setup_theme','music_default_functions');



?>