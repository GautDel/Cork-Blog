<div class="container d-flex justify-content-end">
  <div class="col-lg-5">
    <form action="<?php echo home_url('/') ?>" method="get" role="search" class="input-group">
      <input type="search" class="form-control rounded" placeholder="Search for..." value="<?php echo get_search_query() ?>" name="s" title="Search">
      <span class="input-group-btn">
        <input class="btn btn-custom ml-3 px-3 py-1" type="submit" value="Go!" />
      </span>
    </form>
  </div>
</div>