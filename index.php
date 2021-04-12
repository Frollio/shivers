<?php

/**
 * Shivers - Index Template
 *
 * This file's logic differs from the Hello Elementor parent theme. Hello Elementor's
 * index.php loads first the header, second the relevant template part and last the footer. 
 * Instead of that, this file loads only the header and the footer and includes layout 
 * without loading any extra templata parts.
 * 
 * If you wish to make and use Elementor templates this theme needs to function 
 * like the parent theme Hello Elementor does. The easiest way would be deleting this file 
 * but it is recommended to refactor this child theme instead. Refactoring is done by moving 
 * template files's layouts to template parts which are loaded to this template file. See 
 * the original Hello Elementor index.php to find out how to do it.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="e-content">
	<div class="e-row">
		<div class="e-column-content-sidebar">

			<?php
			while ( have_posts() ) : the_post();
			?>

			<main <?php post_class( 'e-main-content-narrow' ); ?> role="main">

				<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
					<header class="page-header e-header-card">
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

				<?php comments_template(); ?>
			</main>

			<?php
			endwhile;

			get_sidebar( 'primary' );
			?>

		</div>
	</div>
</div>

<?php

get_footer();
