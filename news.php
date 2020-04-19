<?php
get_header();
/*
Template Name: News
*/

?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">


			<?php while(have_posts()):the_post(); ?>
				
				<h1>My favourite Item : <?php echo get_post_meta(94,'favourite-food',true);?></h1>

			<?php endwhile;?>


		</div>
	</div>
</section>


<?php get_footer(); ?>