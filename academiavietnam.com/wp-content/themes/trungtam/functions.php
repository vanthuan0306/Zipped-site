<?php
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	require_once get_template_directory() . '/widgets/mini_blog_widget_latest_post.php';

	// Thêm widget Bài viết mới nhất
	function mini_blog_load_widget_latest_post() {
	    register_widget( 'mini_blog_latest_post' ); // gọi ID widget
	}
	add_action( 'widgets_init', 'mini_blog_load_widget_latest_post' );

	
	// Thêm ảnh đại diện
	add_theme_support( 'post-thumbnails' );

	// Ảnh này sẽ hiện ở ngoài blog
	add_image_size('blog-thumbnail',700, 350, true);

	// Ảnh này sẽ hiện ở trong post
	add_image_size('post-large',900, 600, true);

	add_image_size('post-small',250, 200, true);
	

	// Khai báo menu
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' )); // đặt tên là Header Menu
	}
	add_action( 'init', 'register_my_menu' );

	// Khai báo sidebar
	function mini_blog_widgets_init() {
	    register_sidebar( array(
	        'name'			=> __( 'custom2', 'sidebar-mini' ),
	        'id' 			=> 'sidebar-mini',
	        'description' 	=> __( 'Ở đây sẽ chứa những widget của Mini Blog', 'sidebar-mini' ),
	        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="card-header">',
			'after_title'   => '</h5>',
	    ) );
	}
	add_action( 'widgets_init', 'mini_blog_widgets_init' );
	function mini_blog_widgets_init1() {
	    register_sidebar( array(
	        'name'			=> __( 'custom3', 'sidebar-mini1' ),
	        'id' 			=> 'sidebar-mini1',
	        'description' 	=> __( 'Ở đây sẽ chứa những widget của Mini Blog', 'sidebar-mini1' ),
	        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="card-header">',
			'after_title'   => '</h5>',
	    ) );
	}
	add_action( 'widgets_init', 'mini_blog_widgets_init1' );
