<div class="recent-cases">
	<div class="adjust-h-padding">
		<h2 class="entry-title">Millions of dollars recovered for broker malfeasance</h2>
		<p>The below is a sampling of recent and representative cases we have handled.</p>
	</div>
	<ul class="cases related">
		<?php
		$args = array( 'posts_per_page' => 3, 'post_type'=> 'cases', 'orderby'=>'rand' );

		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
				<?php get_template_part('templates/content', 'cases'); ?>
			</li>
		<?php endforeach;
		wp_reset_postdata();?>
	</ul>
</div>