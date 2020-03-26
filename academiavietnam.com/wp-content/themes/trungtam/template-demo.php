<?php 
/**
*
* Template name: Trang sự kiện
*
*/
?>
<?php get_header() ?>
<!-- Page Content -->

  <div class="container-fluid">
    
      <div class="row">
   <div class="gioithieu">
	   <h3>CẢM HỨNG, ĐỔI MỚI VÀ KHÁM PHÁ</h3>
       <h1>VỀ ACADEMIA VIỆT NAM </h1>
       
        <?php mini_blog_breadcrumbs() ?>
      </div>
    </div>
    </div>
        <!-- Blog Entries Column -->

          <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                 <!-- Title -->
<!-- Date/Time -->


<!-- Post Content -->
<?php the_content() ?>
<!-- Post Content -->
		  <div class="container-fluid new">
			  <div class="row">
			<div class="container">
<div class="col-md-6">
	<div class="hinhanh"> 
    <?php 
  $args = array(
    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
    'post_type' => 'post',
	'cat' => 1,
    'showposts' => 1, // số lượng bài viết
  );
?>
<?php $getposts = new WP_query($args); ?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
  <a href="<?php the_permalink(); ?>">
      <?php echo get_the_post_thumbnail(); ?>
    </a>
    <div class="content1">
     <p><?php echo get_the_date(); // lấy ngày post bài ?></p>
     <h3><a href="<?php the_permalink(); ?>"><?php the_title(); // lấy tiêu đề ?></a></h3></div>
<?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>

<div class="col-md-6 post-text1">
 <?php 
 $vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => 1,
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> 3));
?>
<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
	<div class="post-text">
                     <div class="col-md-3 col-xs-3">
                        <div class="box">
                            <p>
                                <?php 
    $archive_month = get_the_time('m');
    $archive_day   = get_the_time('d'); // lấy ngày post bài ?>
                                    <h3><?php echo get_the_date('d');?></h3>
                                    <p>Tháng
                                        <?php echo get_the_date('m');?>
                                            <p>

                                            </p>
                        </div>                     
    </div>
    <div class="col-md-9">
                      <div class="row baiviet">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); // lấy tiêu đề ?></a></h3>
                        <p>By <?php the_author_posts_link(); ?></p></div></div>
		
	</div><?php endwhile; wp_reset_postdata(); ?>
              
<button class="button"><a href="/category/tin-tuc/">XEM TẤT CẢ</a></button>
    </div> 
</div>
</div></div>
            <?php endwhile; ?>

          <?php endif; ?>
       
</div>
</div>
  <div class="container-fluid paner">
			  <div class="container">
				  <div class="row">
				  <div class="col-md-9 col-sm-9 blod">
					  <p>Tìm hiểu giáo dục, định hướng giáo dục của bạn ngay bây giờ!</p>
				  </div>
				  <div class="col-md-3 col-sm-3">
					  <div class="nut">
						  <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%20settings%3DeyJpZCI6IjE0MTMiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D"><button> ĐĂNG KÝ NGAY</button></a>
				  </div>
			  </div>
				  </div> </div></div>

      <!-- /.row -->

<!-- /.container -->
<?php get_footer() ?>
