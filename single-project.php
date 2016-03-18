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
			<h2><a href="<?php echo get_the_permalink( 9 )?>"><?php echo get_the_title( 9 )?></a></h2>
		</div>
	</section>

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

		<?php get_template_part( 'content', 'project' ); ?>

	</article>

	<?php endwhile; // end of the loop. ?>

	<footer></footer>

<?php get_footer(); ?>
