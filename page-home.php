<?php
/**
 * The template for the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Home
 * @package pixely4
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	<section class="home-hero">
		<div class="cover"></div>
		<div class="container">
			<div class="inner">
				<hgroup>

					<?php the_content()?>

					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
					</nav>

				</hgroup>
			</div>
		</div>
	</section>
	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>