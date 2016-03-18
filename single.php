<?php
/**
 * The template for displaying all single posts.
 *
 * @package pixely4
 */

get_header(); ?>

<section class="hero">
		<div class="cover"></div>
		<div class="container">
			<h2><a href="<?php echo get_the_permalink( 11 )?>"><?php echo get_the_title( 11 )?></a></h2>
		</div>
	</section>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

	<footer></footer>

<?php get_footer(); ?>
