
<header class="e-header-bar" role="banner">

  <?php
  $site_name = get_bloginfo( 'name' );
  $tagline   = get_bloginfo( 'description', 'display' );
  ?>

  <?php
  get_template_part( 'child-template-parts/navbar' );

  if ( is_front_page() ) {
    get_template_part( 'child-template-parts/langbar' );
  }
  ?>

</header>