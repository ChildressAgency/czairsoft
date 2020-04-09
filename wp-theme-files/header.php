<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title><?php echo esc_html(bloginfo('name')); ?></title>
  <link href="..wp-theme-files/Fonts/dcc_sharp_distress_black_by_dccanim-webfont.woff2" rel="preload" as="font" type="font/woff2" crossorigin="anonymous" />
  <link href="../wp-theme-files/Fonts/dcc_sharp_distress_black_by_dccanim-webfont.woff" rel="preload" as="font" type="font/woff" crossorigin="anonymous" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
    $facebook = get_field('facebook', 'option');
    $twitter = get_field('twitter', 'option');
    $youtube = get_field('youtube', 'option');
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
      <a href="<?php echo esc_url($youtube); ?>" id="youtube" aria=label="YouTube" target="_blank">
        <svg class="social-icon">
          <use xlink:href="#icon-youtube" />
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
            'items_wrap' => '<ul id="%1$s" class=%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new WP_Bootstrap_Navwalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </div>
    </nav>
  </header>

  <?php
    $hero_image = get_field('hero_image');
    $hero_image_css = get_field('hero_image_css');
    if(!$hero_image){
      $hero_image = get_field('hero_default_image', 'option');
      $hero_image_css = get_field('hero_default_image_css', 'option');
    }
  ?>
  <section id="hero" class="<?php if(is_front_page()){ echo 'hp-hero'; } ?>" style="background-image:url(<?php echo esc_url($hero_image); ?>);<?php echo esc_attr($hero_image_css); ?>">
    <div class="container">
      <div class="hero-caption">
        <h1 class="" data-aos="fade-left" data-aos-easing="ease-out" data-aos-delay="750"><?php the_field('hero_title'); ?></h1>
        <div data-aos="fade-up" data-aos-easing="ease-out" data-aos-delay="750">
          <p><?php the_field('hero_caption'); ?></p>

          <?php 
            $hero_link_1 = get_field('hero_link_1');
            $hero_link_2 = get_field('hero_link_2');
          ?>
          <?php if($hero_link_1): ?>
            <a href="<?php echo esc_url($hero_link_1['url']); ?>" class="chevron"><?php echo esc_html($hero_link_1['title']); ?></a>
          <?php endif; if($hero_link_2): ?>
            <a href="<?php echo esc_url($hero_link_2['url']); ?>" class="chevron"><?php echo esc_html($hero_link_2['title']); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </section>
