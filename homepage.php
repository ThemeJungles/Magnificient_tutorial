<?php
/**
Template Name: Custom Homepage
 **/
?>

<?php get_header(); ?>

			<!-- Row for main content area -->
			<div class="small-12 large-12 columns" id="page-content" role="main">

				<?php
					
					// Product Slider

					// Getting  the images
					$product_slider_image_1 = Kirki::get_option( mc, product_slider_image_1 );
					$product_slider_image_2 = Kirki::get_option( mc, product_slider_image_2 );
					$product_slider_image_3 = Kirki::get_option( mc, product_slider_image_3 );
					$product_slider_image_4 = Kirki::get_option( mc, product_slider_image_4 );
					$product_slider_image_5 = Kirki::get_option( mc, product_slider_image_5 );

					// Check if any image exists
					if ( $product_slider_image_1 || $product_slider_image_2 || $product_slider_image_3 || $product_slider_image_4 || $product_slider_image_5 ) {

						// Code for flexslider
				?>
						
						<div class="product-slider">
					  		<ul class="slides">
					    		<?php if ( $product_slider_image_1 ) { echo '<li><img src="'. $product_slider_image_1 .'" class="product-slider-image-1"></li>'; } ?>
					   			<?php if ( $product_slider_image_2 ) { echo '<li><img src="'. $product_slider_image_2 .'" class="product-slider-image-2"></li>'; } ?>
					   			<?php if ( $product_slider_image_3 ) { echo '<li><img src="'. $product_slider_image_3 .'" class="product-slider-image-3"></li>'; } ?>
					   			<?php if ( $product_slider_image_4 ) { echo '<li><img src="'. $product_slider_image_4 .'" class="product-slider-image-4"></li>'; } ?>
					   			<?php if ( $product_slider_image_5 ) { echo '<li><img src="'. $product_slider_image_5 .'" class="product-slider-image-5"></li>'; } ?>
					  		</ul>
						</div>

						<script type="text/javascript">
							(function($) {
								$(window).load(function() {
					  				$('.product-slider').flexslider({
					    				animation: "slide",
					    				controlNav: true,
					    				directionNav: false
					  				});
								});
							})(jQuery);
						</script>

				<?php
					}

				?>

			</div>
			<hr>

<?php get_footer(); ?>