<?php
$claim_name = get_queried_object()->name;
$args = array( 'posts_per_page' => 1, 'post_type'=> 'reviews', 'orderby'=>'rand', 'claims'=> $claim_name);
$myposts = get_posts( $args );
if($myposts): ?>
<div class="info-reviews text--deci">
	<div>
		<ul class="list-unstyled">
		<?php
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<li>
				<?php get_template_part('templates/content', 'reviews'); ?>
			</li>
		<?php endforeach;
		wp_reset_postdata();?>
		</ul>
	</div>
</div>
<?php endif; ?>