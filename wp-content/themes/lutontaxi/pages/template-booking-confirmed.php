<?php
/*
Template Name: Booking Confirmed Template
*/
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
		<div class="banner-text-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="page-head">
					<h1>Booking Confirmed</h1>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="padd-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" id="pagecontent">
				<?php the_content();?>
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
				<p><a href="<?php echo get_the_permalink(13);?>" class="btn btn-default"><img src="images/drive-btn-image.png"> Drive For Us</a></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>