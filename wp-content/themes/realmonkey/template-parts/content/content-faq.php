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
			<section id="faq-main">
			  <div class="container">
				<div class="row">
				  <div class="col-12">
					<h3 class="h3">FAQs</h3>
				  </div>
				  <div class="col">
					<div id="faq-accordion">
						
						<?php 
						$args = array(
							'post_type'=> 'faq',
							'areas'    => 'painting',
							'order'    => 'ASC',
							'posts_per_page' => 16
							); 
							
						$num = 1;	
						$class = 'show';             

						$the_query = new WP_Query( $args );
						if($the_query->have_posts() ) : while ( $the_query->have_posts() ) {
						$the_query->the_post(); 
						if($num > 1)
						{
							$class = '';
						}
						?>
						
					  <div class="card">
						<div class="card-header"> <a class="<?php echo $class; ?> card-link" data-toggle="collapse" href="#faq-accordion<?php echo $num; ?>"> <?php echo get_the_title(); ?> <span class="arow-right"> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a> </div>
						<div id="faq-accordion<?php echo $num; ?>" class="collapse <?php echo $class; ?>" data-parent="#faq-accordion">
						  <div class="card-body">
							  <?php echo get_the_content(); ?>
							 </div>
						</div>
					  </div>
					  <?php
					  $num++;
						}
						endif;
					  ?>
					  
					
					  </div> 
					</div>
				  </div>
				</div>
			  </div>
			</section>
