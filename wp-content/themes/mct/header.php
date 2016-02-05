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

<link rel="apple-touch-icon" sizes="57x57" href="<?php get_template_directory();?>/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php get_template_directory();?>/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php get_template_directory();?>/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php get_template_directory();?>/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php get_template_directory();?>/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php get_template_directory();?>/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php get_template_directory();?>/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php get_template_directory();?>/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php get_template_directory();?>/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php get_template_directory();?>/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php get_template_directory();?>/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php get_template_directory();?>/images/favicon-16x16.png">
<link rel="manifest" href="<?php get_template_directory();?>/images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php get_template_directory();?>/images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<!--[if lte IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link rel="stylesheet" href="http://www.mycreativetown.com/wp-content/themes/mct/ie-styles.css"><![endif]-->


<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TGCH6S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TGCH6S');</script>
<!-- End Google Tag Manager -->

<div id="page" class="hfeed site">

	<header class="header-main">

	<!-- <header class="header-main wow slideInLeft" data-wow-delay="0.6s"> -->

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

			<div class="site-nav__top-bar__sign-up sign-up-button">
				<div class="site-nav__top-bar__sign-up__con">
					<!-- <div class="site-nav__top-bar__sign-up__con__icon">
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-signup-to-emails" />
						</svg>
					</div>				
					<p>Sign up</p> --> 
				</div>
			</div>

		</div>

		<div class="outter-wrapper site-nav__outter-wrapper">

			<div class="main-wrapper">

				<nav class="site-nav__all-site-links">
					<div class="site-nav__cat">
						<div class="site-nav__cat__nav">
							<p class="site-nav__cat__nav__sub-title">Looking for…</p>
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
					<a href="<?php echo $mct_twitter_link ?>" target="_blank" class="social-icons__icon">
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
