<?php

/**
 * Shivers - 404 Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="e-content">
	<div class="e-row">
		<div class="e-column-content-sidebar">

			<!-- Main Content Area -->
			<main <?php post_class( 'e-main-content-narrow' ); ?> role="main">

				<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
					<header class="page-header">
						<h1 class="entry-title"><?php esc_html_e( 'The page can&rsquo;t be found.', 'hello-elementor' ); ?></h1>
					</header>
				<?php endif; ?>

				<div class="page-content">
					<p><?php esc_html_e( 'Sorry but nothing was found at this location.', 'hello-elementor' ); ?></p>
				</div>

			</main>

			<!-- Primary Sidebar. -->
			<?php get_sidebar( 'primary' ); ?>

		</div>
	</div>
</div>

<?php get_footer();