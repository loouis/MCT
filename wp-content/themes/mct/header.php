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
		<div class="header-main__nav left-nav">
			<button class="header-main__nav__hamburger-menu"></button>
			<div data-explore="explore" class="logo">
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_m.png" alt=""/></div>
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_c.png" alt=""/></div>
				<div class="logo__letter"><img src="<?php echo get_template_directory_uri();?>/images/mct-logo--let_t.png" alt=""/></div>
			</div>
		</div>
	</header>

	<div class="site-nav">
		<div class="outter-wrapper">
			<div class="main-wrapper">

				<input type="text"  placeholder="Search"/>

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

				<!-- <ul class="social-icons">
					<a href="http://" target="_blank" class="social-icons__icon">
						<img src="assets/images/social-icons--twitter.png" alt=""/>
					</a>
					<a href="http://" target="_blank" class="social-icons__icon">
						<img src="assets/images/social-icons--facebook.png" alt=""/>
					</a>
					<a href="http://" target="_blank" class="social-icons__icon">
						<img src="assets/images/social-icons--instagram.png" alt=""/>
					</a>
				</ul> -->
			</div>
		</div>
	</div>

	<div id="content" class="site-content">
