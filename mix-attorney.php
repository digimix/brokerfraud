<?php
/**
 * Template Name: Attorneys
 */

$slug = get_queried_object()->post_name;
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="page-content page-columns">
		<div class="overview">
			<?php
			get_template_part('templates/page', 'overview');
			if (stripos($slug,'kurta') !== false) {
				get_template_part('templates/cta-attorney', 'kurta');
			} else {
				get_template_part('templates/cta-attorney', 'fitapelli');
			}
			get_template_part('templates/cta-box', 'contact');
			get_template_part('templates/cta-box', 'localities'); ?>
		</div>
		<div class="main-content">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<div class="sitemap-links">
			<?php get_template_part('templates/terms', 'claims'); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_template_part('templates/story-reviews'); ?>
<?php get_template_part('templates/story-contact'); ?>