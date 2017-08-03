
	<div class="ggai_wp-galerie">
			
		<?php
			if( get_field('videos') ): 
					while( has_sub_field('videos') ):
					$url = get_sub_field('url');
					?>
					<div class="video">
						<?php echo html_entity_decode($url) ?>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
		<?php
			if( get_field('galerie') ): 
					while( has_sub_field('galerie') ): 
				$image = get_sub_field('image');
				$width= $image['sizes']['vignette_grid_large-width'];
				$height= $image['sizes']['vignette_grid_large-height'];
				$src= $image['sizes']['vignette_grid_large'];
				$src_large= $image['sizes']['large'];
				$alt= $image['alt'];
				if (empty ($image['alt'])) {
					$alt= $image['title'];
				};
                $alt = htmlentities($alt);
	//var_dump($image); 
                    if ( get_sub_field('legende_de_limage')) { $class_texte = "withText";};
                   if ( empty(get_sub_field('legende_de_limage'))) { $class_texte = "";};
                    if ( get_sub_field('image')) { $class_image = "withImage";};
                    if ( empty( get_sub_field('image'))) { $class_image = "";};
                    ?>
        <article class="<?php echo $class_image; ?> <?php echo $class_texte; ?>">
    <?php
                    if ( get_sub_field('legende_de_limage')) { ?>
                    <div class="legende_de_limage"><?php the_sub_field('legende_de_limage'); ?></div>
                    <?php }; 
                    if ( get_sub_field('image')) { ?>
                    <div class="image">
					<a href="<?php echo $src_large; ?>" rel="lightbox" title="<?php echo $alt; ?>">
			<img width="<?php echo $width; ?>" height="<?php echo $height; ?>" src="<?php echo $src; ?>" alt="<?php echo $alt; ?>">
									</a>
                                    </div>
                    <?php }; ?>
                    </article>
                
					<?php endwhile; ?>
				<?php endif; ?>
    </div><!--ggai_wp-galerie-->