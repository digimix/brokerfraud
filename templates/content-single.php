<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
	<div class="curl"><a href="<?= esc_url(home_url('/contact')); ?>">Recover your losses</a></div>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
<div class="social-sticky">
	<?php get_template_part('templates/entry-share'); ?>
</div>
<?php get_template_part('templates/entry-related-cases'); ?>
<?php get_template_part('templates/entry-footer'); ?>
<?php get_template_part('templates/footer-badges'); ?>
