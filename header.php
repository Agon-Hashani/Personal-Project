<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container header-inner">
    <div class="logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
        <span class="logo-icon" aria-hidden="true">🏢</span>
        <span class="logo-text">RealEstate Listings</span>
      </a>
    </div>

    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>

    <nav id="site-navigation" class="nav" aria-label="Primary navigation">
      <?php if ( has_nav_menu('primary') ) :
        wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'menu', 'menu_id' => 'primary-menu'));
      else :
        $exclude = '';
        $sp = get_page_by_path('sample-page');
        if ($sp) { $exclude = $sp->ID; }
        echo '<ul id="primary-menu" class="menu">';
        wp_list_pages(array('title_li' => '', 'depth' => 1, 'exclude' => $exclude));
        echo '</ul>';
      endif; ?>
    </nav>

    <!-- header search removed as requested -->
  </div>
</header>
<main class="container">
