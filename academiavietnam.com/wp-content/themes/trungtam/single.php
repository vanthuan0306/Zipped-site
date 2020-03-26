<?php get_header() ?>
<!-- Page Content -->
  <div class="container-fluid">
    
      <div class="row">
        <!-- Blog Entries Column -->
	<div class="tintucgv">
		<div class="chitiet-new">
       <h1>TIN TỨC</h1>
        <?php mini_blog_breadcrumbs() ?>
      </div>
		  </div>
        <div class="col-md-12 chitiet">

          <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content-single', get_post_format() ); ?>

            <?php endwhile; ?>

          <?php endif; ?>

        </div>

      

      </div>
      <!-- /.row -->

  </div>

<!-- /.container -->
<?php get_footer() ?>
