<?php
/**
 * Checkout Order Receipt Template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/order-receipt.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
        <div class="head">
          <h2 class="h2 float-left"> <span class="underline">Payment </span> </h2>
          <span class="step1to3"> Step 2 of 3 </span> </div>
        <div class="payment-step">
          <div class="payment-stepLeft">
            <div class="continue-checkout">
              <div class="float-left mr-4 chk-lt">
                <h3 class="heading-h3"> Total amount </h3>
                <h4 class="h4 float-left  mr-4 "> <?php echo wp_kses_post( $order->get_formatted_order_total() ); ?> </h4>
              </div>
            </div>
            <div class="create-account">
             <?php do_action( 'woocommerce_receipt_' . $order->get_payment_method(), $order->get_id() ); ?>
            </div>
          </div>
          <div class="payment-steRight">
            <div class="satisfy-100">
              <h4> 100% satisfaction </h4>
              <span class="sheild"> <img src="<?php echo get_template_directory_uri(); ?>/images/shield.svg"></span>
              <h5> <span>14 days </span> GUARANTEE </h5>
            </div>

<ul class="order_details" style="display:none;">
	<li class="order">
		<?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
		<strong><?php echo esc_html( $order->get_order_number() ); ?></strong>
	</li>
	<li class="date">
		<?php esc_html_e( 'Date:', 'woocommerce' ); ?>
		<strong><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></strong>
	</li>
	<li class="total">
		<?php esc_html_e( 'Total:', 'woocommerce' ); ?>
		<strong><?php echo wp_kses_post( $order->get_formatted_order_total() ); ?></strong>
	</li>
	<?php if ( $order->get_payment_method_title() ) : ?>
	<li class="method">
		<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?>
		<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
	</li>
	<?php endif; ?>
</ul> 



<div class="clear"></div>
