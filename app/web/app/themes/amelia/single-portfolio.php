<?php
get_header()
?>
<main class="site-content" role="main">
  <div class="site-inner">
    <?php while (have_posts()) {
      the_post(); ?>
      <h1><?php the_title() ?></h1>
      <?php the_content()  ?>
      <img src="<?php the_post_thumbnail_url() ?>" alt="" class="portfolio-thumbnail">
    <?php
    } ?>
  </div>
</main>

<?php
get_footer()
?>