<?php use Roots\Soil\Nav; ?>
<div id="flyout-menu" class="col-xs-6 col-sm-3 offcanvas-sidebar">
	<div>
		<nav class="nav-primary">
	      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-stacked list-group visible-xs visible-sm']);
	      endif;
	      ?>
		  <?php
/*
		  if (has_nav_menu('popout_navigation')) :
		    wp_nav_menu(['theme_location' => 'popout_navigation', 'menu_class' => 'nav nav-stacked list-group']);
		  endif;
*/
		  ?>
		</nav>

		<?php
		if (has_nav_menu('social_navigation')) :
			echo '<h4 style="color:#003e7e;font-weight: bold;">Follow Us</h4>';
			wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => 'nav nav-pills m-auto', 'link_before' => '<span class="link-text">','link_after' => '</span>'));
		endif;
		?>
		<h4 style="color:#003e7e;font-weight: bold;">Get In Touch</h4>
		<div class="address">
			<?php echo Roots\Sage\Customizer\grabContact(); ?>
		</div>
		<a id="flyout-btn-2" href="#flyout-btn-1" class="btn-flyout btn btn-light-blue btn-xs" aria-label="close secondary navigation menu" data-toggle="offcanvas"><span class="sr-only">Close menu</span><i aria-hidden="true" class="icon ion-close-round"></i></a>
	</div>
</div>