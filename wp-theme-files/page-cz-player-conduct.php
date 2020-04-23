<?php get_header(); ?>
  <main id="main">
    <section id="agreement-page-title">
      <div class="container">
        <h2><?php the_field('page_title'); ?></h2>
      </div>
    </section>

    <section id="agreement-message">
      <div class="container">
        <h3 class="mixed-message"><?php the_field('intro_message'); ?></h3>
      </div>
    </section>

    <section id="agreement-rules">
      <div class="container-fluid">
        <?php the_field('rules_intro'); ?>
        <?php get_template_part('partials/page_intro'); ?>

        <div class="row">
          <div class="col-lg-8">
            <?php if(have_rows('rules')): ?>
              <div id="rules-accordion" class="accordion">
                <?php $r = 1; while(have_rows('rules')): the_row(); ?>

                  <div class="card">
                    <div id="header-rule-<?php echo $r; ?>" class="card-header">
                      <h3>
                        <button class="btn-faq collapsed" type="button" data-toggle="collapse" data-target="#rule-<?php echo $r; ?>" aria-expanded="false" aria-controls="rule-<?php echo $r; ?>">Rule <?php echo $r; ?></button>
                      </h3>
                    </div>
                    <div id="rule-<?php echo $r; ?>" class="collapse" aria-labelledby="header-rule-<?php echo $r; ?>" data-parent="#rules-accordion">
                      <div class="card-body">
                        <?php the_sub_field('rule'); ?>
                      </div>
                    </div>
                  </div>

                <?php $r++; endwhile; ?>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-large.png" class="img-fluid d-block mx-auto" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="final-statement">
      <div class="container">
        <?php the_field('after_rules_statement'); ?>
      </div>
    </section>
  </main>
<?php get_footer();