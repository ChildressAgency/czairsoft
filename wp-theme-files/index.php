<?php get_header(); ?>
<main id="main">
  <section id="main-content" class="textured-bg">
    <div class="container">
      <article class="page-content">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();

              if(is_singular()){
                the_content();
              }
              else{
                echo '<div class="loop-summary">';
                  the_excerpt();
                  echo '<a href="' . get_permalink() . '" class="read-more">' . get_the_title() . '</a';
                echo '</div>';
              }
            }
          }
        ?>
      </article>
    </div>
  </section>
</main>
<?php get_footer();