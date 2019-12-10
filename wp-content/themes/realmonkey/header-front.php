<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Real_Monkey
 * @since 1.0.0
 */
 global $current_user;
 global $wp;
$current_slug = add_query_arg( array(), $wp->request );

if ($current_slug == 'checkout')
{
    if ( !is_user_logged_in() ) {
    	$url = site_url().'/signup/';
    	wp_redirect( $url ); 
    }


}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>RM designs</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dev.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/zoombox.css">
    
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/custom.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/popper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/zoombox.js"></script>
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header id="main-header" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">
		     <div class="container">
				<div class="row">
				  <div class="col">
					<nav class="navbar p-0 navbar-expand-lg bg-ligh navbar-light"> <a class="navbar-brand p-0" href="<?php echo site_url(); ?>" title="RM designs"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="RM designs" title="RM designs"></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
					  <div class="collapse navbar-collapse" id="collapsibleNavbar">
						  	<?php
								wp_nav_menu(array(
									'container' => false, // Removes the container, leaving just the ul element
									'menu_class' => 'navbar-nav',
									'add_li_class'  => 'nav-item'
								));
							?>
					<?php if ( !is_user_logged_in() ) { ?>		
					<div class="signup"> <a href="<?php echo site_url(); ?>/index.php/signup" class="btn btn-signup">Signup</a> </div>
					<?php } else { ?>
				    <div class="pf-main">
                       <a href="<?php echo site_url(); ?>/membership-account/" class="account-name"> <?php echo $current_user->user_login ; ?> 
                       <span class="account-photo"> <img src="<?php echo get_template_directory_uri(); ?>/images/dp1.jpg" alt="" title=""></span> </a>
                       <a href="<?php echo site_url(); ?>/logout/" class="account-name"> logout</a>
                    </div>
                    <?php } ?>
					  </div>
					</nav>
					<?php
					if ( is_front_page() ) {
	
					?>
					<div class="header-banner">
					  <h2 class="h2"> Get <span class="underline">Unlimited</span> <br>
						designs & revisions</h2>
					  <p class="pehra1"> Get your personal designer, No contracts, Cancel anytime.
						Stop searching for freelance graphic, web & mobile designers, </p>
					  <span class="leaves-2"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-2.svg"></span> </div>
					<div class="start-trial">
					  <div class="start-trial-form">
						<div class="float-left pricing"> <span class="pricing-img"> <img src="<?php echo get_template_directory_uri(); ?>/images/leaves-1.svg"></span> <a href="select-plan.html" class="heading3">Pricing</a> </div>
						<div class=" float-left trial-input">
							<?php
							echo do_shortcode( '[email-subscribers-form id="1"]' );
							?>
						</div>
						<div class=" float-left">
						  <p class="mesg-lastweek"> 18 New startups and companies signed up last week </p>
						</div>
					  </div>
					  <div class="money-back">
						<p> Didn't like the designs? No Worries, <strong>10 days, 100% money back guarntee </strong> </p>
					  </div>
					  <?php 
						}
						?>
					</div>
				  </div>
				</div>
			  </div>	
		</header><!-- #masthead -->
