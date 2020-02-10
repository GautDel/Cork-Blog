<?php
function mainFiles()
{
  // Scripts
  wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js", NULL, '1.0', true);
  wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js", NULL, '1.0', true);
  wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js", NULL, '1.0', true);
  wp_enqueue_script('main-js', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);


  // Styles
  wp_enqueue_style('bootstrap_css', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
  wp_enqueue_style('montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap");
  wp_enqueue_style('main_theme_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mainFiles');




function features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('comment-list', 'comment-forum', "search-form", 'gallery', 'caption'));
}

add_action('after_setup_theme', 'features');

// change comment form fields order
add_filter('comment_form_fields', 'mo_comment_fields_custom_order');
function mo_comment_fields_custom_order($fields)
{
  $comment_field = $fields['comment'];
  $author_field = $fields['author'];
  $email_field = $fields['email'];
  $url_field = $fields['url'];
  unset($fields['author']);
  unset($fields['email']);
  unset($fields['url']);
  // the order of fields is the order below, change it as needed:
  $fields['author'] = $author_field;
  $fields['email'] = $email_field;
  $fields['comment'] = $comment_field;
  $fields['url'] = $url_field;
  // done ordering, now return the fields:
  return $fields;
}
function mo_comment_fields_custom_html($fields)
{
  // then re-define them as needed:
  $fields = [
    'author' => '<p class="comment-form-author">' .
      '<input id="author" name="author" type="text" placeholder="Name" class="form-control mt-4"' . esc_attr($commenter['comment_author']) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
    'email'  => '<p class="comment-form-email">' .
      '<input class="form-control mt-4" id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text" placeholder="Email"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
  ];
  // done customizing, now return the fields:
  return $fields;
}
add_filter('comment_form_default_fields', 'mo_comment_fields_custom_html');
