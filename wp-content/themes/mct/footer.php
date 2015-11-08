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


			<!-- <div class="footer__list-your-company">
				<article class="footer__list-your-company__text">
					<h5 class="footer__list-your-company__text__title">Want to list your company and  reach over 2,000 creative active users?</h5>
					<div class="footer__list-your-company__text__button">Contact</div>
				</article>
			</div> -->

			<div class="footer__partnership">
				<!-- <p class="footer__partnership__title">In partnership</p> -->
				<div class="footer__partnership__logos">
					<div class="footer__partnership__logos__logo footer__partnership__logos__logo--mct">
						<img src="<?php echo get_template_directory_uri();?>/images/mct-logo--color.png" alt=""/>
					</div>
					<div class="footer__partnership__logos__logo footer__partnership__logos__logo--purple">
						<img src="<?php echo get_template_directory_uri();?>/images/purple-logo--white.png" alt=""/>
					</div>
				</div>
			</div>

			<p class="footer__copyright">© My creative town - 2015</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69419761-1', 'auto');
  ga('send', 'pageview');

</script>

<script>(function(d) {var config = {kitId: 'rrd4otj',scriptTimeout: 3000},h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);</script>

</body>
</html>
