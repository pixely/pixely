<?php
/**
 * The template for the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: About
 * @package pixely4
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<section class="hero">
		<div class="cover"></div>
		<div class="container">
			<h2><?php the_title()?></h2>
		</div>
	</section>

	<article class="container">

		<?php the_content()?>

		<?php
		$args = array (
			'post_type'              => 'project',
			'pagination'             => false,
			'posts_per_page'         => '-1',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {

			echo '<div class="grid portfolio">';

			while ( $query->have_posts() ) {
				$query->the_post();

				$back = get_field( 'thumb_background' );
				$front =  get_field( 'thumb_foreground' );
				?>
				<div class="grid__col grid__col--1-of-3 grid__col--m-1-of-2 grid__col--s-1-of-1">
					<a href="<?php the_permalink()?>" class="project-thumb" style="background-image: url(<?php echo $back['url']?>); background-color: <?php the_field( 'thumb_colour' )?>;">
						<?php if( is_array( $front ) ){ ?>
						<div class="cover" style="background-color: <?php the_field( 'thumb_colour' )?>;"></div>
						<div class="image"><img src="<?php echo $front['url']?>" alt="<?php the_title()?>"/></div>
						<?php } ?>
					</a>
					<h5><a href="<?php the_permalink()?>"><?php the_title()?></a></h5>
					<h6><a href="<?php the_permalink()?>"><?php the_field( 'project_type' )?></a></h6>

				</div>
				<?php

			}

			echo '</div>';

		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();

		?>

	</article>

	<footer></footer>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
