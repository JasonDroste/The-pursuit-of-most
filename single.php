<?php get_header(); ?>
<section class="blog-background">
<div class="container">
	<div class="row" >
		<div class="col-xs-12 col-sm-8 animated fadeInUp">
			<div class="box shadow">
			<?php
				if(have_posts()):
					while(have_posts()): the_post(); ?>
						
						<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
							
								<?php if(has_post_thumbnail()): ?>
									<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
									<div class="featured-image-single" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
										<!--<div class="thumbnail-img">
											<?php //the_post_thumbnail('large'); ?>
											<?php //$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),’thumbnail’ );?>
											<?php //echo '<img width="100%" src="' . $image_src[0] . '">'; ?>
										</div>-->
									
								<?php endif; ?>
								<div>
								<?php the_title('<h3 class="entry-title">','</h3>'); ?>
							</div>
							<div>
								<small class="text-muted"><?php the_time('F j, Y'); ?> | <?php the_author(); ?><?php //the_category(); ?></small>
								<hr />
							</div>
							<div>
								<small>
									<?php //the_category(''); ?> || <?php //the_tags(); ?> || <?php edit_post_link(); ?>
								</small>
								
								<?php the_content(); ?>
							</div>
						<?php //if(comments_open()) { comments_template(); //add comments safely but I really don't want the public to comment on posts
						//} ?>
						</article>
						
					<?php endwhile;
				endif;
				
			?>
			</div>
		</div><!-- end 12/8-->
		<div class="col-xs-12 col-sm-4">
			<div class="sidebarbox shadow animated fadeInRight">
			
			<?php get_sidebar(); ?>
			
			</div>
		</div><!--end 12/4-->
	</div>
</div>
</section>
<?php get_footer(); ?>

<?php
	/*
	====================================
	single.php is independent of other post formatting. It can be used to format other ways such as single-aside.php, single-image.php.
	====================================
	*/
?>