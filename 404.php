<?php get_header(); ?>

<div class="main">
	<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( 5 ), 'full' ); ?>
  <div id="not-found-hero" style="background: linear-gradient(rgba(57,57,57,0.5), rgba(57,57,57,0.5)), url('<?php echo $background[0]; ?>'); ?> ; background-size: cover;">
	  <div class="not-found">
		  <h1 class="not-found-head">404</h1>
		  <h2 class="not-found-sub">Page not found</h2>
		  <h4 class="not-found-text">You can go back <a href="jessenoseworthy.com">home</a> or try to search below:</h4>
		  <?php get_search_form(); ?>
		</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->
