<?php
/*
Template Name: Home Template
*/
get_header(); ?>

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
				<div class="col-sm-12 col-md-5 order-md-2" id="test">
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

<div id="contact-detail-wrap">
	<div class="container-fluid">
		<div class="row m-0">
			<div class="col-sm-8" id="calling-details">
				<div class="row p-2">
					<div class="col-sm-4 p-0">
					    <div class="image-div"><a href="javascript:void(0);"><img class="custom-image" src="<?php echo get_template_directory_uri(); ?>/images/tele-icon.svg" alt="Call"></a></div>
						<div class="text-div"><a href="javascript:void(0);"><span class="CallSpan">24hr Call Center</span><span class="NumberSpan">01582 550096</span></a></div>
					</div>
					<div class="col-sm-4 p-0">
					    <div class="image-div"><a href="javascript:void(0);"><img class="custom-image" src="<?php echo get_template_directory_uri(); ?>/images/world-icon.svg" alt="Call"></a></div>
						<div class="text-div"><a href="javascript:void(0);"><span class="CallSpan">Calling fron Abroad</span><span class="NumberSpan">0044 1582 550096</span></a></div>
					</div>
					<div class="col-sm-4 p-0">
					    <div class="image-div"><a href="javascript:void(0);"><img class="custom-image" src="<?php echo get_template_directory_uri(); ?>/images/whatsapp-brands.svg" alt="Call"></a></div>
						<div class="text-div"><a href="javascript:void(0);"><span class="CallSpan">Contact on Whatsapp</span><span class="NumberSpan">0044777 007 0321</span></a></div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 id="icon-cards-show">
			    <div class="manage-height"></div>
				<div class="payment-options">
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/gpay.svg" alt="Pay with Google Pay with Luton Airport Taxi"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/apppay.svg" alt="Pay with Apple Pay with Luton Airport Taxi"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/payapl.svg" alt="Pay with PayPal with Luton Airport Taxi"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/visa.svg" alt="Pay with Visa Card with Luton Airport Taxi"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/mastercard.svg" alt="Pay with Master Card with Luton Airport Taxi"></a>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri(); ?>/images/express.svg" alt="Pay with American Express with Luton Airport Taxi"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="padd-area text-center icon-wrp">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 mar-btm-50 text-left cus-heading">
				<h1>Let us take care of <span class="lightPink">your journey</span></h1>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus"  onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/24hoursdark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/24-hours.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/24-hours.svg" alt="24x7 Luton Airport Taxi Services">
						<h5>24 Hours Service </h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/bookdark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/book.svg');" >
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/book.svg" alt="Prebooking Luton Airport Taxi Services">
						<h5>Book Online or Call US</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/smsnotidark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/smsnoti.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/smsnoti.svg" alt="Contact Luton Airport Taxi Services with SMS">
						<h5>SMS Notifications on Delivery Arrivals </h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/planedark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/plane.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/plane.svg" alt="Luton Airport Taxi Services">
						<h5>Flight Monitoring</h5>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/liicensed.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/liicensedLight.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/liicensedLight.svg" alt="Luton Airport Taxi Transfer">
						<h5>Fully Licensed Drivers</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/meetdark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/meet.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/meet.svg" alt="Luton Airport Taxi Transfer Services">
						<h5>Meet & Greet</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/chairdark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/chair.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/chair.svg" alt="Luton Airport to London Taxi">
						<h5>Wheelchair Access</h5>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="icon-wrap icon-wrap-cus" onmouseover="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/pricedark.svg');" onmouseout="$(this).find('img').attr('src', '<?php echo get_template_directory_uri(); ?>/images/price.svg');">
					<a href="javascript:void(0);">
						<img src="<?php echo get_template_directory_uri(); ?>/images/price.svg" alt="Luxurious Luton Airport Taxi">
						<h5>Fixed Price</h5>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="padd-area slider-cus">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12  text-center">
    		    <h2>Our <span>fleet</span></h2>

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


            
			<div class="slider slider-single">
				 <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">Standard</span>
                        <span class="width50-2">4 <small>Adult</small></span>
                        <span>2 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home-standard-car.png" alt="Luxurious Standard Cars at Luton Airport Taxi">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">Large</span>
                        <span class="width50-2">5 <small>Adult</small></span>
                        <span>3 <small>Suitcases </small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/large-car.png" alt="Luxurious Large Cars at Luton Airport Taxi">
               </div>
                <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">Executive</span>
                        <span class="width50-2">4 <small>Adult</small></span>
                        <span>2 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/executive-car.png" alt="Luxurious Benz Cars at Luton Airport Taxi">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">Access</span>
                        <span class="width50-2">6 <small>Adult</small></span>
                        <span>3 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/access-car.png" alt="Luxurious Small Cars at Luton Airport Taxi">
        
               </div>

               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">S6 Plus</span>
                        <span class="width50-2">6 <small>Adult</small></span>
                        <span>3 <small>Suitcases</small></span>
                        <span>2 <small>Small cases</small></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/s6plus-car.png" alt="Luxurious Mini Bus Cars at Luton Airport Taxi">
               </div>
               <div class="image-wrap">
                    <div class="image-text-wrap">
                        <span class="width50-1">Minibus</span>
                        <span class="width50-2">10 <small>Adult</small></span>
                        <span>5 <small>Suitcases</small></span>
                        <span>5 <small>Small Suitcases</small></span>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/minibus-car.png" alt="Luxurious VAN Cars at Luton Airport Taxi">
               </div>
			</div>
			


    		</div>
    	</div>
    </div>
</div>
<!--
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

<div class="gray-back padd-area pink-text">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php// while (have_posts()) : the_post(); the_content();
				?>

				<?php //endwhile;
				?>
			</div>
		</div>
	</div>
</div>-->
<div class="taxi-transfer">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 taxi-trans-sec">
			 <div class="taxi-trans-sec-in">
			    <h1>Welcome to <span>Luton Airport Taxi Transfer! </span></h1>
			    
			 </div>
			 <div class="col-sm-12">
			     <div class="col-sm-9">
			         <p>Going to or from Luton airport has never been easier with LUTONAIRPORT.TAXI. We provide affordable, convenient, and safe airport transfers around the clock with just a click or call. Our fleet is up to date with the latest vehicles and technology with vetted, reliable hand picked drivers allowing a comfortable, hassle free journey.</p>
			     </div>
			     <div class="in-taxt-image">
			        <img src="<?php echo get_template_directory_uri(); ?>/images/taxi-transfer.png">
			    </div>
			    
			 </div>
			</div>
			
		</div>
	</div>
</div>
<div class=" padd-area test-wrap customer-say">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>What our customers <span>say about us</span></h1>
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
				    $args = array( 'posts_per_page' =>-1, 'offset'=> 1, 'category' =>5,'post_type'  => 'post');

				    $myposts = get_posts( $args );
				    foreach ( $myposts as $post ) : setup_postdata( $post ); 				    	
			    	$_services = get_field( "_services", $post->ID );
				    ?>
							<div class="sleek-slid">
								<?php the_content();?>
								<div class="slide-meta">
									<div class="user-detail">
									    <!--<img src="<?php echo get_template_directory_uri(); ?>/images/quote.png">-->
									    <ul class="start-rating">
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
											<li><a href="#" class="fas fa-star"></a></li>
										</ul>
										<h6><?php the_title();?></h6>
										
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