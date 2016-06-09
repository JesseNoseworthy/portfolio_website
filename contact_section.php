<div class="main contact-main">
  <div class="container">
    <div class="contact section" id="contact">
    	<div class="contact-intro">
    	
		<?php if(have_posts()){ ?>
			<?php while(have_posts()){?>
				<?php the_post()?>

	    		<h2><?php the_field('contact-header'); ?></h2>
				<h3><?php the_field('contact-subhead')?></h3>	    	
    	<?php 
    		}
	 	}
    	?>	
    	</div>
    	<?php echo do_shortcode( '[contact-form-7 id="25" title="bottom_contact"]' ); ?>	
    </div> <!--/.contact -->

  </div> <!-- /.container -->
</div> <!-- /.main -->