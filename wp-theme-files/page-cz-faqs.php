<?php get_header(); ?>
  <main id="main">
    <section id="faqs" class="textured-bg">
      <div class="container">
        <?php get_template_part('partials/page_intro'); ?>

        <?php if(have_rows('faqs')): ?>
          <div id="accordion" class="accordion accordion-alt">
            <?php $q = 0; while(have_rows('faqs')): the_row(); ?>

              <div class="card">
                <div id="question-<?php echo $q; ?>" class="card-header">
                  <h4 class="stylized">
                    <button class="btn-faq collapsed" type="button" data-toggle="collapse" data-target="#answer-<?php echo $q; ?>" aria-expanded="false" aria-controls="answer-<?php echo $q; ?>"><?php the_sub_field('question'); ?></button>
                  </h4>
                </div>
                <div id="answer-<?php echo $q; ?>" class="collapse" aria-labelledby="question-<?php echo $q; ?>" data-parent="#accordion">
                  <div class="card-body">
                    <?php the_sub_field('answer'); ?>
                  </div>
                </div>
              </div>
            
            <?php $q++; endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php get_footer();