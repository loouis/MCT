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
		<nav class="site-nav__all-site-links">
			<div class="site-nav__cat">
				<div class="site-nav__cat__nav">
					<div class="site-nav__cat__nav__links site-nav__cat__nav__links--left"><a href="http://" class="site-nav__cat__nav__links__link">Restaurants</a><a href="http://" class="site-nav__cat__nav__links__link">Bars</a><a href="http://" class="site-nav__cat__nav__links__link">Night clubs</a></div>
					<div class="site-nav__cat__nav__links site-nav__cat__nav__links--right"><a href="http://" class="site-nav__cat__nav__links__link">Cafes</a><a href="http://" class="site-nav__cat__nav__links__link">Entertainment</a><a href="http://" class="site-nav__cat__nav__links__link">Hotels</a></div>
				</div>
			</div>
			<div class="site-nav__main-site-links"><a href="./" class="site-nav__main-site-links__link">Home</a><a href="http://www.purple-consultancy.com/jobs/" class="site-nav__main-site-links__link">Jobs</a><a href="./news-all.html" class="site-nav__main-site-links__link">Blog</a><a href="./about-us.html" class="site-nav__main-site-links__link">About us</a><a href="http://" class="site-nav__main-site-links__link">Contact</a></div>
		</nav>

		<ul class="social-icons"><a href="http://" target="_blank" class="social-icons__icon"><img src="assets/images/social-icons--twitter.png" alt=""/></a><a href="http://" target="_blank" class="social-icons__icon"><img src="assets/images/social-icons--facebook.png" alt=""/></a><a href="http://" target="_blank" class="social-icons__icon"><img src="assets/images/social-icons--instagram.png" alt=""/></a></ul>
	</div>

	<div id="content" class="site-content">
