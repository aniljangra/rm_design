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
			<div class="work-6">
				<?php 

				$args = array(
					'post_type'=> 'workes',
					'areas'    => 'painting',
					'order'    => 'ASC',
					'posts_per_page' => 6
					); 
					
				$num = 1;	             

				$the_query = new WP_Query( $args );
				if($the_query->have_posts() ) : while ( $the_query->have_posts() ) {
				$the_query->the_post(); 
				?>				
				  <div class="work-6-common"> 
					  <?php 
					  if($num == 1){ ?>
						  <span class="leaves-3"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-3.svg"></span>
					  <?php 
					  }
					  ?>
					  <?php 
					  if($num == 6){ ?>
						  <span class="leaves-4"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-4.svg"></span>
					  <?php 
					  }
					  ?>				  
					  
					  
					  <span class="number"><?php echo $num; ?>.</span>
					<h4 class="h4"> <?php echo get_the_title(); ?> </h4>
					<p> <?php echo get_the_content(); ?> </p>
					
					 <?php 
					  if($num == 6){ ?>
						   </div>
					  <?php 
					  }
					  ?>
					
					
				  </div>
				<?php
				$num++;
				}
				endif;
				?>
