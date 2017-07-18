<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wordpress_blank_theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'wpblank2017_s' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wpblank2017_s' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wpblank2017_s' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wpblank2017_s' ); ?></p>
			<?php
				get_search_form();

		endif; ?>				
				<p><?php echo __('You can also navigate in the categories below:', 'html5blank');?><!--Vous pouvez également naviguer parmis les rubriques ci-dessous--></p>
				
				<div class="nav404">
					<?php wp_nav_menu( array( 'theme_location' => 'error-menu', 'menu_id' => 'error-menu' ) ); ?>
				</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->
