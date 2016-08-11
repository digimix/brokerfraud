<header class="banner">
	<div class="container-fluid">
		<nav class="navbar nav-primary">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
					<?php
					// check to see if the logo exists and add it to the page
					if ( get_theme_mod( 'site_logo' ) ) :
					$site_logo_id = get_theme_mod( 'site_logo' );
					//$site_logo_svg = wp_get_attachment_image_url( $site_logo_id, 'full');
					?>

					<img class="main-logo" src="<?php echo wp_get_attachment_image_url( $site_logo_id, 'full' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
					<?php // add a fallback if the logo doesn't exist
					else : ?>

					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

					<?php endif; ?>
				</a>
			</div>
			<div class="navbar-header-collapse">
				<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#flyout-menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php
				// check to see if the nav_microcopy exists and add it to the navbar
				if ( get_theme_mod( 'mix_nav_microcopy' ) ) :
					echo get_theme_mod( 'mix_nav_microcopy' );
				endif;
				?>
			</div>
			<div class="collapse navbar-collapse">
				<?php
				if (has_nav_menu('primary_navigation')) :
					wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
				endif;
				?>
			</div>
		</nav>
	</div>
</header>