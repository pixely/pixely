<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pixely4
 */

get_header(); ?>

<section class="hero">
	<div class="cover"></div>
	<div class="container">
		<?php the_archive_title( '<h2 class="page-title">', '</h2>' )?>
	</div>
</section>

<article class="blog listing container">

	<div class="article-intro">

	<?php the_archive_description( '<div class="taxonomy-description">', '</div>' )?>

	</div>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</article>

<footer></footer>

<?php get_footer(); ?>
