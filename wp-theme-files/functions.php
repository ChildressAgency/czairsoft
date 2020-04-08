<?php
add_action('wp_footer', 'show_template');
function show_template() {
  global $template;
  
  if(WP_DEBUG === true){
    print_r($template);
  }
}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn(){
  if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
    wp_enqueue_script('jquery');
  }
}

add_action('wp_enqueue_scripts', 'czairsoft_scripts');
function czairsoft_scripts(){
  wp_register_script(
    'bootstrap-popper',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'czairsoft-scripts',
    get_stylesheet_directory_uri() . '/js/custom-scripts.min.js',
    array('jquery', 'bootstrap-scripts'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('czairsoft-scripts');
}

add_filter('script_loader_tag', 'czairsoft_add_script_meta', 10, 2);
function czairsoft_add_script_meta($tag, $handle){
  switch($handle){
    case 'jquery':
      $tag = str_replace('></script>', ' integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'czairsoft_styles');
function czairsoft_styles(){
  wp_register_style(
    'google-fonts',
    '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,700i,900&display=swap'
  );

  wp_register_style(
    'czairsoft-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('google-fonts');
  wp_enqueue_style('czairsoft-css');
}

add_action('after_setup_theme', 'czairsoft_setup');
function czairsoft_setup(){
  add_theme_support('post-thumbnails');

  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    )
  );

  add_theme_support('editor-styles');
  add_editor_style('style-editor.css');

  register_nav_menus(array(
    'header-nav' => 'Header Navigation',
    'footer-nav' => 'Footer Navigation',
  ));

  load_theme_textdomain('czairsoft', get_stylesheet_directory_uri() . '/languages');
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';

function czairsoft_header_fallback_menu(){ ?>
  <div id="header-nav" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item<?php if(is_front_page()){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url()); ?>" class="nav-link">CZ</a>
      </li>
      <li class="nav-item<?php if(is_page('pricing')){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('pricing')); ?>" class="nav-link">PRICING</a>
      </li>
      <li class="nav-item<?php if(is_page('op-center')){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('op-center')); ?>" class="nav-link">OP CENTER</a>
      </li>
      <li class="nav-item<?php if(is_page('cz-policies')){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('cz-policies')); ?>" class="nav-link">CZ POLICIES</a>
      </li>
      <li class="nav-item<?php if(is_page('about-cz')){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('about-cz')); ?>" class="nav-link">ABOUT CZ</a>
      </li>
      <li class="nav-item<?php if(is_page('cz-faqs')){ echo ' active'; } ?>">
        <a href="<?php echo esc_html(home_url('cz-faqs')); ?>" class="nav-link">CZ FAQs</a>
      </li>
    </ul>
  </div>
<?php }

function czairsoft_footer_fallback_menu(){ ?>
  <nav id="footer-nav" class="">
    <ul class="nav justify-content-center">
      <li class="nav-item<?php if(is_front_page()){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url()); ?>" class="nav-link">CZ</a>
      </li>
      <li class="nav-item<?php if(is_page('pricing')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('pricing')); ?>" class="nav-link">PRICING</a>
      </li>
      <li class="nav-item<?php if(is_page('op-center')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('op-center')); ?>" class="nav-link">OP CENTER</a>
      </li>
      <li class="nav-item<?php if(is_page('cz-policies')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('cz-policies')); ?>" class="nav-link">CZ POLICIES</a>
      </li>
      <li class="nav-item<?php if(is_page('about-cz')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('about-cz')); ?>" class="nav-link">ABOUT CZ</a>
      </li>
      <li class="nav-item<?php if(is_page('cz-faqs')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('cz-faqs')); ?>" class="nav-link">CZ FAQs</a>
      </li>
    </ul>
  </nav>
<?php }