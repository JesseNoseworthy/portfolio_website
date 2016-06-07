<?php get_header();  ?>

<div class="main">
	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div class="container hero" style="background: url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
	  <?php // Start the loop ?>
	  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <h1 class="hero-name"><?php echo get_bloginfo( 'title' ) ?></h1>
	<!-- Text Slide start -->
		<div class="header-text">
			<ul class="text-slider">
				<li class="text-slides">We Believe in <span class="text-slides-span">Good Design</span></li>
			</ul>
		</div><!-- end text slider -->
		<div class="social">
			<h3><?php the_field('social-intro'); ?></h3>
			<ul class="social-links">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>

	  <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>