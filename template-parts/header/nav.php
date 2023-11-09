<?php  
/**
 * Header Navigation
 * 
 * @package Nandan Global
 */
if( !defined( 'ABSPATH' ) ) exit;
?>
<header id="masthead" class="site-header container bg-white overflow-hidden pb-3 pt-3" role="banner"> 
	<div class="site-branding float-start inline-block border-box ">
		<?php the_custom_logo(); ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
			$nandanglobal_description = get_bloginfo( 'description', 'display' );
			if ( $nandanglobal_description || is_customize_preview() ) :
		?>
			<p class="site-description"><?php echo $nandanglobal_description; ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation float-start float-sm-end inline-block border-box">
		<button class="menu-toggle ms-5 me-sm-0" aria-controls="primary-menu" aria-expanded="false">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'           => 'menu nav-justified'
			)
		);
		?>
	</nav><!-- #site-navigation -->
	<div id="username" class="float-end inline-block border-box">
		<?php 
		    $current_user = wp_get_current_user();
		    $user_id = $current_user->ID;
			
			if (is_user_logged_in()) {

			    $avatar_image = get_avatar($user_id, 32, '', 'avatar-class');

			    echo '<a href="#">'.esc_html($current_user->user_firstname) . '  ' . $avatar_image . '</a>';
			} 
		?>
	</div>
</header><!-- #masthead -->
