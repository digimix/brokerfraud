<div class="recent-cases">
	<h2 class="entry-title">Millions of dollars recovered for broker malfeasance</h2>
	<p>The below is a sampling of recent and representative cases we have handled.</p>
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
<!--
		<li>
			<div class="copy">
				<h3>Represented a claimant in connection with an investment in a failed $500 million closed end investment fund that was heavily invested in credit default swaps.</h3>
			</div>
			<a href="#">Learn more about: <span>Misrepresentation Claims</span></a>
		</li>
		<li>
			<div class="copy">
				<h3>Represented small business owner from Texas against mid-sized brokerage firm for allegations of executing unauthorized short positions in his securities account.</h3>
			</div>
			<a href="#">Learn more about: <span>Unauthorized Trading Claims</span></a>
		</li>
		<li>
			<div class="copy">
				<h3>Represented an elderly Ohio retiree against a nationally recognized broker-dealer in connection with unsuitable investments, including the sale of “principal protected” notes.</h3>
			</div>
			<a href="#">Learn more about: <span>Breach of Fiduciary Duty Claims</span></a>
		</li>
-->
	</ul>


</div>