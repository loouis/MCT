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

			<p class="footer__copyright">© MY CREATIVE TOWN - 2015</p>
		</div>
	</div>
</footer>

<aside class="sign-up-lightbox">
	<div class="sign-up-lighbox__container">
		<iframe src="" width="100%" height="600" onload="javascript: if(typeof ewt != 'undefined' && ewt && ewt.setIFrameSrc) ewt.setIFrameSrc(this, 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/WebTest'); else if(this.src != 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/WebTest') this.src = 'http://www.pages03.net/purpleconsultancy-mct/mycreativetown/WebTest';" >
			<p>Your browser does not support iframes.</p>
		</iframe>
	</div>
</aside>

<?php wp_footer(); ?>
<script>
	$(document).ready(function(){
		$(".news-single-post__content").fitVids();
	});
</script>


<script>(function(d) {var config = {kitId: 'rrd4otj',scriptTimeout: 3000},h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);</script>

</body>
</html>
