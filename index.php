<?php
/* This is the Blog page*/
?>
<?php get_header(); ?>
<section class="single">

	
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 page animated fadeInDown">
			<?php
			
				if(have_posts()):
					while(have_posts()): the_post(); ?>
					
						<?php get_template_part('content' ,get_post_format()); ?>
						
					<?php endwhile;
				endif;
				
			?>
		</div><!-- end 12/8-->
		<!--<div class="col-xs-12 col-sm-4">
			<?php //get_sidebar(); ?>
		</div><!--end 12/4-->
	</div>
</div>
</section>
<?php get_footer(); ?>