<?php get_header();  ?>
	<!-- Import hero header -->
	<?php include 'hero.php'; ?>
	<!-- Import about section -->
	<?php include 'about_section.php'; ?>
	<!-- Portfolio section -->
	<div class="container">
		<div class="portfolio-content">
			<?php  
				$portfolioArgs = array(
					'post_type' => 'portfolio',
					'posts_per_page' => 4,
					'order' => 'ASC'
				);

				$portfolioQuery = new WP_Query($portfolioArgs);
				if ( $portfolioQuery->have_posts() ) {
					while ( $portfolioQuery->have_posts() ) {
						$portfolioQuery->the_post();
				?>
					<article class="portfolio-content-image">
						<?php $portfolioImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>	
						<img src=" <?php echo $portfolioImage; ?> "/>
					</article>
					<article class="portfolio-content-text">
						<h2><?php the_title(); ?></h2>
						<ul>
							<!-- In order to get the categories without a link, we need to loop through them -->
							<?php $categories = get_the_category(); ?>
							<!-- Which is done right here -->
							<?php foreach($categories as $category) { ?>
							<!-- Then we grab the property and place it in a list item -->
							<li><?php echo $category->cat_name; ?></li>
							<?php
							} 
							?>
						</ul>
						<a href=" <?php the_field('portfolio_link'); ?> " target="_blank"><h4>See live site</h4></a>
					</article>
				<?php
					}
				}
			?>
		</div>
	</div> <!-- /.container -->





	<!-- Import contact section -->
	<?php include 'contact_section.php' ?>
<?php get_footer(); ?>