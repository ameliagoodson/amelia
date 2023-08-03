<?php
get_header(); ?>
<main class="site-content" role="main">
  <div class="section-inner">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <div class="portfolio-work-section">
        <div>
          <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <p><?php echo wp_trim_words(get_the_content(), 30)  ?></p>
          <a href="<?php the_permalink() ?>" class="btn">Read More</a>
        </div>
        <div>
          <img src="<?php the_post_thumbnail_url() ?>" alt="" class="portfolio-thumbnail">
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</main>

<?php
get_footer();
?>