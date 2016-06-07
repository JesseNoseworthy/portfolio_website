<div class="main">
  <?php 
	  // Get the tiled-background
	  $about_background_tile = get_field('about-background-tile'); 
	  // Then put it into a url
	  $about_background_tile_url = $about_background_tile['url'];
	  // Get the full background
	  $about_background_full = get_field('about-background-full'); 
	  // Then put it into a url
	  $about_background_full_url = $about_background_full['url'];
	  // Get the image within the content
	  $about_headshot = get_field('about-image');
  ?>
    <div id="about" class="about" style="background: url(' <?php echo $about_background_tile_url ?> ') left top repeat, url(' <?php echo $about_background_full_url ?> ') center center fixed; ">
		<div class="container">
			<div class="about-content">
				<div class="about-image">
					<img class="bio-image" src="<?php echo $about_headshot['sizes']['medium'] ?>">
				</div>
		    	<div class="about-text">
					<div class="about-headers">
			    		<h2><?php the_field('about-title'); ?></h2>
			    		<h3><?php the_field('about-subhead'); ?></h3>	
		    		</div>
			    	<div class="about-bio">
			    		<p><?php the_field('about-content') ?></p>
			    	</div>
		    	</div>
			</div>
    	</div> <!-- /.container -->
	</div> <!--/.content -->
</div> <!-- /.main -->