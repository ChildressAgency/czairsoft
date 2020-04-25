<?php get_header(); ?>
  <main id="main">
    <section id="welcome" class="textured-bg">
      <div class="container-fluid">
        <div class="welcome-header">
          <h2><span>Welcome to</span>CZ Airsoft</h2>
        </div>

        <div class="row">
          <div class="col-lg-5">
            <?php 
              $intro_img = get_field('intro_section_image');
              if($intro_img): ?>
                <img src="<?php echo esc_url($intro_img['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($intro_img['alt']); ?>" data-aos="zoom-in" data-aos-easing="ease-out" />
            <?php endif; ?>
          </div>
          <div class="col-lg-7">
            <article data-aos="fade-right" data-aos-easing="ease-out">
              <?php the_field('intro_section_content'); ?>
            </article>
          </div>
        </div>
      </div>
      <div class="shadow-battle"></div>
    </section>

    <section id="duty-calls">
      <div class="container-fluid">
        <h3 data-aos="fade-up" data-aos-easing="ease-out"><?php the_field('duty_calls_section_title'); ?></h3>
        <div class="row">
          <div class="col-md-4">

            <div class="flip-card" data-aos="fade-up" data-aos-easing="ease-out">
              <div class="flip-card-inner">
                <?php 
                  $card_1_img = get_field('duty_calls_card_1_image');
                  $card_1_title = get_field('duty_calls_card_1_title');
                  $card_1_link = get_field('duty_calls_card_1_link');
                ?>
                <div class="flip-card-front" style="background-image:url(<?php echo esc_url($card_1_img['url']); ?>);">
                  <div class="flip-card-caption" data-aos="fade-in" data-aos-easing="ease-out" data-aos-delay="500">
                    <h4><?php echo esc_html($card_1_title); ?></h4>
                    <a href="<?php echo esc_url($card_1_link['url']); ?>" class="btn-main"><?php echo esc_html($card_1_link['title']); ?></a>
                  </div>
                  <div class="overlay"></div>
                </div>

                <div class="flip-card-back" style="background-image:url(<?php echo esc_url($card_1_img['url']); ?>);">
                  <div class="flip-card-caption">
                    <h4><?php echo esc_html($card_1_title); ?></h4>
                    <a href="<?php echo esc_url($card_1_link['url']); ?>" class="btn-main"><?php echo esc_html($card_1_link['title']); ?></a>
                  </div>
                  <div class="overlay dark-overlay"></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="flip-card" data-aos="fade-up" data-aos-easing="ease-out">
              <div class="flip-card-inner">
                <?php
                  $card_2_img = get_field('duty_calls_card_2_image');
                  $card_2_title = get_field('duty_calls_card_2_title');
                  $card_2_link = get_field('duty_calls_card_2_link');
                ?>
                <div class="flip-card-front" style="background-image:url(<?php echo esc_url($card_2_img['url']); ?>);">
                  <div class="flip-card-caption" data-aos="fade-in" data-aos-easing="eas-out" data-aos-delay="500">
                    <h4><?php echo esc_html($card_2_title); ?></h4>
                    <a href="<?php echo esc_url($card_2_link['url']); ?>" class="btn-main"><?php echo esc_html($card_2_link['title']); ?></a>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="flip-card-back" style="background-image:url(<?php echo esc_url($card_2_img['url']); ?>);">
                  <div class="flip-card-caption">
                    <h4><?php echo esc_html($card_2_title); ?></h4>
                    <a href="<?php echo esc_url($card_2_link['url']); ?>" class="btn-main"><?php echo esc_html($card_2_link['title']); ?></a>
                  </div>
                  <div class="overlay dark-overlay"></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4">

            <div class="flip-card" data-aos="fade-up" data-aos-easing="ease-out">
              <div class="flip-card-inner">
                <?php
                  $card_3_img = get_field('duty_calls_card_3_image');
                  $card_3_title = get_field('duty_calls_card_3_title');
                  $card_3_link = get_field('duty_calls_card_3_link');
                ?>
                <div class="flip-card-front" style="background-image:url(<?php echo esc_url($card_3_img['url']); ?>);">
                  <div class="flip-card-caption" data-aos="fade-in" data-aos-easing="ease-out" data-aos-delay="500">
                    <h4><?php echo esc_html($card_3_title); ?></h4>
                    <a href="<?php echo esc_url($card_3_link['url']); ?>" class="btn-main"><?php echo esc_html($card_3_link['title']); ?></a>
                  </div>
                  <div class="overlay"></div>
                </div>
                <div class="flip-card-back" style="background-image:url(<?php echo esc_url($card_3_img['url']);?>);">
                  <div class="flip-card-caption">
                    <h4><?php echo esc_html($card_3_title); ?></h4>
                    <a href="<?php echo esc_url($card_3_link['url']); ?>" class="btn-main"><?php echo esc_html($card_3_link['title']); ?></a>
                  </div>
                  <div class="overlay dark-overlay"></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <?php
      $video = get_field('homepage_video');
      $video_title = get_field('homepage_video_title');
      if($video): ?>
        <?php $video = str_replace('></iframe>', ' class="embed-responsive-item"></iframe>', $video); ?>
        <section id="video">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="video">
                  <div class="embed-responsive embed-responsive-16by9">
                    <?php echo $video; ?>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <h3 class="bordered-title rotate-10" data-aos="zoom-out" data-aos-easing="linear"><?php echo esc_html($video_title); ?></h3>
              </div>
            </div>
          </div>
        </section>
    <?php endif; ?>

    <?php $event_bg_img = get_field('coming_events_section_image'); ?>
    <section id="events" style="background-image:url(<?php echo esc_url($event_bg_img['url']); ?>); <?php the_field('coming_events_section_image_css'); ?>">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 offset-lg-6">
            <h2><?php the_field('coming_events_section_title'); ?></h2>
            <?php the_field('coming_events_section_content'); ?>
            <?php $coming_events_link = get_field('coming_events_section_link'); ?>
            <a href="<?php echo esc_url($coming_events_link['url']); ?>" class="btn-main"><?php echo esc_html($coming_events_link['title']); ?></a>
          </div>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section id="waiver">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="waivers-content">
              <h3 class="bordered-title rotate-neg2 mb-5"><?php the_field('waivers_section_title'); ?></h3>
              <p><?php the_field('waivers_section_description'); ?></p>
              <?php $waivers_link = get_field('waivers_section_link'); ?>
              <a href="<?php echo esc_url($waivers_link['url']); ?>" class="btn-main"><?php echo esc_html($waivers_link['title']); ?></a>
              <br />
              <h3 class="bordered-title rotate-neg5 mt-5 mb-4"><?php the_field('swag_section_title'); ?></h3>
              <?php
                $swag_link_1 = get_field('swag_section_link_1');
                $swag_link_2 = get_field('swag_section_link_2'); 
              ?>
              <?php if($swag_link_1): ?>
                <a href="<?php echo esc_url($swag_link_1['url']); ?>" class="chevron"><?php echo esc_html($swag_link_1['title']); ?></a>
              <?php endif; if($swag_link_2): ?>
                <a href="<?php echo esc_url($swag_link_2['url']); ?>" class="chevron"><?php echo esc_html($swag_link_2['title']); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-md-4 offset-md-3 d-flex align-items-center justify-content-center">
            <div class="videos-content">
              <h2>CZ Videos</h2>
              <?php $videos_link = get_field('videos_link'); ?>
              <a href="<?php echo esc_url($videos_link['url']); ?>" class="youtube-follow"><?php echo esc_html($videos_link['title']); ?></a>
            </div>
          </div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/soldier-pointing-gun.png" class="waiver-soldier" alt="" data-aos="fade-up" data-aos="ease-out" />
        </div>
      </div>
    </section>

    <section id="travel-team">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="travel-team-content">
              <h4 class="brackets"><?php the_field('travel_team_section_title'); ?></h4>
              <?php the_field('travel_team_section_content'); ?>
            </div>
          </div>
          <div class="col-md-5">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spray-painted-star.png" class="spray-painted-star" alt="" />
          </div>
        </div>
      </div>
    </section>

  <?php 
    if(have_rows('safety_carousel')):

      $safety_img = get_field('safety_section_image');
      $safety_img_css = get_field('safety_section_image_css'); ?>

      <section id="safety" style="background-image:url(<?php echo esc_url($safety_img['url']); ?>); <?php echo esc_attr($safety_img_css); ?>">
        <div class="container">
          <div id="safety-carousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators">
              <?php $i = 0; while(have_rows('safety_carousel')): the_row(); ?>
                <li data-target="#safety-carousel" data-slide-to="<?php echo $i; ?>"<?php if($i == 0){ echo ' class="active"'; } ?>></li>
              <?php $i++; endwhile; ?>
            </ol>

            <div class="carousel-inner">

              <?php $c = 0; while(have_rows('safety_carousel')): the_row(); ?>
                <div class="carousel-item<?php if($c == 0){ echo ' active'; } ?>">
                  <div class="caption">
                    <h3><?php the_sub_field('slide_title'); ?></h3>
                    <?php the_sub_field('slide_content'); ?>
                  </div>
                </div>
              <?php $c++; endwhile; ?>

            </div><?php //.carousel-inner ?>
          </div><?php //.carousel ?>
        </div><?php //.container ?>
        <div class="overlay"></div>
      </section>
    <?php endif; ?>
  </main>
<?php get_footer();