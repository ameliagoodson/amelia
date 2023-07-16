<?php
get_header(); ?>
<main class="site-content" role="main">
  <div class="section-inner">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <h1><?php the_title() ?></h1>
      <div class="post-meta">
        <p><?php the_author() ?> on <?php the_date('F, Y') ?> in <?php the_category() ?></p>
      </div>
      <p><?php the_content() ?></p>

  </div>
</main>
<?php
    }
    get_footer();
?>