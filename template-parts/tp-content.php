<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="grid-x grid-padding-x align-top">

	<div class="cell small-12 large-4">
		<header>
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
		</header>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="cell small-12 entry-content tp-container-intro">
					<?php the_content(); ?>
				</div>
			<footer>

			</footer>
		</article>
	</div>
			/* Trying to figure out feature image */
	<div class="cell small-12 large-8 tp-container-art">
		<?php $catquery = new WP_Query( 'cat=art&posts_per_page=1' ); ?>
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<div class="cell small-12">
				<?php get_template_part( 'featured-thumbnail' ); ?>
				<h3>
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				</h3>
				<?php the_content(); ?></li>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

</div>
