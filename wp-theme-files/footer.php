  <footer id="footer">
    <div class="container-fluid">
      <a href="<?php echo esc_url(home_url()); ?>" class="footer-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-fluid d-block mx-auto" alt="logo" />
      </a>
      <div class="row">
        <div class="col-lg-2">
          <h4>Contact Us</h4>
          <?php
            $email = get_field('email', 'option');
            $phone = get_field('phone' , 'option');
          ?>
          <p><a href="<?php echo esc_url('mailto:' . $email); ?>"><?php echo esc_html($email); ?></a><br /><a href="<?php echo esc_url('tel:' . $phone); ?>"><?php echo esc_html($phone); ?></a></p>
        </div>
        <div class="col-lg-8">
          <h4>Hours of Operation</h4>
          <?php if(have_rows('hours', 'option')): ?>
            <div class="hours">
              <p>
                <?php while(have_rows('hours', 'option')): the_row(); ?>
                  <span><?php the_sub_field('day'); ?>:</span> <?php the_sub_field('time'); ?><br />
                <?php endwhile; ?>
              </p>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-lg-2">
          <h4>Location</h4>
          <p><?php the_field('address', 'option'); ?>, <?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?> <?php the_field('zip', 'option'); ?></p>
        </div>
      </div>

      <?php
        $footer_nav_args = array(
          'theme_location' => 'footer-nav',
          'menu' => '',
          'container' => 'nav',
          'container_id' => 'footer-nav',
          'container_class' => '',
          'menu_id' => '',
          'menu_class' => 'nav justify-content-center',
          'echo' => true,
          'fallback_cb' => 'czairsoft_footer_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new WP_Bootstrap_Navwalker()
        );
        wp_nav_menu($footer_nav_args);
      ?>

      <div class="disclaimer">
        <?php the_field('footer_disclaimer', 'option'); ?>
      </div>

      <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> by CZ Airsoft, LLC</p>
        <p>website created by <a href="https://childressagency.com" target="_blank">Childress Agency</a></p>
      </div>
    </div>
  </footer>

  <?php get_template_part('partials/sprites.svg'); ?>
  <?php wp_footer(); ?>
</body>
</html>