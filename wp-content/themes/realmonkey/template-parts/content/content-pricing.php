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
			<section id="pricing">
			  <div class="container">
				<div class="row">
				  <div class="col-12">
					<h3 class="h3">Pricing</h3>
					<div class="pricing-main">
					  <div class="pricing-1 float-left">
						<div class="head-pricing">
						  <h4> $399 </h4>
						  <h5> Standard Plan </h5>
						</div>
						<p> A dedicated professional designer<br>
						  Unlimited design requests<br>
						  Unlimited design revisions<br>
						  Next business day delivery time*<br>
						  Free stock photos<br>
						  Source files<br>
						  Message board communication<br>
						  10 days money back guarantee<br>
						  Cancel anytime </p>
						<a href="javascript:void(0)" title="Start your trial" id="standard" class="btn-dark"> Start your trial</a> </div>
					  <div class="pricing-2 float-left"> <span class="leaves-10"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-10.svg"></span> <span class="leaves-11"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-11.svg"></span>
						<div class="head-pricing">
						  <h4> $799 </h4>
						  <h5> Premium Plan </h5>
						</div>
						<p> A dedicated professional designer<br>
						  Unlimited design requests<br>
						  Unlimited design revisions<br>
						  Free stock photos<br>
						  Source files<br>
						  Cancel anytime<br>
						  <span class="gold"> Real time collaboration on Slack<br>
						  UI designs (Web, Mobile Dashboard)<br>
						  Landing page designs<br>
						  Same day delivery*<br>
						  21 days money back guarantee<br>
						  Priority Supoort </span> </p>
						<a href="javascript:void(0)" title="Start your trial" id="premium" class="btn-light"> Start your trial</a> </div>
					</div>
				  </div>
				</div>
			  </div>
			</section>
			<script>
	$('#premium').click(function(){
		var value = 87;
		 // alert(value);
	
		var my_ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		$.ajax({
			url: my_ajaxurl,
			data: {
				action     : 'add_product_cart', // load function hooked to: "wp_ajax_*" action hook
				productid : value,           // PHP: $_POST['first_name']
			},
			success: function(data){
				var data = '<?php echo site_url(); ?>'+'/checkout/';
				window.location.replace(data);
			}
		});
	});
	
		$('#standard').click(function(){
		var value = 82;
		 // alert(value);
	
		var my_ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		$.ajax({
			url: my_ajaxurl,
			data: {
				action     : 'add_product_cart', // load function hooked to: "wp_ajax_*" action hook
				productid : value,           // PHP: $_POST['first_name']
			},
			success: function(data){
				var data = '<?php echo site_url(); ?>'+'/checkout/';
				window.location.replace(data);
			}
		});
	});
	</script>
