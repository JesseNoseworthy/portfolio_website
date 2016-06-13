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
        <form action="http://www.focuspocus.io/magic/noseworthyjesse@gmail.com" 
            method="POST">
            <div class="contact-form-content">
                <div class="contact-form-info">
                     <input required type="text" name="name" placeholder="name">
                      <input required type="email" name="email" placeholder="email">
                      <input type="text" name="phone" placeholder="phone">
                </div>
                <div class="contact-form-message">
                      <textarea required name="messages" placeholder="message"></textarea>
                </div>
            </div>
            <div class="contact-form-submit">
                <input type="submit" value="Submit">
            </div>
        </form> 
    </div> <!--/.contact -->

  </div> <!-- /.container -->
</div> <!-- /.main -->