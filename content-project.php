<?php
/**
 * @package pixely4
 */
?>

<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

<div class="grid project-item">
	<div class="grid__col grid__col--4-of-12 grid__col--m-4-of-12 grid__col--s-1-of-1">
		<div class="project-meta">
			<?php
				if( get_field( 'project_type' ) ){
					echo '<h6>'.get_field( 'project_type' ).'</h6>';
				}
				if( get_field( 'project_type' ) ){
					echo '<h6><a href="'.get_field( 'project_url' ).'">'.str_replace('http://www.','',get_field( 'project_url' ) ).'</a></h6>';
				}
				if( get_field( 'project_notes' ) ){
					echo '<h6>'.get_field( 'project_notes' ).'</h6>';
				}
			?>
		</div>

		<?php the_content(); ?>

	</div>

	<div class="grid__col grid__col--8-of-12 grid__col--m-8-of-12 grid__col--s-1-of-1">
		<?php

		$images = get_field('images');

		if( $images ): ?>
		    <?php foreach( $images as $image ): ?>
		        <figure>
		            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		            <?php
			            if( $image['caption'] ){
				            echo '<figcaption>'.$image['caption'].'</figcaption>';
			            }
		            ?>
		        </figure>
		    <?php endforeach; ?>
		<?php endif; ?>

	</div>

</div>