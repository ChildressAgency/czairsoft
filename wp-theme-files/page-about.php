<?php get_header(); ?>wp-embed-aspect-16-9 wp-has-aspect-ratio
  <main id="main">
    <section id="philosophy" class="about-statement">
      <div class="container">
        <?php get_template_part('partials/page_intro'); ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spray-painted-star.png" class="spray-painted-star" alt="" />
      </div>
    </section>

    <?php $second_section_background_image = get_field('second_section_background_image'); ?>
    <section id="passion" class="about-statement" style="background-image:url(<?php echo esc_url($second_section_background_image['url']); ?>); <?php the_field('section_section_background_image_css'); ?>">
      <div class="container">
        <h2><?php the_field('second_section_title'); ?></h2>
        <?php the_field('second_section_content'); ?>
      </div>
    </section>

    <section id="vision" class="about-statement">
      <div class="container">
        <h2><?php the_field('third_section_title'); ?></h2>
        <?php the_field('third_section_content'); ?>
      </div>
    </section>

    <section id="jim-bio" class="textured-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">  
            <article class="bio">
              <?php the_field('jims_bio'); ?>
            </article>
          </div>
          <div class="col-lg-7">
            <div class="bio-img">
              <?php 
                $jims_photo = get_field('jims_photo'); 
                if($jims_photo): ?>
                  <img src="<?php echo esc_url($jims_photo['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($jims_photo['alt']); ?>" />
              <?php endif; ?>
              <?php the_field('jims_photo_caption'); ?>
            </div>
          </div>
        </div>  
      </div>
    </section>
  </main>

  <section id="contact">
    <div class="container">
      <h2><?php the_field('contact_form_section_title'); ?></h2>
      <div class="contact-form">
        <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
      </div>
    </div>
  </section>
<?php get_footer();