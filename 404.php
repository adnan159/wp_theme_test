
<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
					<h1> 404 not Found!!!</h1>
					<p>Maybe you are looking for somehthing else!!</p>
					Please visit <a href="<?php esc_url(bloginfo('home'));?>"> Home </a>

				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="wrap-col">
						<?php dynamic_sidebar('right-sidebar'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>