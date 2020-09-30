
<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
		

<div class="container">
	<div class="row boxBlogpage shadow">
	
		
	<!--end col-xs-12 col-sm-8"-->
	<div class="col-xs-12">
	
		<div class="col-xs-12 col-sm-6">
			<div class="singlebox">
			<?php if(has_post_thumbnail()): ?>
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
				<div class="featured-image" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
				<!--<div class="thumbnail-img">
					<?php //the_post_thumbnail('medium'); ?>
					<?php //$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );?>
					<?php //echo '<img width="100%" src="' . $image_src[0] . '">'; ?>
				</div>-->
			<?php endif; ?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="col-xs-12">
				<header class="entry-header">
					<div class=""><?php the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )),'</a></h2>'); ?>
						<small class="text-muted"><?php the_time('F j, Y'); ?> | <?php the_author(); ?><?php //the_category(); ?></small>
						<br />
						
						
					</div>
				</header>
			</div>
			<div class="col-xs-12 lead">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>	
		
	</div><!--end row-->
	
</div>

</article>

	<!--"content" is a generic name. The page can be named anything as long as it fits a format like content.php with content-aside.php could be 'posts.php' and 'posts-aside.php'.-->

