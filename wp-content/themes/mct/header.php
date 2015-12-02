<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mct
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="header-main">

		<!-- Close button -->
		<!-- <a class="header-main__close-button">
			<svg class="header-main__close-button__icon">
				<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-close-cross" />
			</svg>
		</a> --><!-- // Close button -->

		<div class="header-main__nav left-nav">
			<button class="header-main__nav__hamburger-menu"></button>
			<div data-explore="menu" class="logo">
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_m.png" alt=""/></div>
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_c.png" alt=""/></div>
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_t.png" alt=""/></div>
			</div>
		</div>
	</header>

	<div class="site-nav">

		<div class="site-nav__top-bar">

			<div class="site-nav__top-bar__search">
				<form action="<?php echo get_site_url();?>/locations"><!--Relative url to the page that your map is on-->
					<input type="text" name="locationSearchTerms" placeholder="Search for location"><br>
					<!-- <input type="submit" value="Search Locations"><br> -->
				</form>
			</div>

			<!-- <p class="site-nav__top-bar__helper site-nav__top-bar__helper--show">Press enter</p> -->

			<div class="site-nav__top-bar__sign-up">
				<div class="site-nav__top-bar__sign-up__con">
					<div class="site-nav__top-bar__sign-up__con__icon">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-signup-to-emails" />
						</svg>
					</div>				
					<p>Sign up</p> 
				</div>
			</div>
		</div>

		<div class="outter-wrapper site-nav__outter-wrapper">

			<div class="main-wrapper">

				<nav class="site-nav__all-site-links">
					<div class="site-nav__cat">
						<div class="site-nav__cat__nav">
							<?php wp_nav_menu( 
								array( 
									'theme_location' => 'locations', 
									'menu_class' => 'site-nav__cat__nav__links__link' ) 
								); 
							?>	
						</div>
					</div>
					<div class="site-nav__main-site-links">
						<?php wp_nav_menu( 
							array( 
								'theme_location' => 'primary', 
								'menu_id' => 'primary-menu',
								'menu_class' => 'site-nav__main-site-links__link' ) 
							); 
						?>
					</div>
				</nav>

				<ul class="social-icons">
					<?php 
					$mct_facebook_link = get_field( 'mct_facebook_link', 'option' );
					$mct_twitter_link = get_field( 'mct_twitter_link', 'option' );
					$mct_instagram_link = get_field( 'mct_instagram_link', 'option' );	
					
					if ( $mct_facebook_link ) { ?>
					<a href="<?php echo $mct_facebook_link ?>" target="_blank" class="social-icons__icon">
						<svg class="social-icons__icon">
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-facebook" />
						</svg>
					</a>
					<?php } ?>

					<?php if ($mct_twitter_link){ ?>
					<a href="<?php echo $mct_facebook_link ?>" target="_blank" class="social-icons__icon">
						<svg class="social-icons__icon">
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-twitter" />
						</svg>
					</a>
					<?php } ?>
					<?php if ( $mct_instagram_link ) { ?>
						<a href="<?php echo $mct_instagram_link?>" target="_blank" class="social-icons__icon">
						<svg class="social-icons__icon">
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-social-white_circle-instagram" />
						</svg>
					</a>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<div id="content" class="site-content">
