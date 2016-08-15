<?php use Roots\Sage\Titles;
	$claim_title = Titles\title();
	$claim_title_new = preg_replace('/^[^:]*:\s*/', '', $claim_title) . ' Claims';
?>
<div class="page-content page-columns">
	<div class="overview">
		<?php get_template_part('templates/page', 'overview'); ?>
		<?php //get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/cta-box', 'contact'); ?>
		<div class="adjust-v-padding">
			<p class="text--deci" style="color:#777;"><strong>We serve the following localities:</strong> Atlanta, Baltimore, Boston, Chicago, Dallas–Fort Worth, Denver, Detroit, Houston, Los Angeles, Miami, New York City, Philadelphia, Phoenix, San Bernardino-Riverside, San Diego, San Francisco, Seattle, St. Louis, Tampa–St. Petersburg, and Washington, D.C.</p>
		</div>
	</div>
	<div class="main-content">
		<?php term_description(); ?>
	</div>
</div>
<div class="recent-cases">
	<h2 class="entry-title">Recover Losses for <?= $claim_title_new; ?></h2>
	<p>The below is a sampling of recent and representative cases we have handled.</p>

		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Sorry, no results were found.', 'sage'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>


<?php
	global $wp_query;
	$i = 1;
	$count = $wp_query->post_count;?>
<ul class="cases related">
<?php while (have_posts()) : the_post(); ?>
	<li><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></li>
	<?php if($i == 3) {
		echo '</ul>';
		echo '<a href="#expand-more" class="toggle-collapse btn btn-default" data-toggle="collapse"><span>Show</span></a><div id="expand-more" class="collapse">';
		echo '<ul class="cases related">';
	} if ( $i == $count ) {
		if ($count > 3) {
	echo '</div>';
	}
	}
	 $i++;?>
<?php endwhile; ?>
</ul>
</div>

<!--
	<ul class="cases related">
	<?php while (have_posts()) : the_post(); ?>
		<li><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></li>
	<?php endwhile; ?>
	</ul>
-->

	<?php the_posts_navigation(['prev_text'=>'<span>Previous Cases</span>', 'next_text'=>'<span>More Recent Cases</span>']); ?>
</div>
<?php //get_template_part('templates/story-reviews'); ?>
<?php //get_template_part('templates/badges','awards'); ?>
<?php get_template_part('templates/story-contact','claims'); ?>