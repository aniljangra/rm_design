<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage RM_design
 * @since 1.0.0
 */

?>

<footer id="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="footer-header">
          <h1> <img src="<?php echo get_template_directory_uri(); ?>/images/footerRM.svg"></h1>
          <?php
			wp_nav_menu(array(
				'container' => false, // Removes the container, leaving just the ul element
				'menu_class' => 'footer-nav-ul',
				'add_li_class'  => 'nav-item'
			));
		?>
          
        </div>
        <div class="copyrht">
          <p> Copyright @RMdesigns 2020 </p>
          <ul class="policy">
            <li> <a href="#" title="Privacy Policy"> Privacy Policy </a> </li>
            <li> <a href="#" title="Terms & Conditions"> Terms & Conditions </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script>>
  $('.razorpay-checkout-frame').contents().find('.pad').hide();
  </script>
</footer>
<?php wp_footer(); ?>
</body>
</html>
