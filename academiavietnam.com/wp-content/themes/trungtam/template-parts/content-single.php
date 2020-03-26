<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<!-- Title -->
	<h1 class="mt-4"><?php the_title() ?></h1><br>
	<!-- Date/Time -->
	<p> <?php echo get_the_date('g:i ') ?>  <?php echo get_the_date('m/d/Y') ?></p>

	<!-- Post Content -->
	<?php the_content() ?>

	<!-- Tags -->
	<?php the_tags() ?>
	<!-- Related Post -->

	<!-- Commnets -->
	<hr>
	<div class="mt-3">
		<h2>BÌNH LUẬN</h2>
		<?php 
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		?>
	</div>
</article>