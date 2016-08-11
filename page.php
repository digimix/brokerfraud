<?php while (have_posts()) : the_post(); ?>
	<div class="page-content page-columns">
		<div class="overview">
			<?php get_template_part('templates/page', 'overview'); ?>
			<?php //get_template_part('templates/cta-box', 'cases'); ?>
			<?php get_template_part('templates/cta-box', 'profiles'); ?>
			<?php //get_template_part('templates/cta-box', 'contact'); ?>
			<div class="adjust-v-padding">
				<p class="text--deci" style="color:#777;"><strong>We serve the following localities:</strong> Atlanta, Baltimore, Boston, Chicago, Dallas–Fort Worth, Denver, Detroit, Houston, Los Angeles, Miami, New York City, Philadelphia, Phoenix, San Bernardino-Riverside, San Diego, San Francisco, Seattle, St. Louis, Tampa–St. Petersburg, and Washington, D.C.</p>
			</div>
		</div>
		<div class="main-content">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
		<div class="sitemap-links show-1">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_template_part('templates/story-reviews'); ?>
<?php get_template_part('templates/story-contact'); ?>