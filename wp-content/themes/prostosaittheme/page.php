<?php get_header();  ?>
	<main class="main">				
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-sm-offset-1">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>

								<div class="article-page">
									<h2><?php the_title(); ?></h2>
									<span class="year"><?php the_date('Y'); ?></span>
									<div class="entry">
										<?php the_content('Read the rest of this entry &raquo;'); ?>
									</div>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
	</main>					
					
	
<?php get_footer();  ?>	