<?php get_header(); ?>



<div id="blog-header-image">
<?php if( get_field('blog_header_image') ): ?>
	<img src="<?php the_field('blog_header_image'); ?>" />
<?php endif; ?>

<div id="blog-box">
<h1><?php the_title(); ?></h1>

<?php if( get_field('blog_slogan') ): ?>
<?php the_field('blog_slogan'); ?>
<?php endif; ?>


<div class="date-custom-blog">
<?php the_time('j F Y, l'); ?> 
</div><!---datewrapper-->


</div><!---blog-box-->
<div class="clear"></div>
</div><!---blog-header-image-->










	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			
			<div class="entry">
            


				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			</div><!---entry-->

</div><!---post-->

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>















<?php get_footer(); ?>