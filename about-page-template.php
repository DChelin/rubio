<?php get_header(); ?>

<?php
/*
Template Name: About Template Page
*/
?>




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




<?php if( have_rows('peeps') ): ?>
<?php while ( have_rows('peeps') ) : the_row(); ?>

<div id="peeps">
<div class="peeps-box">
<h3><?php the_sub_field('peeps_name'); ?></h3>
<?php the_sub_field('peeps_bio'); ?>
</div><!---peeps-box-->

<div class="peeps-box">
<img src="<?php the_sub_field('peeps_photo'); ?>" />
</div><!---peeps-box-->

<div class="clear"></div>
</div><!---peeps-->
<?php endwhile; ?>
<?php else : endif; ?>  






<?php get_footer(); ?>