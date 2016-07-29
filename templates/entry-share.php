<!--components/atoms/socialIcons.php-->
<?php
	$share_link = get_permalink($post->ID);
	$share_title = urlencode(get_the_title($post->ID));
	$share_img = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ),'medium');
?>
<ul class="social-icons">
  <li>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_link; ?>" target="_blank" rel="nofollow">
      <span>Facebook</span>
    </a>
  </li>
  <li>
    <a href="https://twitter.com/home?status=<?php echo $share_title; ?>%20<?php echo $share_link; ?>" target="_blank" rel="nofollow">
      <span>Twitter</span>
    </a>
  </li>
  <li>
    <a href="https://plus.google.com/‎share?url=<?php echo $share_link; ?>" target="_blank" rel="nofollow">
      <span>Google+</span>
    </a>
  </li>
  <li class="hidden">
    <a href="https://www.instagram.com/" target="_blank" rel="nofollow">
      <span>Instagram</span>
    </a>
  </li>
  <li class="hidden">
    <a href="http://pinterest.com/pin/create/button/?url=<?php echo $share_link; ?>&media=<?php echo $share_img[0]; ?>&description=<?php echo $share_title; ?>" class="pin-it-button" count-layout="horizontal" target="_blank" rel="nofollow">
      <span>Pinterest</span>
    </a>
  </li>
  <li class="hidden">
    <a href="https://github.com/" target="_blank" rel="nofollow">
      <span>GitHub</span>
    </a>
  </li>
  <li>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_link; ?>&title=<?php echo $share_title; ?>&source=<?php echo esc_url(home_url('/'));?>" target="_blank" rel="nofollow">
      <span>LinkedIn</span>
    </a>
  </li>
  <li class="hidden">
    <a href="http://dribbble.com/" target="_blank" rel="nofollow">
      <span>Dribbble</span>
    </a>
  </li>
  <li class="hidden">
    <a href="/rss" target="_blank" rel="nofollow">
      <span>RSS</span>
    </a>
  </li>
  <li>
    <a href="mailto:?&body=<?php echo $share_link; ?>?&Subject=<?php echo get_the_title($post->ID); ?>" target="_blank" rel="nofollow">
      <span>Mail</span>
    </a>
  </li>
  <li>
    <a href="javascript:window.print();" target="_blank" rel="nofollow">
      <span>Print</span>
    </a>
  </li>
</ul>