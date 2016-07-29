<footer class="footerMain content-info">
	<div class="container-fluid wrap">
		<?php
		// check to see if the logo exists and add it to the page
		if ( get_theme_mod( 'site_logo_alt' ) ) :
		$site_logo_id = get_theme_mod( 'site_logo_alt' );
		?>

		<img class="logo" src="<?php echo wp_get_attachment_image_url( $site_logo_id, 'full' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		<?php //echo file_get_contents("http://atomic.dev/brokerfraud/atomic-core/img/logo.svg"); ?>
		<?php // add a fallback if the logo doesn't exist
		else : ?>

		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>

		<?php endif; ?>

		<div class="cols-2">
			<div class="address">
				<?php echo Roots\Sage\Customizer\grabContact(); ?>
			</div>

			<div>
				<?php
				// check to see if the logo exists and add it to the page
				if ( get_theme_mod( 'mix_footer_text' ) ) :
					echo get_theme_mod( 'mix_footer_text' );
				endif;
				?>
			</div>
		</div>
    	<div class="footer-bottom clearfix">
			<?php
			// check to see if the logo exists and add it to the page
			if ( get_theme_mod( 'mix_footer_copyright' ) ) :
				echo '<p class="copyright">' . get_theme_mod( 'mix_footer_copyright' ) . '</p>';
			endif;

			if (has_nav_menu('footer_navigation')) :
				wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav navbar-right']);
			endif;
			?>
    	</div>
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>
</footer>