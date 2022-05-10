<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982efb97acd5d"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/pages/template-about.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/pages/template-about_2020-07-04-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: About Template
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" id="page-head">
					<h1>Get to Know lutonairport.taxi</h1>
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
	</div>
</div>

<div class="padd-area about-mission text-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="mission-wrap">
					<h4>Services</h4>
					<p>We provide a transparent service guarantee from the point of booking all the way to the drop off point. All our prices are fixed so that there is no ambiguity with regards to the fee that will be charged. We do our best to keep our customers in the loop about the service being provided by Luton Airport Taxi by promptly sending in emails and SMS to our customers, updating them about their travel plans within Luton with us.</p>	
				</div>
			</div>
			<div class="col-sm-6">
				<div class="mission-wrap">
					<h4>Our Mission</h4>
					<p>Our mission is simple: we aim to cater to the travelling and transport needs of every person who visits Luton and is in need of such services. And we aim to do this just the way you want us to – in a secure, comfortable, and top quality fashion!</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="mission-wrap">
					<h4>Our Vibe</h4>
					<p>If there is one thing that everyone knows about Luton Taxi Airport, it is undoubtedly our commitment to make you feel safe and secure when you travel with us. That is the vibe we focus on providing to our clients! </p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="mission-wrap">
					<h4>Our Promise</h4>
					<p>Is there anything more important than comfort, security and value for money for a traveler? We espouse these values and inculcate them in our staff so that your experience in Luton is worth remembering – that is our promise!</p>
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
				<p><a href="<?php echo get_the_permalink(13);?>" class="btn btn-default"><img src="<?php echo get_template_directory_uri(); ?>/images/drive-btn-image.png"> Drive For Us</a></p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>