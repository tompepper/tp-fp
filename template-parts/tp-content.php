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

<div class="grid-x grid-padding-x align-left-middle">
	<div class="cell small-12 large-10">
		<div class="grid-x grid-padding-x align-center">

			<div class="cell small-10 medium-6 large-4 align-self-top">
				<header>
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title tp-header-marker">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title tp-header-marker">', '</h2>' );
					}
				?>
				</header>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="cell small-12 entry-content tp-body-p">
						<?php the_content(); ?>
					</div>
				</article>
			</div>

			<div class="cell small-12 large-7 tp-art" data-infinite-scroll='{ "path": "/?p={{#}}", "append": ".post", "history": false }'>
				<?php $catquery = new WP_Query( 'cat=art' ); ?>
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
				<div class="cell small-12 text-center">
					<article>
						<?php the_content(); ?>
					</article>
				</div>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

				<footer class="tp-body-p">
					<h4 style="margin-bottom: 2.5em;" class="tp-header-marker">End of the line, pal</h4>
					<p style="text-align: center;">I do other stuff besides paint<br>
						For design services visit <a href="http://tompepper.design">tompepper.design</a></p>
				</footer>
			</div>

		</div>
	</div>
</div>
