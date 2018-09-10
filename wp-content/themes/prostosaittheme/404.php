<?php get_header();  ?>
	<main class="main">
					
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="errorPage">
				<h1>404</h1>
				<p>Sorry, page not found!</p>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>	
		<div id="contacts"></div>	
	</main>					
					
	
<?php get_footer();  ?>	