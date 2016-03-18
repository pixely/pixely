<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package pixely4
 */
get_header(); ?>

	<section class="home-hero">
		<div class="cover"></div>
		<div class="container">
			<div class="inner">
				<hgroup>

					<h1>404: Page not found</h1>
					<h2>Sorry, it appears the page you were looking for could not be found.</h2>

					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
					</nav>

				</hgroup>
			</div>
		</div>
	</section>


<?php get_footer(); ?>

