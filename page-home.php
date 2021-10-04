<?php get_header(); ?>

<div class="row">
		<div class="col-xs-12">
			<div id="newtheme-carousel" class="carousel slide mt-5" data-bs-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  
			<?php 

				$args_cat = array(
					'include' => '10, 12, 22'
				);

				$categories = get_categories($args_cat);
				$count = 0;
				$bullets = '';
				foreach($categories as $category):

				$args = array( 
					'type' => 'post',
					'posts_per_page' => 1,
					'category__in' => $category->term_id,
				);
				
				$lastBlog = new WP_Query( $args ); 
				
				if( $lastBlog->have_posts() ):
					
					while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
						
						<div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>" data-bs-interval="5000">
							<?php the_post_thumbnail( 'full', array( 'class' => 'rounded mx-auto img-fluid d-block w-100' ) ); ?>
							<div class="carousel-caption">
								<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>

								<small><?php the_category(' '); ?></small>
							</div>
						</div>
						
						<?php $bullets .= '<button type="button" data-bs-target="#newtheme-carousel" aria-current="true" aria-label="" data-bs-slide-to="'.$count.'" class="'; ?>
						<?php if($count == 0): $bullets .='active'; endif; ?>
						
						<?php  $bullets .= '"></button>'; ?>
					
					<?php endwhile;

				endif;
				
				wp_reset_postdata();

				$count++;

				endforeach;
				
			?>

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php echo $bullets; ?>
			</ol>
		</div>
		
			<!-- Controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#newtheme-carousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Precedente</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#newtheme-carousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Successivo</span>
			</button>
		</div>
	</div>	
</div>

<?php get_footer(); ?>