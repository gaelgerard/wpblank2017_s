<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wordpress_blank_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'That page can&rsquo;t be found.', 'wpblank2017_s' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wpblank2017_s' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>
				
					<p><?php echo __('You can also navigate in the categories below:', 'html5blank');?><!--Vous pouvez également naviguer parmis les rubriques ci-dessous--></p>
					
					<div class="nav404">
						<?php wp_nav_menu( array( 'theme_location' => 'error-menu', 'menu_id' => 'error-menu' ) ); ?>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
