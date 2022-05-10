<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982efb97acd5d"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/pages/template-car.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/pages/template-car_2020-07-04-11.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/*
Template Name: Car Template
*/
get_header(); ?>



	<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center" id="page-head">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</div>

</header>

<style>
.cars-layout-page h4{position:relative;text-align:center;}
.cars-layout-page h4:before{position: absolute;
    bottom: 13px;
    content: '';
    height: 1px;
    background-color: #fff;
    left: 0px;
    width: 100%;
    z-index: 0;}
.cars-layout-page h4 span{padding:0 10px;position:relative;z-index:10;font-size: 17px;}

.vc_custom_1492030288870 {
    background-color: #fabc32 !important;
} 


</style>

<div class="padd-area cars-layout-page">
	<div class="container">
		<div class="row">
			  
			        <div class="col-sm-4">
			        <div class="cars-details-wrap">
			            <h4><span>STANDARD</span></h4>
                         <div class="image-text-wrap">
                            <span>4 <small>Adult</small></span>
                            <span>2 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>    
                     <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/standard-cars.png">
                    </div>
                    <div class="col-sm-4">
                     <div class="cars-details-wrap">
			            <h4><span>LARGE</span></h4>
                         <div class="image-text-wrap">
                            <span>5<small>Adult</small></span>
                            <span>3 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/larg-cars.png">
                    </div>
                    <div class="col-sm-4">
                     <div class="cars-details-wrap">
			            <h4><span>EXECUTIVE</span></h4>
                         <div class="image-text-wrap">
                            <span>4 <small>Adult</small></span>
                            <span>2 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2019/02/benz.png">
                    </div>
                    <div class="col-sm-4">
                     <div class="cars-details-wrap">
			            <h4><span>ACCESS</span></h4>
                         <div class="image-text-wrap">
                            <span>6 <small>Adult</small></span>
                            <span>3 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2019/02/small-car.png">
                    </div>
                    <div class="col-sm-4">
                     <div class="cars-details-wrap">
			            <h4><span>S6 PLUS</span></h4>
                         <div class="image-text-wrap">
                            <span>6 <small>Adult</small></span>
                            <span>3 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2018/12/mini-bus-car.png">
                    </div>
                    <div class="col-sm-4">
                     <div class="cars-details-wrap">
			            <h4><span>10 PLUS</span></h4>
                         <div class="image-text-wrap">
                            <span>10 <small>Adult</small></span>
                            <span>3 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2019/01/10-van.png">
                    </div>
                   
                   
                   <div class="col-sm-4 " >
                     <div class="cars-details-wrap">
			            <h4><span>Prestige</span></h4>
                         <div class="image-text-wrap">
                            <span>6 <small>Adult</small></span>
                            <span>3 <small>Suitcases</small></span>
                            <span>2 <small>Small cases</small></span>
                         </div>
			        </div>
                     <img src="<?php echo site_url();?>/wp-content/uploads/2019/01/rangerover.png">
                    </div>
                    
                    <!--<div class="col-sm-4 last_booking">
                     <h4><span>BOOK NOW</span></h4>
                     <a href="tel:Call 01582 29 29 29"><h2 style="" class="vc_custom_heading vc_custom_1492030288870">Call 01582 29 29 29</h2></a>
                    </div>-->
		</div>
	</div>
</div>


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