<?php
/*
Template Name: Contact Template
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="padd-area gray-back">
	<div class="container">
	    <div class="row ">
	        <div class="col-sm-4 ds-contact-us-top-left">
	            <h1>Let’s Keep <span>in Touch</span></h1>
	            <p>Let’s get you moving. Send us a message and we’ll take it from there!</p>
	        </div>
			<div class="col-sm-8 ds-contact-us-top-right" id="pagecontent">
        	    <div class="contact-map">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39397.53228005627!2d-0.4629551234087913!3d51.891153824802956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876360018f62c49%3A0x33fa5303edefd681!2sLuton%2C+UK!5e0!3m2!1sen!2s!4v1545380608698" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
		<div class="row ds-contact-us-bottom">
			<div class="col-sm-4 ds-contact-us-bottom-left" id="pagecontent">
				<div class="ds-content-wrap">
					<h2>Luton Airport.Taxi</h2>
					<p>16 Titan Ct, Laporte Way, Luton, LU4 8EF</p>
                    <p>+44 777 007 0321</p>
                    <p>Info@lutonairport.taxi</p>
				</div>
				
			</div>
			<div class="col-sm-8 ds-contact-us-bottom-right">
			    <?php echo do_shortcode('[contact-form-7 id="70" title="Contact us"]');?>
			</div>
		</div>
	</div> 
</div>

<?php endwhile; ?>
<?php get_footer(); ?>