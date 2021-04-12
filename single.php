<?php

/**
 * Shivers - Front page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- Content area (Wraps main content and sidebar): -->
<div class="e-content">
	<div class="e-row">
		<div class="e-column-content-sidebar-card">

			<!-- The Loop. -->
			<?php while ( have_posts() ) : the_post(); ?>

				<!-- Main content area. Notice that the sidebar is in use. -->
				<main <?php post_class( 'e-main-content-narrow-card' ); ?> role="main">

					<!-- Post header. -->
					<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
						<header class="page-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header>
					<?php endif; ?>

					<!-- Post content. -->
					<div class="page-content">

						<?php the_post_thumbnail(); ?>
						<?php the_content(); ?>

						<!-- Post tags. -->
						<div class="post-tags">
							<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), 
								null, '</span>' ); ?>
						</div>

					</div>

					<!-- Post pagination. -->
					<nav class="e-post-pagination">
						<div> <?php next_post_link( $format = '%link', $link = '<< Newer' );?> </div>
						<div> <?php previous_post_link( $format = '%link', $link = 'Older >>' ); ?> </div>
					</nav>

				</main>

				<!-- Comment area. -->
				<!--<section class="e-comment-container">-->
					<?php //comments_template(); ?>
				<!--</section>-->

			<?php endwhile; ?>

			<!-- Sidebar. -->
			<?php get_sidebar( 'primary' ); ?>

		</div>
	</div>
</div>

<?php
get_footer();