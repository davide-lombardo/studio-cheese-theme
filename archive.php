<?php get_header(); ?>

<div class="row">
	<div class="bg-white my-5">
		<div class="row text-center no-margin">

			<?php if( have_posts() ): ?>
				<header class='page-header my-5'>
					<?php
						the_archive_title('<h1 class="page-title">', '</h1>');
					?>
				</header>
				
				<?php while( have_posts() ): the_post(); ?>

					<?php get_template_part('template-parts/content', 'archive') ?>
				
				<?php endwhile; ?>

				<nav class="pagination"><?php echo paginate_links(); ?></nav>
				
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>