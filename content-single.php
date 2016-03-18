<?php
/**
 * @package pixely4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog container' ); ?>>

	<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

	<h6><?php the_date()?> &ndash; Posted in <?php the_category('&amp;')?></h6>

	<?php the_content(); ?>

</article>