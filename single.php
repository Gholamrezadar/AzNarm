<?php get_header(); ?>
<?php the_post()?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1><?php echo the_title()?></h1>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
        <div class="row" style="padding:8px">
            
            <?php if ( has_post_thumbnail() ):
                 the_post_thumbnail('small_thumbnail'); 
                 else: 
             ?>
                <img src="<?php bloginfo('template_directory'); ?>/img/no-pic.jpg"/>
            <?php endif; ?>
            <div class="post-content">
                <p class="post-details"> نوشته شده توسط <?php the_author(); ?> در <?php the_date(); ?></p>
                <?php the_content()?></div>
            <?php the_tags(" تگ ها :  ")?>

            <?php
            if (comments_open()){
                //comments_template();
            }
            ?>
        </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>