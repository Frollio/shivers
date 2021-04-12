
<?php

/**
 * Shivers - Footer template.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'child-template-parts/footer' );
}
?>

<?php wp_footer(); ?>

</body>
</html>
