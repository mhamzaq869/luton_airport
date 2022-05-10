<?php get_header(); ?>


<?php while (have_posts()) : the_post(); ?>
	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-7 order-2" id="head-tp-text">
				<!--	<h1>Experience Exclusive Ride Luton Taxi Airport Transfer Service</h1>
					<p>Luton Airport Taxi wants a worry-free trip to Luton for all of you. Just let us know wherever you want to go within or outside Luton and we will take care of the rest for you!</p>
					<div class="btn-wrap">
						<a href="<?php //echo get_the_permalink(13);?>" class="btn btn-default">Drive for Us</a>-->
						<!--<a href="<?php //echo get_the_permalink(9);?>" class="btn btn-primary">Contact Us</a>->
				</div>-->
                    <h1>Luton Airport <span>hassle free transfer service.</span></h1>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/carforhead.png">
				</div>
				<div class="col-sm-12 col-md-5 order-md-2 " id="test">
				<div class="home_form_wrap">
    				<h3 class="title">Book Now</h3>
    				<iframe src="<?php echo site_url();?>/eto/booking/widget" name="eto-iframe" id="eto-iframe" class="eto-iframe" width="100%" height="250" scrolling="no" frameborder="0">This option will not work correctly. Unfortunately, your browser does not support inline frames.</iframe>
    			
                    <script>
                    iFrameResize({log:false, targetOrigin:'*', checkOrigin:false}, "iframe#eto-iframe");
                    </script>
			    </div>				
					
				</div>
			</div>
		</div>
	</div>
</header>
<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" id="page-head">
					<?php the_title('<div class="title"><h1>', '</h1></div>'); ?>
					
				</div>
			</div>
		</div>
	</div>


<div class="padd-area gray-back">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>