<?php get_header(); ?>

<?php

/*
Template Name: Home
*/


?>

<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">

					<?php
					$slideritem = new WP_Query(array(
						'post_type'		=> 'musicslider',
						'posts_per_page'=> 3
					));


					?>

					<?php while($slideritem->have_posts()): $slideritem->the_post(); ?>

					<li><?php the_post_thumbnail(); ?> </li>

					<?php endwhile;?>

				</ul>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">

				<?php
					$blocksitem = new WP_Query(array(
						'post_type'	=> 'musicblocks',
						'posts_per_page'	=> 3, 
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
		</div>


		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

					<?php
						$post_contentss = new WP_Query(array(
							'post_type'	=>'post',

						));

					?>

					<?php while($post_contentss->have_posts()) : $post_contentss->the_post(); ?>

					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
								<div class="info">By <?php the_author(); ?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('No Comment','One Comment','% Comments','adnan','Comment Disable');?></div>
								<p><?php read_more(12);?></p>
								<a href="<?php the_permalink();?>">[View Post]</a>
							</div>
						</div>
					</article>

					<?php endwhile;?>


				</div>
			</div>
			<div class="col-1-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>