<?php
get_header();
?>

<main class="site-content" role="main">
  <div class="section-inner">
    <?php
    while (have_posts()) {
      the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
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