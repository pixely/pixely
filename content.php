<?php
/**
 * @package pixely4
 */
?>

<div id="post-<?php the_ID(); ?>" class="article-intro">
		<h6><?php the_date()?></h6>
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<?php the_excerpt()?>
</div>