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
	<div class="main-wrapper">
		<div class="footer__join-the-community">
			<h3 class="footer__join-the-community__title">Join the community and get the lastest to your inbox</h3>
		</div>

		<ul class="social-icons">

			<a href="http://" target="_blank" class="social-icons__icon">
				<img src="<?php echo get_template_directory_uri();?>/images/social-icons--twitter.png" alt=""/>
			</a>

			<a href="http://" target="_blank" class="social-icons__icon">
				<img src="<?php echo get_template_directory_uri();?>/images/social-icons--facebook.png" alt=""/>
			</a>

			<a href="http://" target="_blank" class="social-icons__icon">
				<img src="<?php echo get_template_directory_uri();?>/images/social-icons--instagram.png" alt=""/>
			</a>
		</ul>


		<div class="footer__list-your-company">
			<article class="footer__list-your-company__text">
				<h5 class="footer__list-your-company__text__title">Want to list your company and  reach over 2,000 creative active users?</h5>
				<div class="footer__list-your-company__text__button">Contact</div>
			</article>
		</div>

		<div class="footer__partnership">
			<p class="footer__partnership__title">In partnership</p>
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
</footer>

<?php wp_footer(); ?>

</body>
</html>
