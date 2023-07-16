<?php
get_header();

while (have_posts()) {
  the_post(); ?>
  <main class="site-content" role="main">
    <div class="section-inner">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
  </main>
<?php

}

get_footer();
?>