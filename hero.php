<div class="main">
	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
  <div id="home" class="hero" style="background: linear-gradient(rgba(57,57,57,0.5), rgba(57,57,57,0.5)), url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
	  <div class="hero-content" id="top">
		  <?php // Start the loop ?>
		  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <h1 class="hero-name"><?php echo get_bloginfo( 'title' ) ?></h1>
		<!-- Text Slide start -->
			<div class="header-text">
				<ul class="text-slider">
					<li class="text-slides">Front-end <span class="color-blue">Web Developer</span></li>
					<li class="text-slides">Slightly addicted to <span class="color-blue">calc()</span></li>
					<li class="text-slides">Programming since <span class="color-blue">2015</span></li>
					<!--  Slightly addicted to calc(), Computer programmer, developing since 2015, Comfortable with multiple languages, The guy who put the sass in SCSS, JS: Jesse's safehaven, I code while I'm dreaming, I put the fun in function, I react well to JS frameworks,  -->
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