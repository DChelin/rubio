<?php get_header(); ?>






<h1><?php printf( __( '%s' ), single_cat_title( '', false ) ); ?></h1>

<?php

$blogMenu = array(
	'theme_location'  => 'blog-menu',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => 'blog-menu',
	'menu_class'      => 'blog-menu',
	'menu_id'         => 'blog-menu',
	'echo'            => true,
	'fallback_cb'     => 'blog-menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="%2$s"> %3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);

wp_nav_menu( $blogMenu );

?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">



<div class="blog-single">
<div class="blog-single-box">
<?php if ( has_post_thumbnail()) { ?>
   <?php the_post_thumbnail('full');
    } else { ?>
	
    <img src="<?php bloginfo('template_url'); ?>/images/default.jpg" width= border="0" />
    
<?php } ?>
</div><!---potfolio-single-box-->

            
 <div class="blog-single-box">
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3> 
        <div class="date-custom"><?php echo the_time('j F Y, l'); ?></div>
<p><?php echo excerpt(45); ?>   </p>
 

<div class="blog-readmore">
<a href="<?php the_permalink(); ?>">Read more ...</a>
</div><!---blog-readmore-->

</div><!---potfolio-single-box-->

<div class="clear"></div>
</div><!---blog-single-->



    
    
    
    
    

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<p>No posts yet</p>

	<?php endif; ?>
 




<?php get_footer(); ?>