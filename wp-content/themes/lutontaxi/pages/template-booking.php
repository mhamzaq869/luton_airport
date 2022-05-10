<?php
/*
Template Name: Booking Template
*/

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
		<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1>Booking </h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="padd-area booking-sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" id="pagecontent">
				<div class="wpb_wrapper">
				<iframe src="http://lutonairport.taxi/eto/booking" name="eto-iframe" id="eto-iframe" class="eto-iframe" width="100%" height="450" scrolling="no" frameborder="0" style="height: 450px !important">This option will not work correctly. Unfortunately, your browser does not support inline frames.</iframe>
		        </div>
			</div>
		</div>
	</div> 
</div>
  <script>
    iFrameResize({log:false, targetOrigin:'*', checkOrigin:false}, "iframe#eto-iframe");
    </script>
			
	<?php endwhile; ?>
<!--<div class="drive-back-image">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="color-heading">Your time. Your day. Your life.</h2>
				<p><a href="#" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/images/drive-btn-image.png"> Drive For Us</a></p>
			</div>
		</div>
	</div>
</div>-->

<?php get_footer(); ?>