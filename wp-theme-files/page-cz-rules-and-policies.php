<?php get_header(); ?>
  <main id="main">
    <section id="rules-policies-page-title" class="textured-bg">
      <div class="container">
        <?php get_template_part('partials/page_intro'); ?>
      </div>
    </section>

    <section id="first-rule">
      <div class="container-fluid">
        <div class="text-center">
          <h2 class="brackets brackets-alert"><?php the_field('first_rule_section_title'); ?></h2>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <article>
              <?php the_field('first_rule_section_content'); ?>
            </article>
          </div>
          <div class="col-lg-6">
            <div class="first-rule">
              <h2>Rule 1.</h2>
              <h4><?php the_field('rule_one'); ?></h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php if(have_rows('rules')): ?>
      <section id="rules" class="texture-bg">
        <div class="container">
          <div id="accordion" class="accordion accordion-alt">
            <?php $r = 0; while(have_rows('rules')): the_row(); ?>

              <div class="card">
                <div id="question-<?php echo $r; ?>" class="card-header">
                  <h4 class="stylized">
                    <button class="btn-faq collapsed" type="button" data-toggle="collapse" data-target="#answer-<?php echo $r; ?>" aria-expanded="false" aria-controls="answer-<?php echo $r; ?>"><?php the_sub_field('rule_title'); ?></button>
                  </h4>
                </div>
                <div id="answer-<?php echo $r; ?>" class="collapse" aria-labelledby="question-<?php echo $r; ?>" data-parent="#accordion">
                  <div class="card-body">
                    <?php the_sub_field('rule'); ?>
                  </div>
                </div>
              </div>

            <?php $r++; endwhile; ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php get_footer();