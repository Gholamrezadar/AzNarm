<?php get_header(); ?>
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1><?php bloginfo('description'); ?></h1>
      <p class="lead text-muted">
      در این بلاگ میتوانید طرز تهیه فست فودهای مورد علاقه خود را پیدا کنید و آشپز خود باشید 
      </p>
      <p>
        <a href="#" class="btn btn-primary my-2">درخواست آموزش</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="bd-placeholder-img card-img-top" width="100%" height="225">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cheeseburger.jpg" alt="food_pic"/>
            </div>
            
            <div class="card-body">
            <h3><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h3>
              <p class="card-text">
              <?php the_excerpt(); ?>
             </p>
            </div>
          </div>
        </div>
        <?php endwhile; else: ?>
                        غذایی برای نمایش وجود ندارد        
      <?php endif; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>