<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	
    <link rel="shortcut icon" type="image/png" href="//lutonairport.taxi/wp-content/uploads/2020/07/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="01fQ0zrLOoTx86JfD078qN7dg8Voq3qQk_jVxxRWoSA" />
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
		<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Luton Airport Taxi Transfer Services",
  "image" : "https://lutonairport.taxi/wp-content/themes/lutontaxi/images/carforhead.png",
  "telephone" : [ "01582 292929", "44 01582 292929" ],
  "email" : "",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "960 Capability Green, Luton, Bedfordshire LU1 3PL."
  },
  "review" : [ {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "Briony Brooks"
    }
  }, {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "Richard Chapman"
    }
  }, {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "Jason pal"
    }
  }, {
    "@type" : "Review",
    "author" : {
      "@type" : "Person",
      "name" : "Cath Walker"
    }
  } ]
}
</script>
	
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
		  $home = 'business_account_banner pageheader';	 
	}else{
		$home = 'pageheader-simple';	
	}
?>
<header class="<?php echo $home;?>">
	<div class="top-head">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo-wrap">
						<a href="<?php echo site_url();?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/head-logo.png" alt="Luton Airport Taxi Transfer Services">
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


