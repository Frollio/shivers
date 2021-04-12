<?php

/**
 * Shivers - Front page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div class="e-content e-europe">
	<div class="e-row">

		<?php while ( have_posts() ) : the_post(); ?>

		<main <?php post_class( 'e-main-content-full' ); ?> role="main">
			<div class="page-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
		</main>

		<?php endwhile; ?>

	</div>
</div>

<?php

get_footer();