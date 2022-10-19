<?php get_header(); ?>



<div class="wrapper">

<div id="content">
<h1><?php wp_title(''); ?></h1> 


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">





<div class="postbox">
<div class="postbox-image">
<?php if ( has_post_thumbnail()) { ?>
   <?php the_post_thumbnail('medium');
    } else { ?>
	
    <img src="<?php bloginfo('template_url'); ?>/images/default.jpg" width= border="0" />
    
<?php } ?>
</div><!---postbox-image-->
            
    <div class="postbox-text"> 
        <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5> 
        <div class="date-custom"><?php echo date('j F Y, l'); ?></div>
<p><?php the_excerpt(); ?> </p>
 

     <div class="postbox-readmore">
<a href="<?php the_permalink(); ?>">Read more ...</a>
</div><!---postbox-readmore-->

    </div><!---postbox-text--> 


</div><!---post-->
<div class="clear"></div> 
</div><!---postbox--> 
	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

</div><!---content-->



<?php get_sidebar(); ?>

</div><!---wrapper-->

<?php get_footer(); ?>