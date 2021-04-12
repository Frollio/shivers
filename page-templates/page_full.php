<?php

/**
 * Hello Child EUCAP - Full Blank page template
 * Template Name: Shivers Full Blank Page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="e-content">
	<div class="e-row">
		<div class="e-column">

			<?php
			while ( have_posts() ) : the_post();
			?>

			<main <?php post_class( 'e-main-content-wide' ); ?> role="main">

				<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
					<header class="page-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header>
				<?php endif; ?>

				<div class="page-content">
					<?php the_content(); ?>
					<div class="post-tags">
						<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
					</div>
					<?php wp_link_pages(); ?>
				</div>

			</main>

			<?php
			endwhile;
			?>

		</div>
	</div>
</div>

<?php
get_footer();