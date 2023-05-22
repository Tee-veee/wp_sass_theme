<?php


// register webpack compiled js and css with theme
function enqueue_webpack_scripts()
{

  $cssFilePath = glob(get_template_directory() . '/css/build/main.min.*.css');
  $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
  wp_enqueue_style('main_css', $cssFileURI);

  $jsFilePath = glob(get_template_directory() . '/js/build/main.min.*.js');
  $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
  wp_enqueue_script('main_js', $jsFileURI, null, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');


// allow svgs
function enable_svg_upload($mime_types)
{
  $mime_types['svg'] = 'image/svg+xml';
  return $mime_types;
}
add_filter('upload_mimes', 'enable_svg_upload');

// allow svgs
function display_svg_in_admin($response, $attachment, $meta)
{
  if ($response['mime'] === 'image/svg+xml') {
    $response['sizes']['thumbnail'] = [
      'url' => $response['url'],
      'width' => $response['width'],
      'height' => $response['height'],
    ];
  }
  return $response;
}
add_filter('wp_prepare_attachment_for_js', 'display_svg_in_admin', 10, 3);

// enable featured images
add_theme_support('post-thumbnails');

function custom_theme_setup()
{
  // register menus
  register_nav_menus(array(
    'primary-menu' => 'Primary Menu', // You can add more menus by creating additional key-value pairs
  ));
}
add_action('after_setup_theme', 'custom_theme_setup');

function enqueue_material_icons()
{
  wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
}
add_action('wp_enqueue_scripts', 'enqueue_material_icons');
