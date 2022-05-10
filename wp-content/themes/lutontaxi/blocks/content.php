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
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="title">
				<?php if ( is_single() ) :
					the_title( '<h1>', '</h1>' );
				else :
					the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>		
				<p class="info"><strong class="date"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('F jS, Y') ?></a></strong> <?php _e('by', 'base'); ?> <?php the_author(); ?></p>
			</div>
			<div class="content">
				<?php the_post_thumbnail(); ?>
				<?php if (is_single()) :
					the_content();
				else:
					the_excerpt();
				endif; ?>
			</div>
			<div class="meta">
				<ul>
					<li><?php _e('Posted in', 'base'); ?> <?php the_category(', ') ?></li>
					<li><?php comments_popup_link(__('No Comments', 'base'), __('1 Comment', 'base'), __('% Comments', 'base')); ?></li>
					<?php the_tags(__('<li>Tags: ', 'base'), ', ', '</li>'); ?>
					<?php edit_post_link( __( 'Edit', 'base' ), '<li>', '</li>' ); ?>
				</ul>
			</div>
		</div>
