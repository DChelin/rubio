<?php get_header(); ?>

<?php
/*
Template Name: Services Template Page
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
        
        
<div id="w-box-container">

<?php query_posts('showposts=-1&category_name=services'); ?>
<?php while (have_posts()): the_post(); ?>


<div class="w-box-container"  >

<div class="w-box" style="background-color:#<?php the_field('services_box_color'); ?>;">

<?php the_post_thumbnail('full'); ?>


    <div class="w-box-toplayer">
<a href="<?php the_permalink(); ?>">
<h3 style="color:#<?php the_field('services_box_heading_color'); ?>; border:2px solid #<?php the_field('services_box_heading_color'); ?>;"><?php the_title(); ?></h3></a>

<a href="<?php the_permalink(); ?>">
<p style="color:#<?php the_field('services_box_heading_color'); ?>">
<?php the_field('services_link_text'); ?>
</p>
</a>
    </div><!---w-box-toplayer-->
    
    
<div class="box-overlay" style="background-color:#<?php the_field('services_box_color'); ?>;">
<?php if (class_exists('MultiPostThumbnails')) : 
MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
endif;  ?>
 


</div><!---box-overlay-->
<div class="clear"></div>
</div><!---w-box-->
<div class="clear"></div>
</div><!---w-box-container-->



<?php endwhile; ?>

</div><!---#w-box-container-->
<?php wp_reset_query() ?>



<div class="clear"></div>

<?php if( get_field('services_grey_box') ): ?>
<div class="grey-container">
 <?php the_field('services_grey_box'); ?>
 </div><!---grey-container-->
<?php endif; ?>



<?php get_footer(); ?>