<?php get_header(); ?>

<div class="container pt-5">
  <div class="container py-5 text-center">
    <h1 class="display-3"><?php echo ucfirst(get_search_query()); ?></h1>
    <p class="lead">A comprehensive list of all blog posts with the word "<?php echo "<span class='neonGreen'>" . get_search_query() . "</span>" ?>"</p>
  </div>
  <div class="container">
    <?php while (have_posts()) : ?>
      <?php the_post() ?>
      <div class="row my-5 justify-content-center row-custom">
        <div class="col-lg-4 col-custom d-flex align-items-center justify-content-center mx-lg-2 mb-lg-5">
          <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post) ?>" alt="<?php echo the_post_thumbnail_caption($post) ?>">
        </div>

        <div class="col-lg-4 col-custom mx-lg-3 mt-lg-5">
          <div class="col-12 justify-con">
            <h2><?php the_title(); ?></h2>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink() ?>" class="btn btn-custom my-3 float-right">Read More</a>
          </div>


        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>





<?php get_footer(); ?>