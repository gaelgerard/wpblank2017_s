<?php 
/*
	Template Name: Page contact
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
			<p id="breadcrumbs">','</p>
			');
			}
			?>
				<div class="map-container flex-item-center">
					<?php
						get_template_part( 'template-parts/map', 'adresse' );
						get_template_part( 'template-parts/adresse' );
					 ?>
				 </div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-contact' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>