<!DOCTYPE html>

<head>

  <title><?= get_the_title() ?></title>

  <!-- meta tag header includes -->
  <meta name="author" content="Taylor Callsen" />
  <meta name="description" content="<?= get_the_excerpt() ?>" />
  <meta name="keywords" content="<?= $metaTags ?>">
  <link rel="canonical" href="<?= wp_get_canonical_url() ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- open graph header includes -->
  <meta property="og:title" content="<?= get_the_title() ?>" />
  <meta property="og:url" content="<?= wp_get_canonical_url() ?>" />
  <meta property="og:description" content="<?= get_the_excerpt() ?>" />

  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>
<html>





<body>
  <div id="cursor-follow"></div>

  <!-- MENU -->
  <div class="menu menu__close">
    <div class="container"></div>
  </div>
  <!-- END MENU -->

  <header id="header">
    <div class="container">
      <div class="header__inner">
        <?php $args = array(
          'theme_location' => 'primary-menu',
          'menu_class' => 'header__inner-menu-item',
          'menu_id' => 'header__inner-menu',
        ); ?>
        <?php wp_nav_menu($args); ?>

        <!-- HAMBURGER -->
        <div class="hamburger hamburger__close">
          <div class="hamburger__icon">
            <div class="hamburger__line hamburger__line-1"></div>
            <div class="hamburger__line hamburger__line-2"></div>
            <div class="hamburger__line hamburger__line-3"></div>
          </div>
        </div>
        <!-- END HAMBURGER -->
      </div>
    </div>
  </header>


  <div id="toggle">
    <div class="toggle__inner">
      <button class="toggle__inner-btn">
        <img class=" icon" src="http://templatethemetp.local/wp-content/uploads/2023/05/arrow_downward_FILL0_wght0_GRAD0_opszNaN.svg" />
      </button>
    </div>
    <div class="toggle__inner">
      <button class="toggle__inner-btn" id="dark-mode-toggle-btn">
        <img class="icon" src="http://templatethemetp.local/wp-content/uploads/2023/05/sync_FILL0_wght0_GRAD0_opszNaN.svg" />
      </button>
    </div>
  </div>