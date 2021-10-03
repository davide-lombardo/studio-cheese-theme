<div class="post">		
	<div class="post mb-5">
		<div class="media">	
			<img class="mx-auto img-fluid d-none d-md-flex w-50" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
			<div class="media-body">
				<h3 class="title my-2"><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="meta mb-1">
					<span class="date"><?php the_date('d M, Y'); ?></span>
					<span class="comment"><a href="#"><?php comments_number(); ?>
					<p class="card-text">
						<?php the_excerpt(); ?>
					</p>
				<button type="button" class="btn btn-primary my-3">
					<a class="more-link text-white text-decoration-none" href="<?php the_permalink(); ?>">Per saperne di più &rarr;</a>
				</button>
			</div>
		</div>
	</div>	
</div>