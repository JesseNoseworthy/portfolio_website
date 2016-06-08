<div class="main skill-main">
  <div class="container skill-container">
	<?php if( have_rows('skill_icons') ): ?>
		<?php while( have_rows('skill_icons') ): the_row();
			$skillIcon = get_sub_field('skill_devicon');
			$skillTitle = get_sub_field('skill_title'); 
		?>
			 <div class="skill-items">
				<p><?php echo $skillIcon ?></p>
				<h5><?php echo $skillTitle ?></h5>
			</div> <!-- /. skill-items -->
		
		<?php endwhile; ?>

	<?php endif; ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->