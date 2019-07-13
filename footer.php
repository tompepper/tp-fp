<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container" style="padding:4em 1em;">
	<div class="grid-x">
	<div class="cell small-12 medium-8 tp-body-p">
		<p>I do other stuff besides paint<br>
		For design services visit <a href="http://tompepper.design">tompepper.design</a></p>
	</div>
	<div class="cell small-8 medium-4">
		<div class="grid-x grid-padding-x tp-social-links">
			<div class="cell small-2">
				<a class="social-instagram" target="_BLANK" href="https://instagram.com/tompepper">&nbsp;</a>
			</div>
			<div class="cell small-2">
				<a class="social-twitch" target="_BLANK" href="https://twitch.tv/tompeppre">&nbsp;</a>
			</div>
			<div class="cell small-2">
				<a class="social-twitter" target="_BLANK" href="https://twitter.com/tompeppre">&nbsp;</a>
			</div>
			<div class="cell small-2">
				<a class="social-discord" target="_BLANK" href="https://discord.gg/tQfeGtt">&nbsp;</a>
			</div>
			<div class="cell small-2">
				<a class="social-patreon" target="_BLANK" href="https://www.patreon.com/tompepper">&nbsp;</a>
			</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>
