<!-- copyright -->
					
					<div id="copyright">
					
	<?php
						//Mettre le code suivant pour la date automatique :
						//set start to date your site was published
						$startCopyRight= get_theme_mod( 'start_date' );
						
						// check if start year is this year
						if(date('Y') <= $startCopyRight || empty($startCopyRight)){
						// it was, just print this year
						$startCopyRight = $startCopyRight;
						}else{
						// it wasnt, print startyear and this year delimited with a dash
						$startCopyRight =  $startCopyRight.'-'. date('Y');
						}
						?>
						<!--+ ajouter le code ci-dessous :-->
						<ul>
						<?php
								$nom_societe = get_theme_mod( 'nom_societe' );
								$nom_agence = get_theme_mod( 'nom_agence' );
								$url_agence = get_theme_mod( 'url_agence' );
								$lien_legal_id = get_theme_mod( 'page_legal' );
								$lien_legal = get_the_title( $lien_legal_id );
								$lien_legal_url = get_the_permalink( $lien_legal_id );
								$lien_contact_id = get_theme_mod( 'page_contact' );
								$lien_contact = get_the_title( $lien_contact_id );
								$lien_contact_url = get_the_permalink( $lien_contact_id );
							?>
								<li class="inbl tiny-w100 pas"><a href="/" class="owner">&copy; <?php echo $startCopyRight ?> <?php if (!empty($nom_societe) ) { ?><span class="nom_societe"><?php echo $nom_societe; ?></span><?php } else { bloginfo('name');} ?></a></li>
								<?php if (!empty($nom_agence) && !empty($url_agence)):?>
									<li class="inbl tiny-w100 pas"><a href="<?php echo $url_agence; ?>" target="_blank"><?php echo $nom_agence; ?></a>
									<?php elseif (!empty($nom_agence) && empty($url_agence)):?><?php echo $nom_agence; ?>
									</li>
								<?php endif; ?>
							<?php if (!empty($lien_legal_id)):?>
							<li class="lien legal inbl tiny-w100 pas"><a href="<?php echo $lien_legal_url; ?>"><?php echo $lien_legal; ?></a></li>
							<?php endif; ?>
							<?php if (!empty($lien_contact_id)):?>
							<li class="lien contact inbl tiny-w100 pas"><a href="<?php echo $lien_contact_url; ?>"><?php echo $lien_contact; ?></a></li>
							<?php endif; ?>
							<!-- /copyright -->
					</ul>
				</div>