<?php get_header(); ?>

<?php
/*
Template Name: Portfolio Template Page
*/
?>

<div id="w-box-container">

<?php query_posts('showposts=-1&category_name=portfolio'); ?>
<?php while (have_posts()): the_post(); ?>


<div class="w-box-container"  >

<div class="w-box" style="background-color:#<?php the_field('portfolio_box_color'); ?>;">

<?php the_post_thumbnail('full'); ?>


    <div class="w-box-toplayer">
<a href="<?php the_permalink(); ?>">
<h3 style="color:#<?php the_field('portfolio_box_heading_color'); ?>; border:2px solid #<?php the_field('portfolio_box_heading_color'); ?>;"><?php the_title(); ?></h3></a>

<a href="<?php the_permalink(); ?>">
<p style="color:#<?php the_field('portfolio_box_heading_color'); ?>">
<?php the_field('portfolio_link_text'); ?>
</p>
</a>
    </div><!---w-box-toplayer-->
    
    
<div class="box-overlay" style="background-color:#<?php the_field('portfolio_box_color'); ?>;">
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



<?php get_footer(); ?>