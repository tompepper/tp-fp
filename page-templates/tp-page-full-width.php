<div class="tp-main-container grid-x">
	<div class="cell small-12 large-4 tp-container-intro">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/tp-content-intro', 'page' ); ?>
		<?php endwhile; ?>
	</div>
	<div class="cell main-grid small-12 large-6 tp-container-art">
		<main class="main-content-full-width">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/tp-content-art', 'page' ); ?>
			<?php endwhile; ?>
		</main>
	</div>
	<div class="cell small-12 large-2 tp-container-links">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/tp-content-links', 'page' ); ?>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer();
