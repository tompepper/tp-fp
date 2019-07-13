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
<div class="grid-x grid-padding-x align-center">

	<div class="cell small-12 tp-art sections">
		<?php $catquery = new WP_Query( 'cat=art' ); ?>
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
		<section class="cell small-12 text-center" data-magellan-target="post-<?php the_ID(); ?>">
			<article>
				<?php the_content(); ?>
			</artcile>
		</section>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<h4 class="tp-header-marker">End of the line, pal</h4>
	</div>

</div>