function mini_blog_widgets_init2() {
	    register_sidebar( array(
	        'name'			=> __( 'custom1', 'sidebar-mini2' ),
	        'id' 			=> 'sidebar-mini2',
	        'description' 	=> __( 'Ở đây sẽ chứa những widget của Mini Blog', 'sidebar-mini2' ),
	        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="card-header">',
			'after_title'   => '</h5>',
	    ) );
	}
	add_action( 'widgets_init', 'mini_blog_widgets_init2' );

	// Tạo Paginate
	function mini_blog_pagination() {
		global $wp_query;

		$pages = paginate_links( array(
				'format' 		=> '?paged=%#%',
				'current' 		=> max( 1, get_query_var('paged') ),
				'total' 		=> $wp_query->max_num_pages,
				'type'  		=> 'array',
				'prev_next'   	=> true,
				'prev_text'    	=> __('« Trước'),
				'next_text'    	=> __('Sau »'),
			)
		);

		if( is_array( $pages ) ) {
			$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
			$pagination = '<ul class="pagination justify-content-center mb-4">';
			foreach ( $pages as $page ) {
				$pagination .= "<li class='page-item'>$page</li>";
			}
			$pagination .= '</ul>';
		
			echo $pagination;
			
		}
	}

	// Tạo Breadcrumbs
	function mini_blog_breadcrumbs() {
		if(!is_home()) {
			echo '<nav class="breadcrumb">';
				echo '<div class="container">';

				echo '<a class="breadcrumb-item" href="'.home_url('/').'">Trang chủ</a>';
				if (is_category() || is_single()) {

					$categories = wp_get_post_terms( get_the_id(), 'category' );

					if ( $categories ):
					    foreach ( $categories as $category ): ?>
					        <a href="<?php echo get_term_link( $category->term_id, 'category' ); ?>" class="breadcrumb-item"><?php echo $category->name; ?></a>
					    <?php endforeach;
					endif;

					if (is_single()) {
						the_title('<span class="breadcrumb-item active">','</span>');
					}
				} elseif (is_page()) {
					the_title('<span class="breadcrumb-item active">','</span>');
				} elseif (is_tag()) {
					echo '<span class=">breadcrumb-item active">Thẻ</span>';
				} elseif (is_search()) {
					echo '<span class=">breadcrumb-item active">Tìm kiếm</span>';
				} elseif (is_author()) {
					echo '<span class=">breadcrumb-item active">Tác giả</span>';
				} elseif (is_archive()) {
					echo '<span class=">breadcrumb-item active">Lưu trữ</span>';
				}else{
					echo '<span class=">breadcrumb-item active">Error 404</span>';
				}

				echo '</div>';
			echo '</nav>';
		}
	}

	function dd($code)
	{
		echo "<pre>";
			print_r($code);
		echo "</pre>";
	}

	// Tạo related posts
	function mini_blog_related_post($title = 'Bài viết liên quan', $count = 5) {

		global $post;
		$tag_ids = array();
		$current_cat = get_the_category($post->ID);
		$current_cat = $current_cat[0]->cat_ID;
		$this_cat = '';
		$tags = get_the_tags($post->ID);
		if ( $tags ) {
			foreach($tags as $tag) {
				$tag_ids[] = $tag->term_id;
			}
		} else {
			$this_cat = $current_cat;
		}

		$args = array(
			'post_type'   => get_post_type(),
			'numberposts' => $count,
			'orderby'     => 'rand',
			'tag__in'     => $tag_ids,
			'cat'         => $this_cat,
			'exclude'     => $post->ID
		);
		$related_posts = get_posts($args);

		if ( empty($related_posts) ) {
			$args['tag__in'] = '';
			$args['cat'] = $current_cat;
			$related_posts = get_posts($args);
		}
		if ( empty($related_posts) ) {
			return;
		}
		$post_list = '';
		foreach($related_posts as $related) {

			$post_list .= '<div class="media mb-4 ">';
			  $post_list .= '<img class="mr-3 img-thumbnail" style="width: 150px" src="'.get_the_post_thumbnail_url($related->ID, 'post-small').'" alt="Generic placeholder image">';
			  	$post_list .= '<div class="media-body align-self-center">';
			    	$post_list .= '<h5 class="mt-0"><a href="'.get_permalink($related->ID).'">'.$related->post_title.'</a></h5>';
			    	$post_list .= get_the_category( $related->ID )[0]->cat_name;

			  $post_list .= '</div>';
			$post_list .= '</div>';
		}

		return sprintf('
			<div class="card my-4">
				<h4 class="card-header">%s</h4>
				<div class="card-body">%s</div>
			</div>
		', $title, $post_list );
	}

	// Trả nội dung bình luận
	function mini_blog_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>
		<div class="media mb-4">
			<?php echo '<div class="col-md-1 col-xs-2"><img class="d-flex mr-3 rounded-circle" src="'.get_avatar_url($comment).'" style="width: 60px;"></div>' ?>
			<div class="media-body1">
				<?php echo  '<h5 class="mt-0 mb-0"><a rel="nofllow" href="'.get_comment_author_url().'">'.get_comment_author().'</a> </h5>' ?>
				<p class="mt-1">
					<?php comment_text() ?>
				</p>
				<h5><?php echo '<small>'.get_comment_date().' - '.get_comment_time().'</small>'?></h5>
				<div class="reply">
				    <?php comment_reply_link(array_merge( $args, array('reply_text' => 'Trả lời','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div>
			</div>
		</div>
		<?php endif;
	}
	function mini_blog_custom_logo_setup() {
    $defaults = array(
        'height'      => 120,
        'width'       => 370,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'mini_blog_custom_logo_setup' );
	add_action( 'init', 'register_my_menu' );
	function register_my_menu1() {
      register_nav_menu('header1-menu',__( 'Header1 Menu' )); // đặt tên là Header Menu
    }
    add_action( 'init', 'register_my_menu1' );
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
foreach( (array) get_the_category() as $cat )
{
if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
if($cat->parent)
{
$cat = get_the_category_by_ID( $cat->parent );
if ( file_exists(TEMPLATEPATH . "/single-cat-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-cat-{$cat->slug}.php";
}
}
return $t;
}
include 'inc/icon_socail.php';
include 'inc/info_address.php';
include 'inc/info_footer.php';






















