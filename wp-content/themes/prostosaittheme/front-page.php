<?php
/*
Template Name: Main Page
*/
?>
<?php get_header();  ?>
	<main class="main">
					
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>	

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>	
		<div id="contacts"></div>	
	</main>					
					
	
<?php get_footer();  ?>	