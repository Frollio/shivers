
<div class="e-language-bar">

  <?php wp_nav_menu(
    array(
      'theme_location'  => 'language-menu',
      'container_class' => 'e-flag-bar',
      'menu_class'      => 'e-flag-ul', 
			'theme_location' => 'language-menu', 
			'fallback_cb' => false
    )
  );?>

</div>