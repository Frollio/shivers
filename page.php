<?php

/**
 * Shivers - Default Page Type Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="e-content">
	<div class="e-row">
		<div class="e-column-content-sidebar">

			<!-- Main Content Area -->
			<?php while ( have_posts() ) : the_post(); ?>
				<main <?php post_class( 'e-main-content-wide-card' ); ?> role="main">

					<!-- Heading -->
					<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
						<header class="page-header e-header-card">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header>
					<?php endif; ?>

					<!-- Page Content -->
					<div class="page-content">
						<?php the_content(); ?>
						<div class="post-tags">
							<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
						</div>
						<?php wp_link_pages(); ?>
					</div>

					<!-- Comments Area -->
					<?php /*comments_template();*/ ?>
					
				</main>
			<?php endwhile;

			/* Primary Sidebar. */
			get_sidebar( 'primary' ); ?>

		</div>
	</div>
</div>

<?php get_footer();