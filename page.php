<?php get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>

			

			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div><!---entry-->

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div><!---post-->
		
		<?php // comments_template(); ?>

		<?php endwhile; endif; ?>



<?php get_footer(); ?>