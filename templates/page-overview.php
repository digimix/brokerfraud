<?php use Roots\Sage\Titles;?>

<div class="page-header page-overview">
	<?php if (has_excerpt()) { ?>
		<h2><?= Titles\title(); ?></h2>
		<h1 class="entry-title"><?php echo get_the_excerpt(); ?></h1>
	<?php } else { ?>
		<h1 class="entry-title"><?= Titles\title(); ?></h1>
	<?php } ?>
</div>