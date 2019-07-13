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

<div class="cell small-12"  data-sticky-container>
	<div class="grid-x grid-padding-x top-bar-left align-center" style="padding-top: 4em; background-color:#fff;" data-sticky>
		<div class="cell small-8">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title tp-header-marker">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title tp-header-marker">', '</h2>' );
			}
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="cell small-12 entry-content tp-body-p">
				<?php the_content(); ?>
			</div>
		</article>
		</div>
	</div>
</div>
