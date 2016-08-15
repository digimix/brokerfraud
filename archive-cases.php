<?php //get_template_part('templates/page', 'header'); ?>

<div class="page-header header-default">
	<h1 class="entry-title">Recent Cases</h1>
	<p>We have represented investors from across the country against large and small broker-dealers seeking and recovering many millions of dollars for broker malfeasance.The below is a sampling of recent and representative cases we have handled.</p>
</div>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<ul class="cases list-unstyled">
<?php while (have_posts()) : the_post(); ?>
	<li><?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?></li>
<?php endwhile; ?>
</ul>

<?php the_posts_navigation(['prev_text'=>'<span>Previous Cases</span>', 'next_text'=>'<span>More Recent Cases</span>']); ?>

<?php get_template_part('templates/story-reviews'); ?>
<?php get_template_part('templates/story-contact'); ?>