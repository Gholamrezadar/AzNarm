<?php get_header(); ?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1><?php echo the_title();?></h1>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <?php the_post()?>
      <?php echo the_content()?>
    </div>
  </div>

</main>

<?php get_footer(); ?>