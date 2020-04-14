<?php
get_header();
/*
Template Name: Contact;
*/

?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php while(have_posts()) : the_post(); ?>

						<article>
							<?php the_post_thumbnail(); ?>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
							<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('No comment Here','One commnet','%d comments','adnan','Commnet Disable');?>]</div>
							
							<?php the_content();?>

							<div class="comment">
								
								<?php comments_template(); ?>

							</div>
						</article>

					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<?php dynamic_sidebar('contact-sidebar');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>