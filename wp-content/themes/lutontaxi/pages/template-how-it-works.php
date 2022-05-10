<?php
/*
Template Name: How it Works Template
*/
get_header(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</div>
	</header>
	<div class="padd-area" id="steps-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">Follow 4 Simple Step to Book a Taxi</h2>
				</div>
			</div>
			<div class="row step-wrap">

				<?php the_content();?>

			</div>
		</div>
	</div> 
	<?php endwhile; ?>
	<div class="container vedio-wrap">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>How to get to the pick up location</h3>
				<div class="text-center vedio-block">
					<img src="<?php echo get_template_directory_uri(); ?>/images/video-block.jpg">
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>