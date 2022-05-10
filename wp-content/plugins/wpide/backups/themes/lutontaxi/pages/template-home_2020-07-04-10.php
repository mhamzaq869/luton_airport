<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982d3c295fa7d"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/pages/template-home.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/pages/template-home_2020-07-04-10.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: Home Template
*/
get_header(); ?>

	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-7" id="head-tp-text">
					<h1>Experience Exclusive Ride Luton Taxi Airport Transfer Service</h1>
					<p>Luton Airport Taxi wants a worry-free trip to Luton for all of you. Just let us know wherever you want to go within or outside Luton and we will take care of the rest for you!</p>
					<div class="btn-wrap">
<!--						<a href="<?php echo get_the_permalink(13);?>" class="btn btn-default">Drive for Us</a>-->
						<a href="<?php echo get_the_permalink(9);?>" class="btn btn-primary">Contact Us</a>
					</div>
				</div>
				<div class="col-sm-5" id="test">
				<div class="home_form_wrap">
    				<h3 class="title">Quote &amp; Book</h3>
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

<div id="contact-detail-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-6" id="calling-details">
				<div class="row">
					<div class="col-sm-6">
						<a href="javascript:void(0);"><i class="fas fa-phone-volume"></i> 24hr Call Center<span>01582 292929</span></a>
					</div>
					<div class="col-sm-6">
						<a href="javascript:void(0);"><i class="fas fa-globe-africa"></i> Calling fron Abroad<span>+44 01582 292929</span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="payment-options">
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/wechat-icon.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/visa-icon.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/master-icon.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/paypal-icon.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/apple-pay.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/android-pay.png"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/amex.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="padd-area light-gray-back">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12  text-center">
    		    <h2>OUR FLEET</h2>

<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css"> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">


  <style type="text/css">

    .slider {
     /*   width: 50%;*/
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }

.slick-slide.slick-active.is-active {
    border: 1px solid;
}
  </style>


            <div class="slider slider-nav">
                <div><h3><span>Standard</span></h3></div>
                <div><h3><span>Large</span></h3></div>
                <div><h3><span>Executive</span></h3></div>
                <div><h3><span>Access</span></h3></div>
                <div><h3><span>6 PLUS</span></h3></div>
                <div><h3><span>10 PLUS</span></h3></div>
                <div><h3><span>Prestige</span></h3></div>
                 
               <!-- <div><h3><span>10+</span></h3></div>-->
	
			</div>
			<div class="slider slider-single">
				 <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>4 <small>Adult</small></span>
                        <span>2 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/standard-cars.png">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>4 <small>Adult</small></span>
                        <span>4 <small>Suitcases </small></span>
                        <span>4 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/larg-cars.png">
               </div>
                <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>3 <small>Adult</small></span>
                        <span>2 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                        <img src="<?php echo site_url();?>/wp-content/uploads/2019/02/benz.png">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>5 <small>Adult</small></span>
                        <span>4 <small>Suitcases</small></span>
                        <span>4 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2019/02/small-car.png">
        
               </div>

               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>8 <small>Adult</small></span>
                        <span>8 <small>Suitcases</small></span>
                        <span>10 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/mini-bus-car.png">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>10 <small>Adult</small></span>
                        <span>10 <small>Suitcases</small></span>
                        <span>12 <small>Small Suitcases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2019/01/10-van.png">
               </div>
                <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span>4 <small>Adult</small></span>
                        <span>4 <small>Suitcases</small></span>
                        <span>6 <small>Small Suitcases</small></span>
                    </div>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2019/02/rangerover.png">
               </div>
			</div>
			


    		</div>
    	</div>
    </div>
</div>
<div class="pink-back padd-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="cities-names">
					<a href="javascript:void(0);">Hatfield</a>
					<a href="javascript:void(0);">Harpenden</a>
					<a href="javascript:void(0);">Markyate</a>
					<a href="javascript:void(0);">Hemel Hempstead</a>
					<a href="javascript:void(0);">Batford</a>
					<a href="javascript:void(0);">Welwyn </a>
					<a href="javascript:void(0);">Luton</a>
					<a href="javascript:void(0);">Dunstable</a>
					<a href="javascript:void(0);">Stevenage</a>
					<a href="javascript:void(0);">Hitchin</a>
					<a href="javascript:void(0);">Letchworth</a>
					<a href="javascript:void(0);">Bedford </a>
					<a href="javascript:void(0);">Milton Keynes</a>
					<a href="javascript:void(0);">St Albans</a>
					<a href="javascript:void(0);">Watford</a>
					<a href="javascript:void(0);">London</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="padd-area text-center icon-wrp">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mar-btm-50">
				<h2>Let us take care of your journey</h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/24-hours-icon-image.png">
						<h5>24 Hours Service </h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/booking-icon.png">
						<h5>Book Online or Call US</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/sms-icon.png">
						<h5>SMS Notifications on Delivery Arrivals </h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/fying-jet-icon.png">
						<h5>Flight Monitoring</h5>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/maddle-icon.png">
						<h5>Five Star SerVice</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/user-icons.png">
						<h5>Meet & Greet</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wheelshair-icon.png">
						<h5>Wheelchair Access</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/pound-sign-icon.png">
						<h5>Fixed Price</h5>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gray-back padd-area pink-text">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php while (have_posts()) : the_post(); the_content();?>

				<?php endwhile;?>
			</div>
		</div>
	</div>
</div>

<div class=" padd-area test-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>What our customers say about us. </h2>
<!--				<h3>Outstanding</h3>
					<ul class="start-rating">
					<li><a href="#" class="fas fa-star"></a></li>
					<li><a href="#" class="fas fa-star"></a></li>
					<li><a href="#" class="fas fa-star"></a></li>
					<li><a href="#" class="fas fa-star"></a></li>
					<li><a href="#" class="fas fa-star-half-alt"></a></li>
				</ul>
			<p>based on reviews from <strong> 596 Customers</strong></p>-->
			</div>
			<div class="testimonial slider" >
				 <?php
				    $args = array( 'posts_per_page' =>-1, 'offset'=> 1, 'category' =>5,'post_type'  => 'post', );

				    $myposts = get_posts( $args );
				    foreach ( $myposts as $post ) : setup_postdata( $post ); 				    	
			    	$_services = get_field( "_services", $post->ID );
				    ?>
							<div class="sleek-slid">
								<?php the_content();?>
								<div class="slide-meta">
									<div class="test-thumb-wrap">
										<?php the_post_thumbnail( 'thumbnail' );?>
								
									</div>
									<div class="user-detail">
										<h6><?php the_title();?><small> - <?php echo date('j M Y')?></small></h6>
										<ul class="start-rating">
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star-half-alt"></a></li>
										</ul>
										<div class="clearfix"></div>
										<p><?php echo $_services;?></p>
									</div>
								</div>
							</div>

				    <?php endforeach; 
				    wp_reset_postdata();?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>