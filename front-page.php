<?php get_header(); ?>
<div class="container mt-5">
  <div id="carousel" class="carousel slide carousel-fade shadow" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <?php
      $count = 0;
      $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3,
        'post_status' => 'publish'
      ));
      foreach ($recent_posts as $post) :
        $count++;
        ?>
        <div class="<?php if ($count == 1) : ?>
        <?php echo "carousel-item active" ?>
        <?php else : ?>
        <?php echo "carousel-item" ?>
        <?php endif; ?>">
          <img class="h-100 w-100" src="<?php echo get_the_post_thumbnail_url($post["ID"], array(300, 300)) ?>" alt="First slide">
          <div class="carousel-caption">
            <h3 class="h3-responsive"><?php echo $post["post_title"] ?></h3>
            <p><?php echo $post["post_excerpt"] ?></p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container py-5 justify-content-center">
  <h1 class="display-5 text-center mt-5 mb-3">Recent Posts</h1>
  <div class="row">
    <?php
    $recent_posts = wp_get_recent_posts(array(
      'numberposts' => 3, // Number of recent posts thumbnails to display
      'post_status' => 'publish' // Show only the published posts
    ));
    foreach ($recent_posts as $post) : ?>
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card my-5 shadow">
          <img class="card-img-top shadow" src="<?php echo get_the_post_thumbnail_url($post["ID"], array(300, 300)) ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $post["post_title"]; ?></h5>

            <p class="card-text"><?php echo $post["post_excerpt"]; ?></p>
          </div>
          <div class="card-body text-right">
            <a href="<?php echo $post["guid"] ?>" class="btn btn-custom shadow-lg">Read More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<?php get_footer(); ?>