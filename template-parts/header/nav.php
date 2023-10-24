<?php  
/**
 * Header Navigation
 * 
 * @package Nandan Global
 */
?>
<header id="masthead" class="site-header">
	<div class="site-branding">
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$nandanglobal_description = get_bloginfo( 'description', 'display' );
		if ( $nandanglobal_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $nandanglobal_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nandanglobal' ); ?></button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
	<div id="username">
		<?php 
		    $current_user = wp_get_current_user();
		    $user_id = $current_user->ID;
			
			if (is_user_logged_in()) {

			    // Get the user's avatar with a specific size (e.g., 64) and custom CSS class (optional).
			    $avatar_image = get_avatar($user_id, 32, '', 'avatar-class');

			    echo esc_html($current_user->user_firstname) . '  ' . $avatar_image;
			} 
		?>
	</div>
</header><!-- #masthead -->
