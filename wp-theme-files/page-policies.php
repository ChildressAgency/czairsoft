<?php get_header(); ?>
  <main id="main">
    <section id="policies">
      <div class="container-fluid">
        <?php get_template_part('partials/page_intro'); ?>

        <?php if(have_rows('policy_links')): ?>
          <div class="row">
            <div class="col-md-5">
              <div class="policy-cats">
                <ul id="policy-cats-list" class="nav nav-pills flex-column" role="tablist" aria-orientation="vertical">
                  <?php $i = 0; while(have_rows('policy_links')): the_row(); ?>

                    <?php
                      $policy_link = get_sub_field('policy_link');
                      $policy_slug = sanitize_title($policy_link['title']);
                    ?>
                    <li class="nav-item">
                      <a href="#<?php echo esc_attr($policy_slug); ?>" id="<?php echo esc_attr($policy_slug); ?>-tab" class="nav-link stylized<?php if($i == 0){ echo ' active'; } ?>" data-toggle="pill" role="tab" aria-controls="<?php echo esc_attr($policy_slug); ?>" aria-selected="<?php ($i == 0) ? 'true' : 'false'; ?>"><?php echo esc_html($policy_link['title']); ?></a>
                    </li>

                  <?php $i++; endwhile; ?>
                </ul>
              </div>
            </div>
            <div class="col-md-7">
              <div id="policy-cats-guns" class="tab-content">
                <?php $c = 0; while(have_rows('policy_links')): the_row(); ?>
                  <?php 
                    $policy_link = get_sub_field('policy_link');
                    $policy_slug = sanitize_title($policy_link['title']);
                  ?>
                  <div id="<?php echo esc_attr($policy_slug); ?>" class="tab-pane fade<?php if($c == 0){ echo ' show active'; } ?>" role="tabpanel" aria-labelledby="<?php echo esc_attr($policy_slug); ?>-tab">
                    <a href="<?php echo esc_url($policy_link['url']); ?>" target="<?php echo $policy_link['target'] ? esc_attr($policy_link['target']) : '_self'; ?>">
                      <?php $policy_link_image = get_sub_field('policy_link_image'); ?>
                      <img src="<?php echo esc_url($policy_link_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($policy_link_image['alt']); ?>" />
                    </a>
                  </div>

                <?php $c++; endwhile; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </main>
<?php get_footer();