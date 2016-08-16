<?php
$claim_name = get_queried_object()->name;
$args = array( 'posts_per_page' => 1, 'post_type'=> 'reviews', 'orderby'=>'rand', 'claims'=> $claim_name);
$myposts = get_posts( $args );
if($myposts): ?>
<div class="block block-reviews">
	<h3 class="entry-title">Don't just take our word for it.</h3>
	<p style="color:#666;">We've helped thousands of investors across the United States recover losses from broker malfeasance.</p>
	<div class="flex align-center">
		<div id="client-reviews">
			<strong class="hidden">Client Reviews</strong>
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
		<div class="divider"></div>
		<div>
			<?php get_template_part('templates/badges-awards'); ?>
		</div>
	</div> <!-- end flex -->
</div><!-- end story -->
<?php endif; ?>