<?php
/**
 * Template for displaying navigation bar.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>

	<!-- Navigation bar. -->
	<div class="e-navbar">

		<!-- Navigation menu. -->
		<nav class="navbar navbar-expand-xl navbar-dark"
			role="navigation">

		<!-- Logo container. -->
		<div class="navbar-brand e-logo">
			<?php the_custom_logo(); ?>
		</div>

			<button class="navbar-toggler" type="button" 
				data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon e-navbar-icon"></span>
			</button>

			<?php
			wp_nav_menu( array(
				'theme_location'	=> 'menu-1',
				'depth'						=> 2,
				//'container'				=> '<div>',
				'container_class'	=> 'collapse navbar-collapse',
				'container_id'		=> 'collapsibleNavbar',
				'menu_class'			=> 'navbar-nav e-nav-ul',
				'fallback_cb'			=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'					=> new WP_Bootstrap_Navwalker(),
				'add_li_class'		=> 'e-nav-item'
			) );
			?>

		</nav>
		
	</div>

	<?php endif; ?>
	