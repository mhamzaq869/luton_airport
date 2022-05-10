<?php
/*
Template Name: Drive For Us Template
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>		
		<div class="banner-text-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center white-text" id="page-head">
						<h1 class="pink-text"><?php the_title();?></h1>
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
					<h2>Register As Driver</h2>
					<?php echo do_shortcode('[contact-form-7 id="83" title="Drive For Us"]');?>
				</div>				
			</div>
		</div>
	</div> 
</div>

<?php get_footer(); ?>