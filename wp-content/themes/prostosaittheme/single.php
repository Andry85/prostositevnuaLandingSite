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

								<div class="navigation clearfix">
									<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
									<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
								</div>

								<div class="article">
									<h2><?php the_title(); ?></h2>
									<span class="year">Last updated on <time datetime="<?php the_modified_time('Y-m-d'); ?>"><?php the_modified_time('F jS, Y'); ?></time></span>
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