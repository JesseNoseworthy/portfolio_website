<div class="main">
	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div id="home" class="hero" style="background: url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
	  <div class="hero-content" id="top">
		  <?php // Start the loop ?>
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <h1 class="hero-name"><?php echo get_bloginfo( 'title' ) ?></h1>
		<!-- Text Slide start -->
			<div class="header-text">
				<ul class="text-slider">
					<li class="text-slides">Front-end <span class="color-blue">Web Developer</span></li>
					<li class="text-slides">Front-end <span class="color-blue">Web Developer</span></li>
					<li class="text-slides">Front-end <span class="color-blue">Web Developer</span></li>
				</ul>
			</div>
			<!-- end Text Slide -->
			<!-- Social Links start -->
			<div class="social">
				<h3><?php the_field('social-intro'); ?></h3>
					<?php wp_nav_menu( array(
			          'container' => false,
			          'theme_location' => 'secondary'
			        )); 
			        ?> 
			</div>
			<!-- Social links End -->
			<!-- More button -->
			<a href="#about" class="header-down-arrow"></a>
		</div>
	  <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->