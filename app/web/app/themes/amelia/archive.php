<?php
get_header();
?>

<main class="site-content" role="main">
  <div class="section-inner">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <div class="post-meta">
        <p><?php the_author() ?> on <?php the_date('F, Y') ?> in <?php the_category(', ') ?></p>
      </div>
      <?php the_content() ?>
      <a href="<?php the_permalink() ?>" class="btn">About</a>
    <?php
    }
    ?>
  </div>
</main>
<?php
get_footer();
?>
</body>

</html>