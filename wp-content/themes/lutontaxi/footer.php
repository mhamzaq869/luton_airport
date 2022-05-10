<!-- <div class="container py-5"> 
    <div class="row out1">
        <div class="bg-dark out2 col-sm-7">
           <p class="text-light">All Cars are Provided with </p>
       </div>
       <div class="bg-dark out4 col-sm-1" >
           <p class="out3 text-light" ><img src="<?php echo get_template_directory_uri(); ?>/images/mask.svg">Mask</p>
       </div> 
       <div class="c-color out4 col-sm-1">
           <p class="out3 text-light"><img src="<?php echo get_template_directory_uri(); ?>/images/sanetize.svg">Sanitiser</p>
       </div>
       <div class="bg-dark out4 col-sm-1" >
           <p class="out3 text-light"><img src="<?php echo get_template_directory_uri(); ?>/images/gloves.svg">Glove</p>
       </div>
   </div>
</div> -->
<footer class="footer">
	<div class="container">
	    	
		<div class="row">
			
			<div class="col-sm-4 col-xs-6">
				<div class="logo-footer">
				    <h5>
					<a href="<?php echo site_url();?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/head-logo.png" alt="Luton Airport Taxi Transfer Services">
					</a>
					</h5>
				</div>
				<h5 class="footer-heading">Luton Airport.Taxi</h5>
				<ul class="contct-details">
					<li><i class=""></i>16 Titan Ct, Laporte Way, Luton, LU4 8EF</li>
					<li>
					    <div class="left-img"><img src="<?php echo get_template_directory_uri(); ?>/images/call.png"></div>
					    <div class="right-div"><a href="tel:01582550096">01582 550096</a><br/></div>
					</li>
					
					<li><i class=""></i>
					    <div class="left-img"><img src="<?php echo get_template_directory_uri(); ?>/images/msg.png"></div>
					    <div class="right-div"><a href="mailto:Info@lutonairport.taxi"> Info@lutonairport.taxi</a></div>
					</li> 
				</ul>
			</div>
			
			
			<div class="col-sm-3 col-xs-6">

				<h5>Navigation</h5>
			  <?php if(has_nav_menu('footer'))
				wp_nav_menu( array('container' => false,
					 'theme_location' => 'footer',
					 'menu_id' => '',
					 'menu_class' => '',
					 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					 'walker' => new Custom_Walker_Nav_Menu) ); ?>
				</div>
			<div class="col-sm-3 col-xs-6">
				<h5>Airport Transfers</h5>

			  <?php if(has_nav_menu('footer1'))
				wp_nav_menu( array('container' => false,
					 'theme_location' => 'footer1',
					 'menu_id' => '',
					 'menu_class' => '',
					 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					 'walker' => new Custom_Walker_Nav_Menu) ); ?>
			</div>
			<div class="col-sm-2 col-xs-6">
				<h5>Follow</h5>
				<ul>
					<li><a href="javascript:void(0);">Facebook</a></li>
					<li><a href="javascript:void(0);">Twitter</a></li>
					<li><a href="javascript:void(0);">Instagram</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<b><p>Copyright <?php echo date('Y');?> | All Rights Reserved by <a href="javascript:void(0)">lutonairport.taxi</a></p></b>
				</div>
				<!--<div class="col-sm-6 text-right">
					<p>Designed by  <a href="https://www.cranberrymktg.co.uk"  rel="nofollow">cranberrymktg.co.uk</a></p>
				</div>-->
			</div>
		</div>
	</div>
</footer>



<style>

iframe#eto-iframe {
    width: auto;
    min-width: 100%;
    border: 0;
    
}

</style>



	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/iframeResizer.min.js"></script>
 	<script src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
 	<script src="https://use.fontawesome.com/0f543323d0.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  


  <script type="text/javascript">
    jQuery('.slider-single').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
    dots: true,
  adaptiveHeight: true,
  infinite: false,
  useTransform: true,
  speed: 400,
  cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 jQuery('.slider-nav')
  .on('init', function(event, slick) {
    jQuery('.slider-nav .slick-slide.slick-current').addClass('is-active');
  })
  .slick({
    slidesToShow: 7,
    slidesToScroll: 7,
    dots: false,
    arrows: false,
    focusOnSelect: false,
    infinite: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
      }
    }, {
      breakpoint: 640,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    }, {
      breakpoint: 420,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
    }
    }]
  });

 jQuery('.slider-single').on('afterChange', function(event, slick, currentSlide) {
  jQuery('.slider-nav').slick('slickGoTo', currentSlide);
  var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
  jQuery('.slider-nav .slick-slide.is-active').removeClass('is-active');
  jQuery(currrentNavSlideElem).addClass('is-active');
 });

 jQuery('.slider-nav').on('click', '.slick-slide', function(event) {
  event.preventDefault();
  var goToSingleSlide = $(this).data('slick-index');

  jQuery('.slider-single').slick('slickGoTo', goToSingleSlide);
 });
  </script>
 	<!--<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>-->
 	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/theme-custom-js.js"></script>


<?php wp_footer(); ?>
	
<style>

.testimonial .slick-active {
    opacity: 5;
}

.slider {
    margin: 0px auto 20px !important;
}

#calling-details a {
    font-size: 22px !important;
}

iframe#eto-iframe {
    width: auto;
    min-width: 100%;
    border: 0;
   
}

</style>	

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c52ca8e51410568a1097623/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	
</body>
</html>