<!DOCTYPE html>
<html <?php language_attributes() ?> >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>
        <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
        } else{
        echo wp_title('');
      }?>
    </title>

    <?php if (is_home()): ?> <!-- Khi ở trang chủ -->
        <meta name="description" content="<?php bloginfo('description') ?>" />
    <?php elseif(is_single()): ?> <!-- Khi ở trang bài viết -->
        <meta name="description" content="<?php echo get_field('seo_description'); ?>" />
        <meta name="keywords" content="<?php echo get_field('seo_keywords'); ?>" />
    <?php endif ?>

    <!-- Bootstrap core CSS -->
 
    <!-- Custom styles for this template -->
	  <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/css/blog-home.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">  
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php wp_head() ?>
  </head>

  <body style="padding-top: 0" <?php body_class() ?> >
    <div class="well">
		<div class="row">
      <div class="container">
		  <div class="col-md-6 song-ngu col-xs-4">
		  	<?php dynamic_sidebar('smartslider_area_1'); ?>
		  </div>
        <div class="col-md-6 time">
        <p> Giờ làm việc: 9h – 21h Thứ 2 – Thứ 7; 9h – 18h Chủ Nhật  </p>
		  </div></div></div></div>
<div class="container">
  <div class="header-top">
  <div class="col-md-6">
    <a class="rd-navbar-brand" href="<?php echo home_url() ?>"> <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
         the_custom_logo();
        }

      ?></a>
  </div>
   <div class="col-md-3 col-sm-6 col-xs-6 header1">
    <div class="col-md-4 col-xs-4 col-sm-4 icon-modern dienthoai">
    <span><i class="glyphicon glyphicon-earphone"></i></span></div>
    <div class="col-md-8 col-xs-8 col-sm-8 textheader">
     <a href="tel:<?php $urlDienthoai1 = get_theme_mod( 'urlDienthoai1');
                                       if (!empty($urlDienthoai1)){echo $urlDienthoai1;}
                                       ?>"> <p> <?php $Dienthoai1 = get_theme_mod( 'Dienthoai1');
                                       if (!empty($Dienthoai1)){echo $Dienthoai1;}
                                       ?></p>
         <p> <?php $Dienthoai2 = get_theme_mod( 'Dienthoai2');
                                       if (!empty($Dienthoai2)){echo $Dienthoai2;}
                                       ?></p>
		</a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6 header2">
   <div class="col-md-4 col-xs-4 col-sm-4 icon-modern diachi">
    <span><i class="glyphicon glyphicon-map-marker"></i></span></div>
    <div class="col-md-8 col-xs-8 col-sm-8 textheader">
     <p> <?php $Diachi = get_theme_mod( 'Diachi');
                                       if (!empty($Diachi)){echo $Diachi;}
                                       ?></p>
    </div>
  </div>
</div>
</div>
    <nav class="navbar navbar-default" data-toggle="affix">
  <div class="container header-menu">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
		   <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
<form role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
  <div>
    <label class="screen-reader-text" for="s"></label>
    <input type="text" value="" name="s" id="s" /> 
     <button type="submit"><i class="fa fa-search"></i></button>
  </div>
</form>
</div>
</div>
       <i class="glyphicon glyphicon-search" onclick="openSearch()"></i>
<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
		 
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
		<button type="button" class="btn btn-default"><a href="<?php $Link_button = get_theme_mod( 'Link_button');
                                       if (!empty($Link_button)){echo $Link_button;}?>">
			<?php $Button = get_theme_mod( 'Button');
                                       if (!empty($Button)){echo $Button;}
			?></a></button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php 
            wp_nav_menu( array(
                'theme_location'  => 'header-menu', // Gọi menu đã đăng ký trong function
                'depth'           => 2,     // Cấu hình dropdown 2 cấp
                'container'       => false, // Thẻ div bọc menu
                'menu_class'      => 'nav navbar-nav', // Class của nav bootstrap
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
            ) );
          ?>
      </ul>
    </div>
	
  </div><!-- /.container-fluid -->
</nav>
	




