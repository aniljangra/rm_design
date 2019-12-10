<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
	<div id="wrapper-main">
  <div class="container">
    <div class="row">
      <div class="col-12 account">
        <div class="head">
          <h2 class="h2 float-left"> <span class="underline">Select Plan</span> </h2>
          
          <span class="step1to3"> Step 1 of 3  </span>
          
        </div>
        <div class="plans-main">
          <ul class="nav nav-tabs">
            <li>
              <h3 class="h3"> Standard Plan </h3> <input type="radio" class="plan_radio" name="standard" value="82" />
              <div data-toggle="tab" href="#standard-plan" class="btn-plan active" id="standard">$399/Month 
				<span class="check-box">  <i class="fa fa-check" aria-hidden="true"></i> </span> 
			  </div>
              <p class="best-plan"> Best plan for small small graphic design tasks like social media posts, emails etc. </p>
            </li>
            <li>
              <h3 class="h3"> Premium Plan </h3> <input type="radio" class="plan_radio" name="standard" value="87" />
              <div data-toggle="tab" href="#premium-plan" class="btn-plan" id="premium">$799/Month 
				<span class="check-box">  <i class="fa fa-check" aria-hidden="true"></i> </span> 
			  </div>
            </li>
          </ul>
          <div class="tab-content">
            <div id="standard-plan" class="tab-pane fade in active show">
              <div class="plan-body">
                <div class="float-left whatinclude">
                  <h3 class="heading-h3"> What's included </h3>
                  <ul class="include-ul">
                    <li> A dedicated professional designer</li>
                    <li> Unlimited design requests</li>
                    <li> Unlimited design revisions</li>
                    <li> Next business day delivery time*</li>
                    <li>Free stock photos</li>
                    <li> Source files</li>
                    <li> Message board communication</li>
                    <li> <b>10 days money back guarantee</b></li>
                    <li> <b>Cancel anytime</b></li>
                  </ul>
                </div>
                <div class="float-left canexpect">
                  <h3 class="heading-h3"> You can expect ONE of the following in each 1-2 business days </h3>
                  <ul class="canexpect-ul">
                    <li>One simple illustration </li>
                    <li>2-3 social media graphics or ads</li>
                    <li>1 logo redesign/update</li>
                    <li>2-3 business cards design proposals</li>
                    <li>1 poster, flyer, book cover</li>
                    <li>2-3 product background removal</li>
                    <li>5 typography tees or 3 graphic tees</li>
                    <li>
                  </ul>
                  <p class="best-plan"> When you will submit your request, our designer will give you exact time estimate based on the complexity or easyness of task. </p>
                </div>
              </div>
            </div>
            <div id="premium-plan" class="tab-pane fade">
             
             
             <div class="plan-body">
                <div class="float-left whatinclude">
                  <h3 class="heading-h3"> What's included </h3>
                  <ul class="include-ul">
     
   
   <li> A dedicated professional designer </li>
   <li> Unlimited design requests </li>
    <li>Unlimited design revisions </li>
    <li>Free stock photos </li>
   <li> Source files </li>
   <li> <b>Cancel anytime</b> </li>
   <li> <b>Real time collaboration on Slack</b> </li>
   <li> UI designs (Web, Mobile Dashboard) </li>
   <li> Landing page designs </li>
   <li> Same day delivery* </li>
   <li> <b>21 days money back guarantee</b> </li>
    <li><b>Priority Supoort</b> </li>
   
   
   
   
   </ul>
                </div>
                <div class="float-left canexpect">
                  <h3 class="heading-h3"> You can expect ONE of the following in each 1-2 business days </h3>
                  <ul class="canexpect-ul">
      
               <li> 1 simple Infographic </li><li>
Initial draft for Landing page </li><li>
2 screens UI design for mobile app</li><li>
1 website page design</li><li>
1 concept for dashborad </li><li>
One simple illustration</li><li>
2-3 social media graphics or ads</li><li>
1 logo redesign/update</li><li>
2-3 business cards design proposals</li><li>
1 poster, flyer, book cover</li><li>
2-3 product background removal</li><li>
5 typography tees or 3 graphic tees</li>
                
                
                
                  </ul>
                  <p class="best-plan"> When you will submit your request, our designer will give you exact time estimate based on the complexity or easyness of task. </p>
                </div>
              </div>
             
             
            </div>
          </div>
        </div>
        <div class="continue-checkout">
          <div class="float-left mr-4 chk-lt">
            <h3 class="heading-h3"> Total amount </h3>
            <h4 class="h4 float-left  mr-4 "> $399 </h4>
          </div>
          <div class="float-left chk-rt"> <a href="javascript:void(0)" class="btn btn-dark float-left" id="Checkout"> Continue to Checkout </a>
            <p class="pehra-contact float-left"> We are always on your side, In any trouble just email to <a href="#" title=""><b>support@rmdesigns.com</b></a>, we will contact back within 1 business day </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
	$('input[name=standard]').change(function(){
		var value = $( 'input[name=standard]:checked' ).val();
		 // alert(value);
		if (value == 82)
		{   //alert('standard');
			$( "#standard" ).addClass( "active" );
			$( "#premium" ).removeClass( "active" );
			
			$( "#standard-plan" ).addClass( "active" );
			$( "#standard-plan" ).addClass( "in" );
			$( "#standard-plan" ).addClass( "show" );
			
			$( "#premium-plan" ).removeClass( "active" );
			$( "#premium-plan" ).removeClass( "in" );
			$( "#premium-plan" ).removeClass( "show" );
		} else { //alert('premium');
			$( "#premium" ).addClass( "active" );
			$( "#standard" ).removeClass( "active" );
			
			$( "#standard-plan" ).removeClass( "active" );
			$( "#standard-plan" ).removeClass( "in" );
			$( "#standard-plan" ).removeClass( "show" );
			
			$( "#premium-plan" ).addClass( "active" );
			$( "#premium-plan" ).addClass( "in" );
			$( "#premium-plan" ).addClass( "show" );
		}
		var my_ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		$.ajax({
			url: my_ajaxurl,
			data: {
				action     : 'add_product_cart', // load function hooked to: "wp_ajax_*" action hook
				productid : value,           // PHP: $_POST['first_name']
			},
		});
	});
	
	 
	 $("#Checkout").click(function() {
        //Do stuff when clicked
        $( "#place_order" ).trigger( "click" );
        
      /*  var value = $( 'input[name=standard]:checked' ).val();
        if (value === undefined || value === null) {
            value = 82;
        }
        var my_ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		$.ajax({
			url: my_ajaxurl,
			data: {
				action     : 'create_vip_order', // load function hooked to: "wp_ajax_*" action hook
				productid : value,           // PHP: $_POST['first_name']
			},
			success: function(data){
				// alert(data);
				window.location.replace(data);
			}
		}); */
    });
	
</script>
<form style="display:none;" name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col2-set" id="customer_details">
			<div class="col-1">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col-2">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	<h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
