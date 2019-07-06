<?php
/*
Template Name: Custom Full Width
Author: Tom Pepper
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/tp-content', 'page' ); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<?php get_footer();
