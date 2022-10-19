<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="wrapper">

<div id="content">

<?php if (have_posts()) : ?>
		<p>Search Results</p>
		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				<div class="entry">
					<?php the_excerpt(); ?>
				</div>
			</div>
		<?php endwhile; ?>

	<?php else : ?>
		<p>Nothing found for your search result.</p>
	<?php endif; ?>


</div><!---content-->



<?php get_sidebar(); ?>

</div><!---wrapper-->

<?php get_footer(); ?>