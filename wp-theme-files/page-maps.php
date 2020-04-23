<?php get_header(); ?>
  <main id="main">
    <section id="maps" class="textured-bg">
      <div class="container">
        <?php get_template_part('partials/page_intro'); ?>
      </div>

      <?php if(have_rows('maps')): ?>
        <div id="map-carousel" class="swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php while(have_rows('maps')): the_row(); ?>

              <div class="swiper-slide">
                <?php if(get_sub_field('map_style') == 'image'): ?>

                  <?php $map_image = get_sub_field('map_image'); ?>
                  <img src="<?php echo esc_url($map_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($map_image['alt']); ?>" />
                <?php else: ?>

                  <div class="row no-gutters">
                    <div class="col-lg-6">
                      <div class="embed-responsive embed-responsive-16by9">
                        <?php the_sub_field('google_map_iframe'); ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="text-side">
                        <?php the_sub_field('google_map_description'); ?>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            
            <?php endwhile; ?>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      <?php endif; ?>
    </section>
  </main>
<?php get_footer();