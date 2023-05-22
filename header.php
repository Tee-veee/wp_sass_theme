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

<header id="header">
  <div class="container">
    <div class="header__inner">
      <h3>Logo here</h3>
      <?php $args = array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'header__inner-menu-item',
        'menu_id' => 'header__inner-menu',
      ); ?>
      <?php wp_nav_menu($args); ?>
    </div>
  </div>
</header>

<body>
  <div id="cursor-follow"></div>
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