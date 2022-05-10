<?php
/*
Template Name: Business Account Template
*/
get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>
	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center white-text" id="page-head">
					<h1 class="">Business Account</h1>
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</header>
<?php endwhile; ?>
<div class="padd-area ">
	<div class="container">
		<div class="row">
		    <div class="col-sm-5 ds-business-top-left">
					<h1>Signup to a Business Account for <span>Luton Taxi</span></h1>
					<p>Did you know that Luton Taxi Airport offers you to sign up as a Business Account? Fill out this form to know more.</p>
			</div>
			<div class="col-sm-7 ds-business-top-right">
					<?php echo do_shortcode('[contact-form-7 id="82" title="Booking Account"]');?>
			</div>
		</div>
	</div> 
</div>
<?php get_footer(); ?>