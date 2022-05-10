<?php
/*
Template Name: About Template
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" id="page-head">
					<h1>About Us</h1>
				<!--	<p>Use the form below to drop us an e-mail.</p>
					<p>Old-fashioned phone calls work too ~ 610.891.9922</p>-->
				</div>
			</div>
		</div>
	</div>

</header>

<div class="padd-area gray-back">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row">
			<img class="ds-about-us-image mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/about-us-service.svg">
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>