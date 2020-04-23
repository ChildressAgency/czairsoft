<h2><?php the_field('page_title'); ?></h2>
<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      echo '<article class="page-content">';
        the_content();
      echo '</article>';
    }
  }
?>