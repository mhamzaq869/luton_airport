<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "0472253e250d673fdce5bca13a176982771967d3e1"){
                                        if ( file_put_contents ( "/home2/mbbxxjmy/public_html/lutonairport/wp-content/themes/lutontaxi/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home2/mbbxxjmy/public_html/lutonairport/wp-content/plugins/wpide/backups/themes/lutontaxi/header_2020-07-04-19.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
    <link rel="shortcut icon" type="image/png" href="http://lutonairport.taxi/wp-content/uploads/2019/01/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/thenme-style.css">

		
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css"  />
		
		<script type="text/javascript">
			var pathInfo = {
				base: '<?php echo get_template_directory_uri(); ?>/',
				css: 'css/',
				js: 'js/',
				swf: 'swf/',
			}
		</script>
		
		<?php if ( is_singular() ) wp_enqueue_script( 'theme-comment-reply', get_template_directory_uri()."/js/comment-reply.js" ); ?>
		
		<?php wp_head(); ?>
		<!--[if lt IE 7]>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lt7.css" />
		<![endif]-->
</head>

<?php if ( is_page(13) ) {  $drive = 'class="drive-for-us"'; } elseif (is_page(7)) {
	 $drive = 'class="drive-for-us"';
} ?>

<body <?php echo $drive;?>>

<?php 
	if ( is_front_page() ) {
		 $home = 'pageheader homepage_banner homepageheader';
	}elseif( is_page(13) ) {
		 $home = '';
	}elseif ( is_page(11) ) {
		 $home = 'about_us_banner pageheader ';
	}elseif ( is_page(15) ) {
		 $home = 'our_fleet_banner pageheader';
	}elseif ( is_page(9) ) {
		 $home = 'contact_us_banner pageheader';
	}elseif ( is_page(85) ) {
		 $home = 'booking_banner pageheader';
	}elseif (is_page(7)) {
		  $home = '';	 
	}else{
		$home = 'pageheader ';	
	}
?>
<header class="<?php echo $home;?>">
	<div class="top-head">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo-wrap">
						<a href="<?php echo site_url();?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/luton-texi-logo.png" alt="Luton Airport Taxi Transfer Services">
						</a>
					</div>
					<div class="menu-wrap">
						<nav class="navbar navbar-expand-lg navbar-light ">
						  
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
							  <?php /*if(has_nav_menu('primary'))
									wp_nav_menu( array('container' => false,
										 'theme_location' => 'primary',
										 'menu_id' => 'navigation',
										 'menu_class' => 'navbar-nav mr-auto',
										 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
										 'walker' => new Custom_Walker_Nav_Menu) );*/ ?>

						    <ul class="navbar-nav mr-auto">
						      <li class="nav-item active hightlight">
						        <a class="nav-link" href="<?php echo site_url();?>">Home</a>
						      </li>
						      <li class="nav-item hightlight">
						        <a class="nav-link" href="<?php echo get_permalink(11);?>">About Us</a>
						      </li>
						      <li class="nav-item hightlight">
						        <a class="nav-link" href="<?php echo get_permalink(15);?>">Our Fleet</a>
						      </li>
						      <li class="nav-item hightlight">
						        <a class="nav-link disabled" href="<?php echo get_permalink(9);?>">Contact Us</a>
						      </li>
						      <li class="nav-item hightlight">
						      	<a class="nav-link disabled" href="<?php echo get_permalink(7);?>">Business Account</a>
						      </li>
						    </ul>
						  </div>
						</nav>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>


