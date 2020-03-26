<div class="col-md-6 col-xs-6">
    <div class="post-img">   
      <?php the_post_thumbnail() ?></div>
      <div class="media-body">
    <a href="<?php the_permalink(); ?>">
       <h2 class="card-title"><?php the_title() ?></h2></a>
        <h5><?php echo get_the_date() ?>  </h5>
        <p><?php the_excerpt(); // Lấy mô tả ngắn của bài post ?></p>
      </div>
</div>