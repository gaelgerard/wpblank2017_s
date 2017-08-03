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
			<div class="custom-footer">
				<?php
					get_template_part('template-parts/custom-footer');
				?>
	
			</div>
			<div class="flex-container site-info">
				<div class="flex-item-center  tiny-w100 txtcenter">
				<?php
					get_template_part('template-parts/copyright');
				?>
				</div>
			</div><!-- .site-info -->
		<div class="back-to-top small-hidden tiny-hidden"><?php echo  __('Top of page', 'wpblank2017_s') ?></div>
		</footer><!-- #colophon -->
	</div><!-- .wrapper -->
</div><!-- #page -->

	<div id="cookie-bar" class="cookie-message fixed bottom">
		<div class="cookie-message-container">
				<p><?php echo get_theme_mod( 'cookie_message', 'Ce site utilise des cookies pour vous offrir une meilleure navigation. En poursuivant votre visite, vous acceptez l\'utilisation de ces cookies.' ); ?></p> <a class="my-close-button button"><?php echo get_theme_mod( 'cookie_message_closeButton', 'Ok !' ); ?></a>
				<?php if ( get_theme_mod( 'page_legal') ){ 
								$lien_legal_id = get_theme_mod( 'page_legal' );
								$lien_legal = get_the_title( $lien_legal_id );
								$lien_legal_url = get_the_permalink( $lien_legal_id );
								?>
				<a href="<?php echo $lien_legal_url; ?>#cookies" class="find-more-button pas"><?php echo __('Read more','wpblank2017_s'); ?></a>
			<?php	}; ?>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>
