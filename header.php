<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>Partum Media's Blog</title>
</head>

<body <?php body_class(); ?> class="d-flex flex-column">
  <nav class="navbar navbar-expand-lg navbar-custom shadow-lg navbar-dark">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/nav-logo.png" width="92" height="70" alt="blog-logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php get_search_form(); ?>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item pb-2">
          <a class="nav-link <?php if (is_page("")) echo "nav-active" ?>" id="nav-home" href="<?php echo site_url(); ?>">Home</a>
        </li>
        <li class="nav-item pb-2">
          <a class="nav-link <?php if (is_home()) echo "nav-active" ?>" id="nav-post" href="<?php echo site_url("blog") ?>">Posts</a>
        </li>
        <li class="nav-item pb-2">
          <a class="nav-link" href="https://www.partummedia.com" target="_blank">Website</a>
        </li>
      </ul>

    </div>
  </nav>