<?php

function music_heading($atts,$content){
	$headingg = extract(shortcode_atts(array(
		'position'	=> 'left',
	),$atts));

	return "<h1 align='".$position."'>".$content."</h1>";


}
add_shortcode('heading','music_heading');

function music_image($atts,$content){
	$image = shortcode_atts(array(
		'height'	=> '30px',
		'width'		=> '30px'
	),$atts);
	return '<img height="'.$image['height'].'" width="'.$image['width'].'" src="'.$content.'"/>';

}
add_shortcode('image','music_image');


function music_block_item($atts,$content){
	ob_start();

	$shownumber = extract(shortcode_atts(array(
		'number'	=>'3',
	),$atts));
 ?>

<?php
	$blocksitem = new WP_Query(array(
	'post_type'	=> 'musicblocks',
	'posts_per_page'	=> $number, 
	));
?>

<?php while($blocksitem->have_posts()) : $blocksitem->the_post(); ?>

	<div class="col-1-3">
		<div class="wrap-col box">
			<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			<p></p>
			<div class="more"><a href="<?php the_permalink();?>">read more</a></div>
		</div>
	</div>

<?php endwhile; ?>

<?php $bolckitem = ob_get_clean();
	return $bolckitem;
}
add_shortcode('block','music_block_item');
?>


