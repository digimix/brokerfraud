<?php use Roots\Sage\Titles;
	$claim_title = Titles\title();
	$claim_title_new = preg_replace('/^[^:]*:\s*/', '', $claim_title) . ' Claims';
?>

<div class="breadcrumbs-bar">
	<p id="breadcrumbs">
		<span xmlns:v="http://rdf.data-vocabulary.org/#">
		<span typeof="v:Breadcrumb">
			<a href="<?= esc_url(home_url('/')); ?>" rel="v:url" property="v:title">Home</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="<?= esc_url(home_url('/')); ?>stock-fraud-claims/" rel="v:url" property="v:title">Stock Fraud Claims</a> » <span class="breadcrumb_last"><?= $claim_title_new; ?></span></span></span></span>
	</p>
</div>

<div class="page-content page-columns">
	<div class="overview">
		<?php get_template_part('templates/page', 'overview'); ?>
		<?php //get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/cta-box', 'contact'); ?>
		<?php get_template_part('templates/cta-box', 'localities'); ?>
	</div>
	<div class="main-content claim-description">
		<?php echo term_description(); ?>
		<?php echo wpautop(get_term_meta(get_queried_object()->term_id, 'mix_claim_wysiwyg', 1)); ?>
	</div>
</div>
<?php if (have_posts()) : ?>
<div class="block block-cases recent-cases">
	<h2 class="entry-title">Recover Losses for <?= $claim_title_new; ?></h2>
	<p>The below is a sampling of recent and representative cases we have handled.</p>
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

<?php endif; ?>

<?php get_template_part('templates/story-reviews','related'); ?>
<?php //get_template_part('templates/badges','awards'); ?>
<?php get_template_part('templates/story-contact','claims'); ?>