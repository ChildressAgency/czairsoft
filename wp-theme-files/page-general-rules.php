<?php get_header(); ?>
  <main id="main">
    <section id="rules">
      <div class="container">
        <?php get_template_part('partials/page_intro'); ?>

        <?php if(have_rows('general_field_rules')): ?>
          <div id="accordion" class="accordion accordion-main">
            <?php $r = 0; while(have_rows('general_field_rules')): the_row(); ?>

              <div class="card">
                <div id="question-<?php echo $r; ?>" class="card-header">
                  <h4 class="stylized">
                    <a href="#answer-<?php echo $r; ?>" class="btn-faq collapsed" type="button" data-toggle="collapse" data-target="#answer-<?php echo $r; ?>" aria-expanded="false" aria-controls="answer-<?php echo $r; ?>"><?php the_sub_field('rule_title'); ?></a>
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
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php get_footer();