<?php get_header() ?>
<!-- Page Content -->
<div class="container-fluid">
    
      <div class="row">
   <div class="tintucgv">
	   <h3>CẢM HỨNG, ĐỔI MỚI VÀ KHÁM PHÁ</h3>
       <h1>VỀ ACADEMIA VIET NAM </h1>
       
        <?php mini_blog_breadcrumbs() ?>
      </div>
    </div>
    </div>
  <div class="container">
    
      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12 tintuc">
          
          <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

            <?php endwhile; ?>

          <?php endif; ?>

          <!-- Pagination -->


		
        </div>
		   <?php mini_blog_pagination() ?>
 
  

      </div>
      <!-- /.row -->

  </div>


<!-- /.container -->
<?php get_footer() ?>
