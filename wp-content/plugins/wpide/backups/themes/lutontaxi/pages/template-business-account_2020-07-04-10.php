<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982efb97acd5d"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/pages/template-business-account.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/pages/template-business-account_2020-07-04-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: Business Account Template
*/
get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>
	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center white-text" id="page-head">
					<h1 class="pink-text">Signup to a Business Account</h1>
					<p>Did you know that Luton Taxi Airport offers you to sign up as a Business Account? Fill out this form to know more.</p>
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
			<div class="col-sm-12 form-drive" id="pagecontent">
				<div class="contact-form-wrap">
					<h2>Register to Business Account</h2>
					<?php echo do_shortcode('[contact-form-7 id="82" title="Booking Account"]');?>
				</div>				
			</div>
		</div>
	</div> 
</div>
<?php get_footer(); ?>