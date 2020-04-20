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

				hi

			<?php endwhile;?>


		</div>
	</div>
</section>


<?php get_footer(); ?>