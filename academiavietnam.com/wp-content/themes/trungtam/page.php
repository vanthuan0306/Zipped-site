<?php get_header() ?>
<!-- Page Content -->
 <div class="container-fluid">
    
      <div class="row">
   <div class="gioithieu">
	   <h3>CẢM HỨNG, ĐỔI MỚI VÀ KHÁM PHÁ</h3>
       <h1>ĐỘI NGŨ GIÁO VIÊN </h1>
       
        <?php mini_blog_breadcrumbs() ?>
      </div>
    </div>
    </div>
  <div class="container-fluid">
    
      <div class="row">

        <!-- Blog Entries Column -->

          <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content-page', get_post_format() ); ?>

            <?php endwhile; ?>

          <?php endif; ?>

        </div>


      </div>
      <!-- /.row -->

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
<!-- /.container -->
<?php get_footer() ?>
