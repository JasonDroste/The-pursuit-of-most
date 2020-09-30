<?php 
/*
	Template Name: Home 1.0
*/
?>
<?php get_header(); ?>


<section>
	<!--<div class="col-xs-12 ">
		<!--<div class="bannerbox">
			<img src="wp-content/uploads/2018/01/backdrop1.jpg" alt="" />-->
			<!--<img 
			sizes="(min-width: 467px) 80vw, 100vm"
			srcset="wp-content/uploads/2018/01/backdrop1-158x300.jpg 158w, wp-content/uploads/2018/01/backdrop1.jpg 467w" alt="" />-->
			
		<!--</div>
	</div>-->


				<div class="">
				
					<div class="col-xs-12 page animated fadeInLeft leftbox leftbannerbox">
						
					</div>
					<div class="col-xs-12  page animated fadeInRight  rightbox rightbannerbox">
									
					</div>
					<div class="boxSun page animated fadeInUp">
					
					</div>
				</div>
				<div class="container">
			<div class="row">
				<div class="welcomebox page animated fadeInDown">
				
				
				<?php
		if(have_posts()):
			while(have_posts()): the_post(); ?>
				
				
				<p><?php the_content(); ?></p>
				
				<hr>
			<?php endwhile;
		endif;
	?>
						


					
				</div>
			</div>	
</div>		
	
</section>
<section class="about-section">
<div>
	<?php
		/*
		THis code is how to place the lates post anywhere in the page or any specific post that you want.
		*/
		$args = array(
			'type' => 'post',
			'posts_per_page' => 2
		);
		$lastBlog = new WP_Query($args);
		if($lastBlog->have_posts()):
			while($lastBlog->have_posts()): $lastBlog->the_post(); ?>
				<?php get_template_part('content', get_post_format());?>
			<?php endwhile;
		endif;
		wp_reset_postdata();
	?>
</div>
</section>
<section class="contact-section">

</section>
	
<?php get_footer(); ?>