<?php
						$addthis = get_theme_mod( 'tag_addthis' );
						if (!empty($addthis)):
?>
<div class="share_box">
						<a class="bouton shareButton" href="#no"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
<!-- AddThis Button BEGIN -->
			<div class="addthis">
				<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
				<a class="addthis_button_print bouton"><i class="fa fa-print"></i></a>
				<a class="addthis_button_email bouton"><i class="fa fa-envelope"></i></a>
				<a class="addthis_button_twitter bouton"><i class="fa fa-twitter"></i></a>
				<a class="addthis_button_pinterest bouton"><span></span></a>
				<a class="addthis_button_facebook bouton"><i class="fa fa-facebook"></i></a>
				<a class="addthis_button_google_plusone_share bouton"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a class="addthis_button_linkedin bouton"><i class="fa fa-linkedin"></i></a>
				<a class="addthis_button_viadeo bouton"><i class="fa fa-viadeo" aria-hidden="true"></i></a>
				<a class="addthis_button_compact bouton"><i class="fa fa-plus"></i></a>
				<!--<a class="addthis_counter addthis_bubble_style"></a>-->
				</div>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $addthis; ?>"></script>
			</div><?php
						$rss = get_theme_mod( 'checkbox_rss' );
						if (!empty($rss)):?>
			<!-- AddThis Button END -->
			<a class="rss bouton" href="/feed/" title="<?php echo __('RSS Feed', 'html5blank');?>"><i class="fa fa-rss"></i>
</a>

			
						<?php endif; ?>
			
</div>
						
						<?php endif; ?>	