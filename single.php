<?php

get_header();

while (have_posts()) : ?>
  <?php the_post(); ?>
  <div class="container container-custom shadow">
    <div class="row mt-5">
      <div class="col-lg-8">
        <h1 class="my-3"><?php the_title(); ?></h1>

        <div class="border-top my-3"></div>

        <p class="">by <a href="#"><?php the_author(); ?></a></p>
        <p>Posted on: <?php the_time('F j, Y'); ?></p>

        <div class="border-top my-3"></div>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url($post, array(300, 300)) ?>" alt="">


        <!-- Post Content -->
        <p><?php the_content(); ?></p>

        <hr>

        <!-- Comments Form -->
        <?php if (comments_open()) : ?>
          <?php comments_template(); ?>
        <?php endif; ?>
      </div>



      <div class="col-md-4">
        <div class="card my-4 ml-lg-5">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <ul class="list-unstyled mb-0 col-md-6">
                <?php echo wp_list_categories(array(
                  "include" => array("2", "3", "4"),
                  "title_li" => "",
                  "style" => "list"
                )); ?>
              </ul>
              <ul class="list-unstyled mb-0 col-md-6">
                <?php echo wp_list_categories(array(
                  "include" => array("5", "6"),
                  "title_li" => "",
                  "style" => "list"
                )); ?>
              </ul>
            </div>
          </div>
        </div>

        <div class="card my-4 ml-5">
          <h5 class="card-header">Social</h5>
          <div class="list-unstyled mb-0 col-md-12 pt-2">
            <p>Come find me on social media!</p>
          </div>

          <ul class="list-unstyled mb-0 col-md-12 pb-3">
            <li class="py-1"><a href="https://www.facebook.com/partumwebdesign/" target="_blank">Facebook</a></li>
            <li class="py-1"><a href="https://github.com/PartumMedia" target="_blank">Github</a></li>
            <li class="py-1"><a href="https://www.linkedin.com/in/gauthier-delalleau/" target="_blank">LinkedIn</a></li>
            <li class="py-1"><a href="https://twitter.com/MediaPartum" target="_blank">Twitter</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
<?php endwhile; ?>

<?php get_footer(); ?>