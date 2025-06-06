<?php get_header();?>

<section class="page-wrap">
<div class="container">

		<section class="row">		
			<div class="col-lg-3">
				<?php if( is_active_sidebar('blog-sidebar') ):?>
			
						<?php dynamic_sidebar('blog-sidebar');?>

				<?php endif;?>
			</div>

			<div class="col-lg-9">
				<h1><?php echo single_cat_title();?></h1>
				
				<?php get_template_part('includes/section','archive');?>

			    <!-- Start the pagination -->
			    <div class="d-flex justify-content-between my-4">
				    <div class="nav-previous"><?php next_posts_link(); ?></div>
				    <div class="nav-next"><?php previous_posts_link(); ?></div>
			    </div>
			    <!-- End the pagination -->

			</div>
		</section>

</div>
</section>


<?php get_footer();?>