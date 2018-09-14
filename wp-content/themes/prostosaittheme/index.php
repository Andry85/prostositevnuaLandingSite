<?php get_header();  ?>
	<main class="main">				
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
						    <?php if(function_exists('bcn_display'))
						    {
						        bcn_display();
						    }?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-sm-offset-1">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-sm-7">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div class="article">
									<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
									<div class="entry">
										<?php the_content('Read More &raquo;'); ?>
									</div>
								</div>
							<?php endwhile; ?>

							<div class="navigation">
								<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
								<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
							</div>

						<?php else : ?>
							<h2 class="center">Not Found</h2>
							<p class="center">Sorry, but you are looking for something that isn't here.</p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
	</main>					
					
	
<?php get_footer();  ?>	