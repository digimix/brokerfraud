<article <?php post_class('copy'); ?>>
	<h3 class="">
	<?php echo get_the_content(); ?>
	</h3>
	<div>
	<?php echo get_the_term_list( $post->ID, 'claims', '<strong>Learn more about:</strong><ul class="list-unstyled"><li>', '</li><li>', '</li></ul>' ); ?>
	</div>
</article>
