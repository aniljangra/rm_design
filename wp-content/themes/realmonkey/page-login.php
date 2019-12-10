<?php
/**
 * The template for displaying singup pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage RM_design
 * @since 1.0.0
 */

get_header();
?>

	<div id="wrapper-main">
	  <div class="container">
		<div class="row">
		  <div class="col-12 account">
			<div class="head">
			  <h2 class="h2"> <span class="underline">Create An Account</span> </h2>
			</div>
			<div class="create-account border-down">
				<?php
				echo do_shortcode( '[wp_login_form]' );
				?>
			 </div>
        <div class="already-account">
          <div class="float-left mr-5">
            <h4 class="h4 mt-3"> Don't have an account ? </h4>
          </div>
          <div class="float-left"> <a href="<?php echo site_url().'/signup/'; ?>" title="Login" class="btn btn-started"> Get Started </a> </div>
          <div class="testimonial-abso">
            <section id="testimonial">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div id="testimonial-caro" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="test-common"> <span class="test-photo"> <img src="<?php echo get_template_directory_uri(); ?>/images/dp1.jpg"></span> <span class="quotes">"</span>
                            <p> RMdesigns made is possible for me to run my social media campaigns so frequently, speedy turn around and designers in contact with me all the time. </p>
                            <p class="name"> Alex Luy CEO & Founder Avexta </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


	<script>
	document.getElementById("user_login").setAttribute("placeholder", "Email");
	document.getElementById("user_pass").setAttribute("placeholder", "Password");
	</script>
<?php
get_footer();
