<?php
get_header();
/*
Template Name: News
*/

?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">


			<div class="one_half">
				<?php
					$national = new WP_Query(array(
						'post_type'		=>'post',
						'post_per_page'	=>4, 
						'post_category'	=> 'national'
					));

				?>

				<?php while($national -> have_posts()): $national -> the_post(); ?>
					<?php the_title();?>
				<?php endwhile;?>
			</div>


			<div class="one_half">
				<?php
					$international = new WP_Query(array(
						'post_type'		=>'post',
						'post_category'	=> 'international'
					));

				?>
				<?php while($international -> have_posts()): $international -> the_post();?>
					<?php the_title();?>
				<?php endwhile; ?>
			</div>


		</div>
	</div>
</section>


<?php get_footer(); ?>