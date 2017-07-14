
				
			
			<?php if( have_rows('bloc_adresse_colonne_gauche') ): ?>
					<div class="map sub-header">
			<div class="acf-map">
				<?php while ( have_rows('bloc_adresse_colonne_gauche') ) : the_row(); 
		 
					$location = get_sub_field('location');
					?>
					
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
						<div class="bloc_adresse_map">
							       <div class="adresse">
							<?php if( get_sub_field('nom') ):?>
							<h2><?php the_sub_field('nom'); ?></h2>
						       <?php endif; ?>
						       <?php if( get_sub_field('type_dadresse') ):?>
							<h3><?php the_sub_field('type_dadresse'); ?></h3>
						       <?php endif; ?>
                                            <?php if( get_sub_field('adresse') ):?>
						 <div class="bloc adresse">
						 <?php the_sub_field('adresse'); ?>
						<?php if( get_sub_field('adresse_2') ):?>
							 <br><?php the_sub_field('adresse_2'); ?>
						<?php endif; ?>
						<?php if( get_sub_field('code_postal_ville') ):?>
							 <br><?php the_sub_field('code_postal_ville'); ?>
						<?php endif; ?>
                                                </div>
					    <?php endif; ?>
							       </div><!--adresse-->
						</div><!--bloc_adresse_colonne_gauche-->
					</div><!--Marker-->
				<?php endwhile; ?>
			</div><!--acf-map-->
					</div>
		
			<?php endif; ?>
			
 <?php wp_reset_query(); ?> 