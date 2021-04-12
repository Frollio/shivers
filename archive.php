<?php

/**
 * Shivers - Template for displaying archives.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="e-content">
	<main class="e-archive-content" role="main">

		<!-- Heading -->
		<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="e-archive-title">', '</h1>' );
				the_archive_description( '<div class="e-archive-description">', '</div>' );
				?>
			</header>
		<?php endif; ?>

		<!-- Post Archive List -->
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

	</main>
</div>

<?php get_footer();

wp_reset_postdata(); ?>