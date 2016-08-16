<?php
/**
 * Template Name: Claims Template
 */
?>

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
			<div class="sitemap-links">
			<?php
			$tax = 'claims';
			$terms = get_terms( $tax );
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			    echo '<ul class="list-terms list-claims">';
			    foreach ( $terms as $term ) {
			        echo '<li><a title="'.$term->name.' Claims information" href="'.get_term_link($term->name,$tax).'"><span>' . $term->name . '</span></a></li>';
			    }
			    echo '</ul>';
			}
			?>
			</div>
		</div>
	</div>
<?php endwhile; ?>

<?php get_template_part('templates/story-reviews'); ?>
<?php get_template_part('templates/story-contact'); ?>