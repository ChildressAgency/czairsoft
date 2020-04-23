<?php get_header(); ?>
  <main id="main">
    <section id="op-center" style="background-image: url(../wp-theme-files/images/facemask-helmet.jpg);">
      <div class="container">
        <h2 class="brackets rotate-neg10"><?php the_field('page_title'); ?></h2>
        <div class="row">
          <div class="col-lg-4">
            <?php $directions = get_field('google_directions_link'); ?>
            <a href="<?php echo esc_url($directions['url']); ?>" class="logo-map-link">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-fluid d-block mx-auto" alt="CZ Airsoft Logo" />
              <span class="rotate-5">CLICK FOR DIRECTIONS</span>
            </a>
          </div>
          <div class="col-lg-8">
            <?php the_field('dates_intro'); ?>
            <div id="dates">
              <h2><?php the_field('dates_section_title'); ?></h2>
              <div class="dates-list">
                <?php
                  $current_month = date('m', time());
                  $current_quarter = ceil($current_Month / 3);
                ?>

                <?php if(have_rows('first_quarter_months')): ?>
                  <div class="quarter<?php if($current_quarter == 1){ echo ' current'; } ?>">
                    <h3>1ST QTR</h3>
                    <div class="quarter-months">
                      <?php while(have_rows('first_quarter_months')): the_row(); ?>

                        <div class="quarter-month">
                          <h4><?php the_sub_field('first_quarter_month'); ?></h4>

                          <?php if(have_rows('first_quarter_days')): ?>
                            <ul class="quarter-days">
                              <?php while(have_rows('first_quarter_days')): the_row(); ?>
                                <li><?php the_sub_field('first_quarter_day'); ?></li>
                              <?php endwhile; ?>
                            </ul>
                          <?php endif; ?>
                        </div>

                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if(have_rows('second_quarter_months')): ?>
                  <div class="quarter<?php if($current_quarter == 2){ echo ' current'; } ?>">
                    <h3>2ND QTR</h3>
                    <div class="quarter-months">
                      <?php while(have_rows('second_quarter_months')): the_row(); ?>

                        <div class="quarter-month">
                          <h4><?php the_sub_field('second_quarter_month'); ?></h4>

                          <?php if(have_rows('second_quarter_days')): ?>

                            <ul class="quarter-days">
                              <?php while(have_rows('second_quarter_days')): the_row(); ?>
                                <li><?php the_sub_field('second_quarter_day'); ?></li>
                              <?php endwhile; ?>
                            </ul>

                          <?php endif; ?>
                        </div>

                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if(have_rows('third_quarter_months')): ?>
                  <div class="quarter<?php if($current_quarter == 2){ echo ' current'; } ?>">
                    <h3>3RD QTR</h3>
                    <div class="quarter-months">
                      <?php while(have_rows('third_quarter_months')): the_row(); ?>

                        <div class="quarter-month">
                          <h4><?php the_sub_field('third_quarts_month'); ?></h4>

                          <?php if(have_rows('third_quarter_days')): ?>
                            
                            <ul class="quarter-days">
                              <?php while(have_rows('third_quarter_days')): the_row(); ?>
                                <li><?php the_sub_field('third_quarter_day'); ?></li>
                              <?php endwhile; ?>
                            </ul>

                          <?php endif; ?>
                        </div>
                      
                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>

                <?php if(have_rows('fourth_quarter_months')): ?>
                  <div class="quarter<?php if($current_quarter == 2){ echo ' current'; } ?>">
                    <h3>4TH QTR</h3>
                    <div class="quarter-months">
                      <?php while(have_rows('fourth_quarter_months')): the_row(); ?>

                        <div class="quarter-month">
                          <h4><?php the_sub_field('fourth_quarter_month'); ?></h4>

                          <?php if(have_rows('fourth_quarter_days')): ?>

                            <ul class="quarter-days">
                              <?php while(have_rows('fourth_quarter_days')): the_row(); ?>
                                <li><?php the_sub_field('fourth_quarter_day'); ?></li>
                              <?php endwhile; ?>
                            </ul>

                          <?php endif; ?>
                        </div>

                      <?php endwhile; ?>
                    </div>
                  </div>
                <?php endif; ?>

              </div><!-- .dates-list -->
            </div><!-- #dates -->
          </div><!-- .col-lg-7 -->
        </div><!-- .row -->

        <?php if(have_rows('upcoming_events')): ?>
          <div id="upcoming-events">
            <h3>UPCOMING EVENTS</h3>
            <ul>
              <?php while(have_rows('upcoming_events')): the_row(); ?>
                <li><?php the_sub_field('upcoming_event'); ?></li>
              <?php endwhile; ?>
            </ul>
          </div>
        <?php endif; ?>

      </div><!-- .container -->
    </section>
  </main>
<?php get_footer();