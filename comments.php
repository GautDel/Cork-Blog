<?php if (post_password_required()) : ?>
  <?php return; ?>
<?php endif; ?>


<!-- <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-custom">Submit</button>
            </form>
          </div>
        </div> -->
<?php


$comments_args = array(
  // change the title of send button 
  'label_submit' => 'Post Comment',
  // change the title of the reply section
  'title_reply' => 'Write a Reply or Comment',
  // redefine your own textarea (the comment body)
  'comment_field' => '
          <textarea placeholder="Comment" class="form-control mt-4" rows="5" id="comment" name="comment" aria-required="true"></textarea>',
  'submit_button' => '<div class="form-group">
            <input name="%1$s" type="submit" id="%2$s" class="%3$s mt-3 btn btn-custom" value="%4$s" />
        </div>'
);
comment_form($comments_args);
?>
<?php if (have_comments()) : ?>



  <?php

    function format_comment($comment, $args, $depth)
    {
      $GLOBALS['comment'] = $comment; ?>
    <div class="border-top mt-5"></div>

    <div class=" my-3">
      <div class="media-body">
        <div class="comment-intro">
          commented on
          <a class="comment-permalink" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></a>
          by
          <h5 class="mt-0 mb-4"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
          <div>
            <p class="text-muted"><?php _e('This comment is awaiting moderation.') ?></p>
          </div>


        <?php endif; ?>
        <?php comment_text(); ?>
      </div>
      <div class="reply btn btn-custom mt-3">
        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
    </div>



  <?php } ?>

  <div class="comment-list">
    <?php wp_list_comments('type=comment&callback=format_comment'); ?>
  </div>




  <?php if (!comments_open() && get_comments_number()) :  ?>
    <p><?php esc_html_e('Comments Are Closed') ?></p>
  <?php endif; ?>
<?php endif; ?>