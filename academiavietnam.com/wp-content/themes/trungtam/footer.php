    <footer class="py-5 bg-dark p-font">
     <div class="container-fluid">
      <div class="container">
        <div class="row">
        <div class="col-md-4 col-xs-4"> 
          <div class="footer-logo"><a href="#"><img src="<?php echo get_theme_mod( 'logo' ); ?>" alt=""></a>
                  
                 <?php dynamic_sidebar('sidebar-mini2'); ?></div>
       
    </div>
       <?php get_sidebar() ?>
       <div class="col-md-4 item-footer col-xs-4">
          <?php dynamic_sidebar('sidebar-mini1'); ?>
       </div>
    </div>
  </div><div class="bg-dark1">
     <div class="col-md-5  col-xs-4"><hr class="hr"></div>
  <div class="col-md-2  col-xs-4"> 
   <ul class="nav nav-pills">
                 <?php
          $fb = get_theme_mod( 'Facebook' );
          $tw = get_theme_mod( 'Twitter' );
          $ln = get_theme_mod( 'Linkedin' );
          $gp = get_theme_mod( 'Google-plus' );
          $gp = get_theme_mod( 'pinterest' );

          if(!empty($fb)) {echo '<li><a href="'.$fb.'"><i class="icon fa fa-facebook"></i></a></li>';}
          if(!empty($tw)) {echo '<li><a href="'.$tw.'"><i class="icon fa fa-twitter"></i></a></li>';}
          if(!empty($ln)) {echo '<li><a href="'.$ln.'"><i class="icon fa fa-linkedin"></i></a></li>';}
          if(!empty($gp)) {echo '<li><a href="'.$gp.'"><i class="icon fa fa-google-plus"></i></a></li>';}
           if(!empty($gp)) {echo '<li><a href="'.$gp.'"><i class="icon fa fa-pinterest"></i></a></li>';}
        ?>          </ul> </div>
		 <div class="col-md-5  col-xs-4"><hr class="hr"></div></div></div>
</footer>
    <script src="<?php echo get_template_directory_uri() ?>/css/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script js>
$(document).ready(function() {

  var toggleAffix = function(affixElement, scrollElement, wrapper) {
  
    var height = affixElement.outerHeight(),
        top = wrapper.offset().top;
    
    if (scrollElement.scrollTop() >= top){
        wrapper.height(height);
        affixElement.addClass("affix");
    }
    else {
        affixElement.removeClass("affix");
        wrapper.height('auto');
    }
      
  };
  

  $('[data-toggle="affix"]').each(function() {
    var ele = $(this),
        wrapper = $('<div></div>');
    
    ele.before(wrapper);
    $(window).on('scroll resize', function() {
        toggleAffix(ele, $(this), wrapper);
    });
    
    // init
    toggleAffix(ele, $(window), wrapper);
  });
  
});
</script>


      <!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <?php wp_footer() ?>
  </body>

</html>