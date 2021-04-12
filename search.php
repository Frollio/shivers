<?php

/**
 * Shivers - Template for displaying search results.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="e-content">
	<div class="e-row">

		<!-- Wrapper of loop content and sidebar -->
		<div class="e-column-content-sidebar">

			<!-- Wrapper of search results and pagination -->
			<div>

				<!-- Search Results -->
				<div class="page-content e-archive-post-list">
					<?php while ( have_posts() ) {
						the_post();
						$post_link = get_permalink();
						?>
						<article class="post e-post-intro">
							<?php
							printf( '<h2 class="%s"><a href="%s">%s</a></h2>', 'entry-title', 
								esc_url( $post_link ), esc_html( get_the_title() ) );
							printf( '<a href="%s">%s</a>', esc_url( $post_link ), 
								get_the_post_thumbnail( $post, 'large' ) );
							the_excerpt();
							?>
						</article>
					<?php } ?>
				</div>
					
				<!-- Pagination -->
				<?php the_posts_pagination( array( 'class' => 'e-pagination', 'mid_size' => 2 ) ); ?>

			</div>

			<!-- Primary Sidebar -->
			<?php get_sidebar( 'primary' ); ?>

		</div>
	</div>
</div>

<?php get_footer();

wp_reset_postdata(); ?>