<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RM_design
 * @since 1.0.0
 */

?>
			<section id="portfolio">
			  <div class="container">
				<div class="row">
				  <div class="col-12">
					<h3 class="h3">Portfolio</h3>
				  </div>
				  <div class="col">
					<div id="portfolio-carso" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
						  <?php 
							$args = array(
								'post_type'=> 'portfolio',
								'areas'    => 'painting',
								'order'    => 'ASC',
								); 
								
							$num = 1;
							$class = 'active';	             

							$the_query = new WP_Query( $args );
							if($the_query->have_posts() ) : while ( $the_query->have_posts() ) {
								$the_query->the_post(); 
								// echo get_the_title();
								$image = get_field('image'); 
								$size = 'full'; // (thumbnail, medium, large, full or custom size)
								if ($num > 1)
								{
									$class = '';
								}
								if( $image ) { 
									if($num%7 == 0 || $num%7 == 1)
									{ 
										?>
										<div class="carousel-item <?php echo $class; ?>">
											<ul class="portfolio-ul">
										<?php
									}
									
									?>
										<li> <a class="zoombox zgallery1" href="<?php echo esc_url($image['url']); ?>"> <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></li>
										<?php
									if($num%7 == 6)
									{
										?>
										</ul>
									</div>
										<?php
									} }
								$num++;
								if ($num == 7)
								{
									$num = 1;
								}
							}
							endif;
							?>	
							</ul>
							</div>						
						</div>
					  </div>
					  <ul class="carousel-indicators">
						<li data-target="#portfolio-carso" data-slide-to="0" class="active"></li>
						<li data-target="#portfolio-carso" data-slide-to="1"></li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			</section>
<script>
  $('a.zoombox').zoombox();
</script>