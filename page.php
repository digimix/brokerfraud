<?php while (have_posts()) : the_post(); ?>
	<div class="page-content page-columns">
		<div class="overview">
			<?php get_template_part('templates/page', 'overview'); ?>
			<?php //get_template_part('templates/cta-box', 'cases'); ?>
			<?php get_template_part('templates/cta-box', 'profiles'); ?>
			<?php //get_template_part('templates/cta-box', 'contact'); ?>
			<?php get_template_part('templates/cta-box', 'localities'); ?>
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