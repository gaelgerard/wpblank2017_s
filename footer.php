<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_blank_theme
 */

?>
	
		</div><!-- #content -->
	
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<?php
					get_template_part('template-parts/copyright');
				?>
			</div><!-- .site-info -->
		<div class="back-to-top small-hidden tiny-hidden"><?php echo  __('Top of page', 'wpblank2017_s') ?></div>
		</footer><!-- #colophon -->
	</div><!-- .wrapper -->
</div><!-- #page -->

	<div id="cookie-bar" class="cookie-message fixed bottom">
				<p><?php echo get_theme_mod( 'cookie_message', 'Ce site utilise des cookies pour vous offrir une meilleure navigation. En poursuivant votre visite, vous acceptez l\'utilisation de ces cookies.' ); ?></p> <a class="my-close-button button" href><?php echo get_theme_mod( 'cookie_message_closeButton', 'Ok !' ); ?></a>
				</div>
<?php wp_footer(); ?>

</body>
</html>
