<div class="container">
	<div class="portfolio-content section" id="portfolio">
		<?php  
			$portfolioArgs = array(
				'post_type' => 'portfolio',
				'posts_per_page' => 4,
				'order' => 'ASC'
			);

			$portfolioQuery = new WP_Query($portfolioArgs);
			if ( $portfolioQuery->have_posts() ):
				while ( $portfolioQuery->have_posts() ):
					$portfolioQuery->the_post();
			?>
				<section class="portfolio-item">
					<article class="portfolio-content-image">
						<?php $portfolioImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>	
						<a href=" <?php the_field('portfolio_link'); ?> " target="_blank">
							<img src=" <?php echo $portfolioImage; ?> "/>
						</a>
					</article>
					<article class="portfolio-content-text">
						<h2><?php the_title(); ?></h2>
						<h4><?php the_content(); ?></h4>
						<ul>
							<!-- In order to get the categories without a link, we need to loop through them -->
							<?php $categories = get_the_category(); ?>
							<!-- Which is done right here -->
							<?php foreach($categories as $category) { ?>
							<!-- Then we grab the property and place it in a list item -->
							<li><?php echo $category->cat_name; ?>.</li>
							<?php
							} 
							?>
						</ul>
						<a class="portfolio-see-live-button" href=" <?php the_field('portfolio_link'); ?> " target="_blank">
							<h4>See live site</h4>
						</a>
					</article>
				</section>
					<?php endwhile; ?>
				<?php endif; ?>
	</div>
</div>