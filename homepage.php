<?php
/**
Template Name: Custom Homepage
 **/
?>

<?php get_header(); ?>

			<!-- Row for main content area -->
			<div class="large-12 columns homepage" id="page-content" role="main">
				
				<!-- product-slider-container -->
				<div class="product-slider-container">

					<?php
						
						// Product Slider

						// Getting the images
						$product_slider_image_1 = Kirki::get_option( mc, product_slider_image_1 );
						$product_slider_image_2 = Kirki::get_option( mc, product_slider_image_2 );
						$product_slider_image_3 = Kirki::get_option( mc, product_slider_image_3 );
						$product_slider_image_4 = Kirki::get_option( mc, product_slider_image_4 );
						$product_slider_image_5 = Kirki::get_option( mc, product_slider_image_5 );

						//Getting the captions
						$product_slider_caption_1 = Kirki::get_option( mc, product_slider_caption_1 );
						$product_slider_caption_2 = Kirki::get_option( mc, product_slider_caption_2 );
						$product_slider_caption_3 = Kirki::get_option( mc, product_slider_caption_3 );
						$product_slider_caption_4 = Kirki::get_option( mc, product_slider_caption_4 );
						$product_slider_caption_5 = Kirki::get_option( mc, product_slider_caption_5 );


						// Check if any image exists
						if ( $product_slider_image_1 || $product_slider_image_2 || $product_slider_image_3 || $product_slider_image_4 || $product_slider_image_5 ) {

							// Code for flexslider
					?>
							
							<div class="product-slider">
						  		<ul class="slides">
						    		<?php if ( $product_slider_image_1 )
						    			{
						    		?>
						    			<li>
						    				<img src="<?php echo $product_slider_image_1; ?>" class="product-slider-image-1" />
						    				<?php if ( $product_slider_caption_1 ) { echo '<p class="flex-caption">'. $product_slider_caption_1 .'</p>'; } ?>
						    			</li>	
						    		<?php
						    			} 
						    		?>
						    		

						   			<?php if ( $product_slider_image_2 )
						    			{
						    		?>
						    			<li>
						    				<img src="<?php echo $product_slider_image_2; ?>" class="product-slider-image-2" />
						    				<?php if ( $product_slider_caption_2 ) { echo '<p class="flex-caption">'. $product_slider_caption_2 .'</p>'; } ?>
						    			</li>	
						    		<?php
						    			} 
						    		?>

						    		<?php if ( $product_slider_image_3 )
						    			{
						    		?>
						    			<li>
						    				<img src="<?php echo $product_slider_image_3; ?>" class="product-slider-image-3" />
						    				<?php if ( $product_slider_caption_3 ) { echo '<p class="flex-caption">'. $product_slider_caption_3 .'</p>'; } ?>
						    			</li>	
						    		<?php
						    			} 
						    		?>

						    		<?php if ( $product_slider_image_4 )
						    			{
						    		?>
						    			<li>
						    				<img src="<?php echo $product_slider_image_4; ?>" class="product-slider-image-4" />
						    				<?php if ( $product_slider_caption_4 ) { echo '<p class="flex-caption">'. $product_slider_caption_4 .'</p>'; } ?>
						    			</li>	
						    		<?php
						    			} 
						    		?>

						    		<?php if ( $product_slider_image_5 )
						    			{
						    		?>
						    			<li>
						    				<img src="<?php echo $product_slider_image_5; ?>" class="product-slider-image-5" />
						    				<?php if ( $product_slider_caption_5 ) { echo '<p class="flex-caption">'. $product_slider_caption_5 .'</p>'; } ?>
						    			</li>	
						    		<?php
						    			} 
						    		?>						  		
						    		</ul>
							</div>

							<style type="text/css">
								.flex-caption {
								  	width: 100%;
								  	padding: 2%;
								  	text-align: center;
								  	left: 0;
								  	bottom: 0;
								  	background: rgba(0,0,0,.5);
								  	color: #fff;
								  	text-shadow: 0 -1px 0 rgba(0,0,0,.3);
								  	font-size: 14px;
								  	line-height: 18px;
								}
							</style>

							<script type="text/javascript">
								(function($) {
									$(window).load(function() {
						  				$('.product-slider').flexslider({
						    				animation: "slide",
						    				controlNav: false,
						    				directionNav: false,
						    				slideshowSpeed: 3000, 
						  				});
									});
								})(jQuery);
							</script>

					<?php
						}

					?>

				</div>
				<!-- /product-slider-container -->

				<div class="separator"></div>
				
				<!-- description-boxes-container -->
				<div class="description-boxes-container">
					<div class="large-12 columns">
						<div class="row" data-equalizer>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php 
									$product_description_image_1 = Kirki::get_option( mc, product_description_image_1 );
									$product_description_textarea_1 = Kirki::get_option( mc, product_description_textarea_1 );
									if ( $product_description_image_1 ) {
										echo '<img src="'. $product_description_image_1 .'" class="product-description-image">';
									}
									if ( $product_description_textarea_1 ) {
										echo '<h6 class="product-description-textarea text-center">'. $product_description_textarea_1 .'</h6>';
									}	
								?>
							</div>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php 
									$product_description_image_2 = Kirki::get_option( mc, product_description_image_2 );
									$product_description_textarea_2 = Kirki::get_option( mc, product_description_textarea_2 );
									if ( $product_description_image_2 ) {
										echo '<img src="'. $product_description_image_2 .'" class="product-description-image">';
									}
									if ( $product_description_textarea_2 ) {
										echo '<h6 class="product-description-textarea text-center">'. $product_description_textarea_2 .'</h6>';
									}
								?>
							</div>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php 
									$product_description_image_3 = Kirki::get_option( mc, product_description_image_3);
									$product_description_textarea_3 = Kirki::get_option( mc, product_description_textarea_3 );
									if ( $product_description_image_3 ) {
										echo '<img src="'. $product_description_image_3 .'" class="product-description-image">';
									}
									if ( $product_description_textarea_3 ) {
										echo '<h6 class="product-description-textarea text-center">'. $product_description_textarea_3 .'</h6>';
									}
								?>
							</div>

						</div>
					</div>
				</div>
				<!-- /description-boxes-container -->

				<div class="separator"></div>

				<!-- product-details-container -->
				<div class="product-details-container">
					<div class="large-12 columns">
						
						<?php
							$product_details_image_1 = Kirki::get_option( mc, product_details_image_1 );
							$product_details_textarea_1 = Kirki::get_option( mc, product_details_textarea_1 );
							if ( $product_details_image_1 || $product_details_textarea_1 ) {
						?>
								<div class="row" data-equalizer id="product-details-one">
									<div class="large-6 columns panel" data-equalizer-watch id="product-image">
										<?php
											if ( $product_details_image_1 ) {
												echo '<img src="'. $product_details_image_1 .'" />';
											}
										?>
									</div>
									<div class="large-6 columns panel" data-equalizer-watch id="product-description">
										<?php
											if ( $product_details_textarea_1 ) {
												echo '<h6>'. $product_details_textarea_1 .'</h6>';
											}
										?>
									</div>
								</div>
						<?php
							}
						?>

						<?php
							$product_details_image_2 = Kirki::get_option( mc, product_details_image_2 );
							$product_details_textarea_2 = Kirki::get_option( mc, product_details_textarea_2 );
							if ( $product_details_image_2 || $product_details_textarea_2 ) {
						?>
								<div class="row" data-equalizer id="product-details-two">
									<div class="large-6 columns panel" data-equalizer-watch id="product-description">
										<?php
											if ( $product_details_textarea_2 ) {
												echo '<h6>'. $product_details_textarea_2 .'</h6>';
											}
										?>
									</div>
									<div class="large-6 columns panel" data-equalizer-watch id="product-image">
										<?php
											if ( $product_details_image_2 ) {
												echo '<img src="'. $product_details_image_2 .'" />';
											}
										?>
									</div>
								</div>
						<?php
							}
						?>

					</div>
				</div>
				<!-- /product-details-container -->

				<div class="separator"></div>

				<!-- team-showcase-container -->
				<div class="team-showcase-container">
					<div class="large-12 columns">
						<div class="row" data-equalizer>

							<?php
								
								// For team member 1
								$team_showcase_image_1 = Kirki::get_option( mc, team_showcase_image_1 );
								$team_showcase_text_1 = Kirki::get_option( mc, team_showcase_text_1 );

								// For team member 2
								$team_showcase_image_2 = Kirki::get_option( mc, team_showcase_image_2 );
								$team_showcase_text_2 = Kirki::get_option( mc, team_showcase_text_2 );

								// For team member 3
								$team_showcase_image_3 = Kirki::get_option( mc, team_showcase_image_3 );
								$team_showcase_text_3 = Kirki::get_option( mc, team_showcase_text_3 );

							?>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php
									if ( $team_showcase_image_1 ) { echo '<img src="'. $team_showcase_image_1 .'" />'; }
									if ( $team_showcase_text_1 ) { echo '<h6 class="team-showcase-member text-center">'. $team_showcase_text_1 .'</h6>'; }
								?>
							</div>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php
									if ( $team_showcase_image_2 ) { echo '<img src="'. $team_showcase_image_2 .'" />'; }
									if ( $team_showcase_text_2 ) { echo '<h6 class="team-showcase-member text-center">'. $team_showcase_text_2 .'</h6>'; }
								?>
							</div>

							<div class="large-4 columns panel" data-equalizer-watch>
								<?php
									if ( $team_showcase_image_3 ) { echo '<img src="'. $team_showcase_image_3 .'" />'; }
									if ( $team_showcase_text_3 ) { echo '<h6 class="team-showcase-member text-center">'. $team_showcase_text_3 .'</h6>'; }
								?>
							</div>

						</div>
					</div>
				</div>
				<!-- /team-showcase-container -->

				<div class="separator"></div>

			</div>
			
<?php get_footer(); ?>