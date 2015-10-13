<?php
/**
 * Template Name: Front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mct
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Video hero -->
			<section class="home-hero">
				<div class="home-hero__grad-overlay"></div>
				<div class="main-wrapper">
					<div class="home-hero__text">
						<h1 class="home-hero__text__title">My<br/>Creative<br/> Town</h1>
					</div>
				</div>

				<video autoplay="autoplay" loop="loop" poster="polina.jpg" id="bgvid" class="home-hero__video">
					<source src="<?php echo get_template_directory_uri();?>/video/home-hero-video.webm" type="video/webm"/>
					<source src="<?php echo get_template_directory_uri();?>/video/home-hero-video.mp4" type="video/mp4"/>
				</video>
			</section><!-- #video hero -->

			<section class="image-location-filter ilf">
				<div class="main-wrapper">
					<div class="ilf__container">

						<!-- Top conatiner -->
						<div class="ilf__container--top">
							<div class="ilf__container__split ilf__cells">
								<div class="ilf__cells__cell ilf__cells__cell--large-square">
									<article class="ilf__cells__cell__text cd-intro">
										<h1 class="ilf__cells__cell__text__title cd-headline letters rotate-2"><span class="ilf__cells__cell__text__title__sub-title">Fancy</span><span class="cd-words-wrapper"><b class="is-visible">pizza?</b><b>Sushi?</b><b>Steak?</b></span></h1>
									</article><img src="<?php echo get_template_directory_uri();?>/images/ilf-images--large-text-block.jpg" alt=""/>
								</div>
							</div>
							<div class="ilf__container__split ilf__cells">
								<a href="http://">
									<div class="ilf__cells__cell ilf__cells__cell--long-thin">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-restaurant" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Bars</div>
											</div>
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--bar.jpg" alt="" class="ilf__cells__cell__fig__image"/>
										</figure>
									</div>
								</a>

								<a href="http://">
									<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-restaurant" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Restaurants</div>
											</div>
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--restaurants.jpg" alt="" class="ilf__cells__cell__fig__image"/>
										</figure>
									</div>
								</a>

								<a href="http://">
									<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure ilf__cells__cell--normal-sqaure-right">
										<figure class="ilf__cells__cell__fig">
											<div class="ilf__cells__cell__fig__text-con">
												<div class="ilf__cells__cell__fig__text-con__image">
													<svg class="ilf__cells__cell__fig__text-con__image__icon">
														<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-entertainment" />
													</svg>
												</div>
												<div class="ilf__cells__cell__fig__text-con__title">Entertainment</div>
											</div>
											<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--entertainment.jpg" alt="" class="ilf__cells__cell__fig__image"/>
										</figure>
									</div>
								</a>
							</div>
						</div><!-- #Top conatiner -->

						<!-- Bottom conatiner -->
						<div class="ilf__container--bottom">
							<a href="http://">
								<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-restaurant" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Night clubs</div>
										</div>
										<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--night-clubs.jpg" alt="" class="ilf__cells__cell__fig__image"/>
									</figure>
								</div>
							</a>

							<a href="http://">
								<div class="ilf__cells__cell ilf__cells__cell--long-thin">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-entertainment" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Cafes</div>
										</div>
										<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--cafes.jpg" alt="" class="ilf__cells__cell__fig__image"/>
									</figure>
								</div>
							</a>

							<a href="http://">
								<div class="ilf__cells__cell ilf__cells__cell--normal-sqaure ilf__cells__cell--normal-sqaure-right">
									<figure class="ilf__cells__cell__fig">
										<div class="ilf__cells__cell__fig__text-con">
											<div class="ilf__cells__cell__fig__text-con__image">
												<svg class="ilf__cells__cell__fig__text-con__image__icon">
													<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-restaurant" />
												</svg>
											</div>
											<div class="ilf__cells__cell__fig__text-con__title">Hotels</div>
										</div>
										<img src="<?php echo get_template_directory_uri();?>/images/ilf-images--hotels.jpg" alt="" class="ilf__cells__cell__fig__image"/>
									</figure>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section><!-- #Location filter -->

			<!-- Trending locations -->
			<section class="trending-locations">
				<hgroup class="off-center-title">
					<h3 class="trending-locations__title">Trending locations</h3>
				</hgroup>

				<div class="trending-locations__slider-container trend-loc">
					<ul id="trend-loc" class="trend-loc__slider">

						<li class="trend-loc__slider__slide">
							<div>
								<div class="trend-loc__slider__slide__text">
									<p class="trend-loc__slider__slide__text__location">Covent garden</p>
									<h3 class="trend-loc__slider__slide__text__title">Charlotte street hotel</h3>
									<p class="trend-loc__slider__slide__text__para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam.</p>
								</div>
								<img src="<?php echo get_template_directory_uri();?>/images/trending-locations-slide-image.jpg" alt=""/>
							</div>
						</li>

						<li class="trend-loc__slider__slide">
							<div>
								<div class="trend-loc__slider__slide__text">
									<p class="trend-loc__slider__slide__text__location">Covent garden</p>
									<h3 class="trend-loc__slider__slide__text__title">Purple</h3>
									<p class="trend-loc__slider__slide__text__para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam.</p>
								</div>
								<img src="<?php echo get_template_directory_uri();?>/images/trending-locations-slide-image.jpg" alt=""/>
							</div>
						</li>

						<li class="trend-loc__slider__slide">
							<div>
								<div class="trend-loc__slider__slide__text">
									<p class="trend-loc__slider__slide__text__location">Covent garden</p>
									<h3 class="trend-loc__slider__slide__text__title">Charlotte street hotel</h3>
									<p class="trend-loc__slider__slide__text__para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam. et dolore magna aliqua. Ut enim ad minim veniam.</p>
								</div>
								<img src="<?php echo get_template_directory_uri();?>/images/trending-locations-slide-image.jpg" alt=""/>
							</div>
						</li>
					</ul>
				</div>
			</section><!-- #Trending locations -->


			<!-- Latest news -->
			<section class="latest-news">

				<hgroup class="off-center-title">
					<svg class="off-center-title__icon">
						<use xlink:href="<?php echo get_template_directory_uri();?>/images/svg-defs.svg#icon-latest-news" />
					</svg>
					<h3 class="latest-news__title">Latest news</h3>
				</hgroup>

				<?php $purple_jobs = new WP_Query(array( 'posts_per_page' => 3,)); ?>

				<div class="main-wrapper">
					<ul class="latest-news__items">

						<?php while($purple_jobs->have_posts() ) : $purple_jobs->the_post();?>

						<a href="<?the_permalink()?>" class="latest-news__items__item news-cell">
							<div class="news-cell__image">
								<article class="news-cell__text">
									<h4 class="news-cell__text__news-title"><?php the_title(); ?></h4>
								</article>
								<span class="news-cell__text__excerpt"><?php the_excerpt(); ?></span>
								<?php the_post_thumbnail('retina-smallest');?>
							</div>
						</a>

						<?php endwhile; ?>

					</ul>

				<?php wp_reset_postdata(); ?>

				</div>
			</section><!-- #Latest news -->

			<!-- Jobs board -->
			<section class="home-jobs-board hjb">
				<hgroup class="off-center-title">
					<h4 class="hjb__title">Jobs Board</h4>
					<a href="http://www.purple-consultancy.com" target="_blank" class="hjb__powered-by">
						<img src="<?php echo get_template_directory_uri();?>/images/powered-by-purple-lock-up.png" alt=""/>
					</a>
					<nav class="hjb__purple-links">
						<ul>
							<a href=""><li class="hjb__purple-links__link hjb__purple-links__link--active">View all</li></a>
							<a href=""><li class="hjb__purple-links__link">Studio</li></a>
							<a href=""><li class="hjb__purple-links__link">Planning & Strategy</li></a>
							<a href=""><li class="hjb__purple-links__link">Tech & dev</li></a>
							<a href=""><li class="hjb__purple-links__link">Client services</li></a>
							<a href=""><li class="hjb__purple-links__link">Creative services</li></a>
							<a href=""><li class="hjb__purple-links__link">Production</li></a>
							<a href=""><li class="hjb__purple-links__link">Creative & Design</li></a>
						</ul>
					</nav>
				</hgroup>
				<div class="main-wrapper">
					<ul class="hjb__jobs">

					<?php $purple_jobs = new WP_Query(array( 'post_type' => 'purple_job')); ?>
						<?php while($purple_jobs->have_posts() ) : $purple_jobs->the_post();?>

						<article class="hjb__jobs__cell">
							<p class="hjb__jobs__cell__money p-small-title-highlight"><?php the_field('purple_jobs_money')?></p>
							<h5 class="hjb__jobs__cell__job-role"><?php the_title();?></h5>
							<p class="hjb__jobs__cell__desc"><?php the_content();?></p>
						</article>

					<?php endwhile;?>

					</ul>
				</div>
			</section><!-- #Jobs board -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
