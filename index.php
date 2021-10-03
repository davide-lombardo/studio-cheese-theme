   
<?php get_header(); ?>

<div class="row mt-5">
	<div class="col-xs-12 col-sm-8">
		<div class="row text-center">

			<?php 
				if( have_posts() ): $i = 0;
					while( have_posts() ): the_post(); ?>
						<div class="col-xs-12">
							<?php if( has_post_thumbnail() ):
								$urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
							endif; ?>
							<div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
								<?php the_title( sprintf('<h1 class="entry-header"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
								<small><?php the_category(' '); ?></small>
							</div>
						</div>
					<?php $i++; endwhile;
				endif;		
			?>

		</div>
	</div>
	
	<div class="col-xs-12 col-sm-4 blog-sidebar">
		<?php get_sidebar(); ?>
	</div>

	<nav class="pagination"><?php echo paginate_links(); ?></nav>
	

</div>



<?php get_footer(); ?>