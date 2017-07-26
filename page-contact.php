<?php 
/*
	Template Name: Page contact
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

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
	<script src='<?php echo get_template_directory_uri(); ?>/js/jquery.customSelect.min.js'></script>
	  <script type="text/javascript">

    jQuery(function ($){
		jQuery("#offres-liste option").eq(0).text("<?php echo  __('Job opportunity*', 'wpblank2017_s') ;?>");
		jQuery("#civilite option").eq(0).text("<?php echo  __('Gender*', 'wpblank2017_s') ;?>");
		
		$('select.wpcf7-form-control').customSelect();
	  });
	</script>   
