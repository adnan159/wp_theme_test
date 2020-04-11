<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/css/responsiveslides.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet');?>">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo esc_url(get_template_directory_uri());?>/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/jquery.min.js"></script>
	<script src="<?php echo esc_url(get_template_directory_uri());?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo"><a href="<?php bloginfo('home');?>"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png"/></a></div>
		
		<div id="search">
			<div class="button-search"></div>
			<input type="text" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<?php
				wp_nav_menu(array(
					'theme_location'	=> 'main-menu',
				));

			?>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					
					<?php while(have_posts()) : the_post(); ?>

					<article>
						<?php the_post_thumbnail();?>
						<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y');?> with <?php comments_popup_link('No Comment','One comment','% Commnets','class',''); ?>]</div>
						<?php read_more(10); ?><a href="<?php the_permalink(); ?>">... read more</a>
					</article>

					<?php endwhile;?>

					
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo esc_url(get_template_directory_uri());?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>About Us</h2></div>
						<div class="content">
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Post</h2></div>
						<div class="content">
							<ul>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
								<li><a href="#">Every Hot Summer</a></li>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Hot Albums</h2></div>
						<div class="content">
							<div class="tag">
								<a href="#">Galaxy</a><a href="#">Beatport</a><a href="#">Amazon</a><a href="#">Itunes</a><a href="#">Sonic</a><a href="#">Kpopps</a><a href="#">Summer</a><a href="#">Magical</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Contact Us</h2></div>
						<div class="content">
							<ul>
								<li>Address : 0123 Some Street. Country</li>
								<li>Phone : 000.000.000.000</li>
								<li>Email : admin@zerotheme.com</li>
								<li>Website : www.zerotheme.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row copyright">
			<p>Copyright © 2013 - <a href="https://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="https://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
		</div>
	</div>

	<?php wp_footer(); ?>

</footer>

</body></html>