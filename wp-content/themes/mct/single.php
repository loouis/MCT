<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mct
 */

get_header(); ?>

	<section class="news-single-hero section-hero">
		<div class="news-single-hero__slide">
			<div class="main-wrapper">
				<div class="news-all-hero__slide__text">
					<p class="news-single-hero__slide__text__news-cat">Design</p>
					<h3 class="news-single-hero__slide__text__title">5 strategies to improve your personal time keeping</h3>
				</div>
			</div>
		</div>
	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

	


	<section class="news-single__more-news">
  <div class="main-wrapper">
    <h4 class="news-single__more-news__title">Other news you may be interested in…</h4>
    <ul class="news-single__more-news__items"><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a><a href="" class="latest-news__items__item news-cell">
        <div class="news-cell__image">
          <article class="news-cell__text">
            <p class="news-cell__text__news-type">Purple blog</p>
            <h4 class="news-cell__text__news-title">5 STRATEGIES TO IMPROVE YOUR PERSONAL …</h4>
          </article>
          <p class="news-cell__text__excerpt"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam quod pariatur amet aliquam odio quos optio ipsam iusto numquam corporis?</p><img src="assets/images/blog-preview.png" alt=""/>
        </div></a></ul>
  </div>
</section>


<?php get_footer(); ?>
