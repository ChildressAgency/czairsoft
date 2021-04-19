<!doctype html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M86HRT5');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title><?php echo esc_html(bloginfo('name')); ?></title>
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/Fonts/dcc_sharp_distress_black_by_dccanim-webfont.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous" />
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/Fonts/dcc_sharp_distress_black_by_dccanim-webfont.woff" rel="preload" as="font" type="font/woff" crossorigin="anonymous" />
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M86HRT5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php
    $facebook = get_field('facebook', 'option');
    $twitter = get_field('twitter', 'option');
    $youtube = get_field('youtube', 'option');
    $instagram = get_field('instagram', 'option');
  ?>
  <div id="floating-social">
    <?php if($facebook): ?>
      <a href="<?php echo esc_url($facebook); ?>" id="facebook" aria-label="Facebook" target="_blank">
        <svg class="social-icon">
          <use xlink:href="#icon-facebook" />
        </svg>
      </a>
    <?php endif; if($twitter): ?>
      <a href="<?php echo esc_url($twitter); ?>" id="twitter" aria-label="Twitter" target="_blank">
        <svg class="social-icon">
          <use xlink:href="#icon-twitter" />
        </svg>
      </a>
    <?php endif; if($youtube): ?>
      <a href="<?php echo esc_url($youtube); ?>" id="youtube" aria-label="YouTube" target="_blank">
        <svg class="social-icon">
          <use xlink:href="#icon-youtube" />
        </svg>
      </a>
    <?php endif; if($instagram): ?>
      <a href="<?php echo esc_url($instagram); ?>" id="instagram" aria-label="Instagram" target="_blank">
        <svg class="social-icon">
          <use xlink:href="#icon-instagram" />
        </svg>
      </a>
    <?php endif; ?>
  </div>

  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div class="brand">
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-fluid d-block" alt="CZ Airsoft Logo" />
            <span class="site-title stylized"><?php echo esc_html(bloginfo('name')); ?></span>
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="header-nav" aria-expanded="false" aria-label="Toggle Navigation">
          <svg class="hamburger">
            <use xlink:href="#icon-menu-bars" />
          </svg>
        </button>

        <?php
          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_id' => 'header-nav',
            'container_class' => 'collapse navbar-collapse',
            'menu_id' => '',
            'menu_class' => 'navbar-nav ml-auto',
            'echo' => true,
            'fallback_cb' => 'czairsoft_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new WP_Bootstrap_Navwalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </div>
    </nav>
  </header>

  <?php if(get_field('display_featured_event', 'option') && is_front_page()): ?>
    <?php
      $featured_event_bg_image = get_field('featured_event_background_image', 'option');
      $featured_event_bg_css = get_field('featured_event_background_image_css', 'option');
    ?>
    <div class="event-hilight" style="background-image:url(<?php echo esc_url($featured_event_bg_image['url']); ?>);<?php echo esc_url($featured_event_bg_css); ?>">
      <div class="event-hilight-caption">
        <h2><?php the_field('featured_event_title', 'option'); ?></h2>
        <?php the_field('featured_event_description', 'option'); ?>
        <?php 
          $featured_event_link = get_field('featured_event_link', 'option'); 
          if($featured_event_link): ?>
            <a href="<?php echo esc_url($featured_event_link['url']); ?>" class="btn-main"><?php echo esc_html($featured_event_link['title']); ?></a>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php
    $hero_image = get_field('hero_image');
    $hero_image_css = get_field('hero_image_css');
    if(!$hero_image){
      $hero_image = get_field('hero_default_image', 'option');
      $hero_image_css = get_field('hero_default_image_css', 'option');
    }

    if(is_page('events')){
      $events_page = get_page_by_path('events');
      $events_page_id = $events_page->ID;

      $events_hero_image = get_field('hero_image', $events_page_id);
      if($events_hero_image){
        $hero_image = $events_hero_image;
        $hero_image_css = get_field('hero_image_css', $events_page_id);
      }
    }

    $hero_title = get_field('hero_title');
    if(!$hero_title){
      $hero_title = get_the_title();
    }
  ?>
  <section id="hero" class="<?php if(is_front_page()){ echo 'hp-hero'; } ?>" style="background-image:url(<?php echo esc_url($hero_image['url']); ?>);<?php echo esc_attr($hero_image_css); ?>">
    <div class="container">
      <div class="hero-caption">
        <h1 class="" data-aos="fade-left" data-aos-easing="ease-out" data-aos-delay="750"><?php echo esc_html($hero_title); ?></h1>
        <div data-aos="fade-up" data-aos-easing="ease-out" data-aos-delay="750">
          <p><?php the_field('hero_caption'); ?></p>

          <?php 
            $hero_link_1 = get_field('hero_link_1');
            $hero_link_2 = get_field('hero_link_2');
          ?>
          <?php if($hero_link_1): ?>
            <a href="<?php echo esc_url($hero_link_1['url']); ?>" class="chevron" target="<?php echo $hero_link_1['target'] ? esc_attr($hero_link_1['target']) : '_self'; ?>"><?php echo esc_html($hero_link_1['title']); ?></a>
          <?php endif; if($hero_link_2): ?>
            <a href="<?php echo esc_url($hero_link_2['url']); ?>" class="chevron" target="<?php echo $hero_link_2['target'] ? esc_attr($hero_link_2['target']) : '_self'; ?>"><?php echo esc_html($hero_link_2['title']); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
