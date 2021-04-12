
<?php

/**
 * Shivers - Primary sidebar template part
 */

?>

<section id="sidebar" class="e-sidebar">
  <?php if ( is_active_sidebar( 'primary' ) ) : ?>
    <?php dynamic_sidebar( 'primary' ); ?>
  <?php else : ?>
    Add widgets! <!-- Add widgets! -->
  <?php endif; ?>
</section>
