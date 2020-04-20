<?php get_header(); ?>
<main id="main">
  <section id="main-content" class="textured-bg">
    <div class="container">
      <article class="page-content">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();

              the_content();
            }
          }
        ?>
      </article>
    </div>
  </section>
</main>
<?php get_footer();