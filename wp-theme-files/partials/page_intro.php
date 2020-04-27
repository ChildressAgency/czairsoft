<?php
  if(have_posts()){
    while(have_posts()){
      the_post();
      echo '<article class="page-content">';
        echo '<h2>' . esc_html(get_field('page_title')) . '</h2>';
        the_content();
      echo '</article>';
    }
  }
?>