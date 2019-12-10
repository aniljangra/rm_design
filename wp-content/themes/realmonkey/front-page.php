<?php
/**
 * The template for displaying all home posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header('front');
?>

	<section id="how-work">
	  <div class="container">
		<div class="row">
		  <div class="col-12">
			<h3 class="h3">How does it works ?</h3>
			<?php
			get_template_part( 'template-parts/content/content', 'work' );
			?>
		  </div>
		</div>
	  </div>
	</section>
	
	<?php
	get_template_part( 'template-parts/content/content', 'whyunique' );
	?>
	
	<?php
	get_template_part( 'template-parts/content/content', 'wecando' );
	?>
	<?php
	get_template_part( 'template-parts/content/content', 'portfolio' );
	?>
	
	<?php
	get_template_part( 'template-parts/content/content', 'pricing' );
	?>
	
	<?php
	get_template_part( 'template-parts/content/content', 'testimonial' );
	?>
	<?php
	get_template_part( 'template-parts/content/content', 'faq' );
	?>
	

<?php
get_footer();
