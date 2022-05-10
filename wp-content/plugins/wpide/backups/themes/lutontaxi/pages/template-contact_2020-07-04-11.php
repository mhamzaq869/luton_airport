<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982efb97acd5d"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/pages/template-contact.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/pages/template-contact_2020-07-04-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: Contact Template
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1>Contact US</h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="padd-area gray-back">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" id="pagecontent">
				<div class="contact-form-wrap">
					<h2>Send Us Message</h2>
					<p>Let’s get you moving. Send us a message and we’ll take it from there!</p>
					


					<?php echo do_shortcode('[contact-form-7 id="70" title="Contact us"]');?>



				</div>
				
			</div>
		</div>
	</div> 
</div>
<div class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39397.53228005627!2d-0.4629551234087913!3d51.891153824802956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876360018f62c49%3A0x33fa5303edefd681!2sLuton%2C+UK!5e0!3m2!1sen!2s!4v1545380608698" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>