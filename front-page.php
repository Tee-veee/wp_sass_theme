<?php get_header();
// Get page ID
$postID = 8;

// Init arrays
$cardImages = array();
$cardTitles = array();
$cardContents = array();


// Get custom fields
$featured_image_url = get_the_post_thumbnail_url($postID);
$development_image_main_url = get_field('developmentimagemain', $postID);

for ($i = 1; $i <= 3; $i++) {
  $cardImages[] = get_field('cardimage' . $i, $postID);
  $cardTitles[] = get_field('cardtitle' . $i, $postID);
  $cardContents[] = get_field('cardcontent' . $i, $postID);
}
?>
<!-- BANNER -->
<section class="container">
  <div id="banner-container">
    <svg id="banner-container__blob" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
          <stop id="stop1" stop-color="rgba(97, 255, 237, 1)" offset="0%"></stop>
          <stop id="stop2" stop-color="rgba(85, 206, 246, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path fill="url(#sw-gradient)" d="M15.9,-30.3C20.4,-24.9,23.8,-20.3,29.1,-15.4C34.4,-10.5,41.6,-5.2,42.5,0.5C43.4,6.3,38.1,12.6,33.3,18.5C28.6,24.3,24.5,29.8,19,34.7C13.6,39.6,6.8,43.9,0.6,42.8C-5.5,41.7,-11,35.1,-16.4,30.2C-21.7,25.2,-27,21.9,-31.6,17.2C-36.2,12.4,-40.1,6.2,-41.9,-1C-43.7,-8.3,-43.5,-16.6,-38.9,-21.5C-34.4,-26.3,-25.6,-27.7,-18.4,-31.6C-11.2,-35.6,-5.6,-42.1,0,-42.1C5.7,-42.2,11.3,-35.8,15.9,-30.3Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>
    </svg>
    <div class="banner-container__left">
      <h1>Take control of your brand & digital identity</h1>
      <p>We offer bespoke range of digital services, from enhancing and growing your brand, to developing your next website or app.</p>
      <button class="animated-button">
        <span>Fancy Button</span>
        <div class="animated-button__horizontal"></div>
        <div class="animated-button__vertical"></div>
      </button>
    </div>
    <div class="banner-container__right">
      <?php
      echo '<img src="' . $featured_image_url . '" alt="Featured Image" class="banner-container__right__image">'
      ?>
    </div>
  </div>
</section>

<!-- OUR SERVICES -->

<section class="container">
  <div id="title-container">
    <h2>Our Services</h2>
  </div>
  <div id="card-container">
    <?php foreach ($cardImages as $index => $cardImage) : ?>
      <div class="card">
        <div class="card__image"> <img src="<?php echo $cardImage; ?>" alt="Card Image" class="card__icon"></div>
        <div class="card__content">
          <h3><?php echo $cardTitles[$index]; ?></h3>
          <p><?php echo $cardContents[$index]; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- DEVELOPMENT -->

<section class="container">
  <div id="development-container">
    <svg id="development-container__blob" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
          <stop id="stop1" stop-color="rgba(97, 255, 237, 1)" offset="0%"></stop>
          <stop id="stop2" stop-color="rgba(31, 195.722, 251, 1)" offset="100%"></stop>
        </linearGradient>
      </defs>
      <path fill="url(#sw-gradient)" d="M16.5,-17.1C22.4,-14.7,29,-10.5,32.4,-3.8C35.9,2.9,36.3,12,32.2,18.3C28.2,24.5,19.8,27.9,11.8,29.5C3.8,31.1,-3.7,31,-10.1,28.4C-16.6,25.8,-21.9,20.8,-25.1,14.7C-28.4,8.6,-29.6,1.6,-28.9,-5.5C-28.2,-12.7,-25.5,-19.9,-20.4,-22.4C-15.2,-24.9,-7.6,-22.7,-1.2,-21.3C5.3,-19.9,10.6,-19.4,16.5,-17.1Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"></path>
    </svg>
    <div class="development-container__left">
      <?php
      echo '<img src="' . $development_image_main_url . '" alt="Web development SVG" class="development-container__right__image">'
      ?>
    </div>
    <div class="development-container__right">
      abc
    </div>
  </div>
</section>

<?php get_footer(); ?>