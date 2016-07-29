<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard"><?= __('By', 'sage'); ?> <a href="<?= esc_url(home_url('/about/')) ?>" rel="author" class="fn"><?= get_the_author(); ?></a> <span class="post-cat"><?php echo get_the_term_list( $post->ID, 'category', ' ', ', ' ); ?></span></p>
