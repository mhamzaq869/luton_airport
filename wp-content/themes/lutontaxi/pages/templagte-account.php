<?php
/*
Template Name: Account Template
*/
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
		<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1>My Account </h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="padd-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" id="pagecontent">
				<div class="wpb_wrapper">
			<iframe src="http://lutonairport.taxi/eto/customer" name="eto-iframe" id="eto-iframe" class="eto-iframe" width="100%" height="250" scrolling="no" frameborder="0">This option will not work correctly. Unfortunately, your browser does not support inline frames.</iframe>

		</div>
			</div>
		</div>
	</div> 
</div>
	<?php endwhile; ?>
<div class="drive-back-image">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="color-heading">Your time. Your day. Your life.</h2>
				<p><a href="#" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/images/drive-btn-image.png"> Drive For Us</a></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>