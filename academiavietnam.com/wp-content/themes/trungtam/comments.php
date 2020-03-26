<?php if ( have_comments() ) : ?>
	<div class="card cmt">
		<div class="card-body">
			<?php wp_list_comments(['callback' => 'mini_blog_comment']) ?>
		</div>
</div>
<div class="row">
<?php endif; ?>
<?php
	$comments_arg = array(
		'form'	=> array(
			'class' => 'form-horizontal'
			),
		'fields' => apply_filters( 'comment_form_default_fields', 
				array(
					'author' => '<div class="form-group col-md-6 col-xs-6">'.
														'<label for="author">' . __( 'Họ và tên' ) . '</label> ' .
														'<input id="author" name="author" class="form-control" type="text"  size="30" />
													</div>',
					'class' => '<div class="form-group col-md-6 col-xs-6">'.
														'<label for="author">' . __( 'Lớp' ) . '</label> ' .
														'<input id="class" name="class" class="form-control" type="text"  size="30" />
													</div>',
					
					'email' => '<div class="form-group col-md-6 col-xs-6">'.
									'<label for="email">' . __( 'Email' ) . '</label> ' .
									'<input type="email" id="email" name="email" class="form-control" type="text" size="30" />
								</div>',
					
					'phone' => '<div class="form-group col-md-6 col-xs-6">'.
									'<label for="phone">'._( 'Số điện thoại' ) . '</label> ' .
									'<input type="phone" id="phone" name="phone" class="form-control" type="text" size="30" />
								</div>',
					'comment_field'			=> '<div class="form-group col-md-12">' . 
												'<label for="comment">' . __( 'Bình luận' ) . '</label><span>*</span>' .
												'<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true"></textarea>' . 
											'</div>',	
					
					
					)
				),
				'comment_field'			=>'',
				'comment_notes_after' 	=> '',
				'title_reply'			=> 'Viết bình luận',
				'title_reply_to'		=> 'Trả lời bình luận của %s',
				'cancel_reply_link'		=> '( Hủy )',
				'class_submit'			=> 'btn btn-primary',
				'label_submit'			=> 'Gửi'
			); 

	comment_form($comments_arg);
?>
	
</div>
