<footer>
	<div class="footer">
		<div class="button-to-top-container">
			<a href="#top" class="button-to-top">
				<i class="fa fa-angle-double-up"></i>
			</a>
		</div>
		<h2><?php echo get_bloginfo( 'title' ) ?></h2>
		<?php wp_nav_menu( array(
	        'container' => false,
	        'theme_location' => 'secondary'
	      )); 
	      ?> 
	      <p class="footer-phone-email"><?php the_field('footer-phone'); ?></p>
	      <span class="footer-email color-blue"><?php the_field('footer-email'); ?></span>
	      <p><?php the_field('footer-location'); ?></p>
		</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>