<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mct
 */

?>

</div><!-- #content -->

<footer class="footer">
	<div class="outter-wrapper">
		<div class="main-wrapper">

			<img src="<?php echo get_template_directory_uri();?>/images/mct-logo--white.png" class="footer__mct-logo" alt="My Creative Town - MCT logo"/>

			<div class="footer__join-the-community">
				<h3 class="footer__join-the-community__title">Join the community and get the latest to your inbox</h3>
			</div>

			<div class="footer__sign-up-btn sign-up-button">
				<p class="footer__sign-up-btn__text">Sign up to our mailing list</p>
			</div>

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


			<!-- <div class="footer__list-your-company">
				<article class="footer__list-your-company__text">
					<h5 class="footer__list-your-company__text__title">Want to list your company and  reach over 2,000 creative active users?</h5>
					<div class="footer__list-your-company__text__button">Contact</div>
				</article>
			</div> -->

			<p class="footer__copyright">© MY CREATIVE TOWN - <?php echo date(Y);?></p>
		</div>
	</div>
</footer>

<aside class="sign-up-lightbox">
	<div class="sign-up-lightbox__container">

		<span class="sign-up-lightbox__container__close-button">
			<i class="sign-up-lightbox__container__close-button__icon">
				<svg><use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-close" /></svg>
			</i>
		</span>

		<header class="sign-up-lightbox__container__header">
			<div class="sign-up-lightbox__container__header__title-group">
				<h3 class="sign-up-lightbox__container__header__title-group__title">SIGN UP</h3>
				<p class="sign-up-lightbox__container__header__title-group__text">Receive the latest to your inbox </p>
			</div>
		</header>

		<div class="sign-up-lightbox__container__form">
			<iframe src="" width="100%" height="400" onload="javascript: if(typeof ewt != 'undefined' && ewt && ewt.setIFrameSrc) ewt.setIFrameSrc(this, 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/MCTwebform/'); else if(this.src != 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/MCTwebform/') this.src = 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/MCTwebform/';" ><p>Your browser does not support iframes.</p></iframe>
		</div>

		
	</div>
</aside>

<?php wp_footer(); ?>
<script>
	$(document).ready(function(){
		$(".news-single-post__content").fitVids();
	});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69419761-1', 'auto');
  ga('send', 'pageview');

</script>

<script>(function(d) {var config = {kitId: 'rrd4otj',scriptTimeout: 3000},h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);</script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 943622414;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/943622414/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>


</body>
</html>
