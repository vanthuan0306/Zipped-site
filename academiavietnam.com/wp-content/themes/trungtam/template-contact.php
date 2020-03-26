<?php 
/**
*
* Template name: Trang Liên hệ
*
*/
?>
<?php get_header() ?>
<!-- Page Content -->
<div class="container-fluid">
    
      <div class="row">
   <div class="lienhe1">
       <h1><?php the_title() ;?> </h1>
       
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

<!-- /.container -->
<?php get_footer() ?>
