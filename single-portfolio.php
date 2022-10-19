<?php get_header(); ?>









	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1 style="background-color:#<?php the_field('portfolio_box_color'); ?>; color:#<?php the_field('portfolio_box_heading_color'); ?>"><?php the_title(); ?></h1>



<div id="social-menu">
<?php
$portfolioMenu = array(
	'theme_location'  => 'portfolio-menu',
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
wp_nav_menu( $portfolioMenu );
?>
</div><!---social-menu-->
			
			<div class="entry">
            

				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			</div><!---entry-->

</div><!---post-->

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>
	
    
    
    
    
    
 
 
<?php if( have_rows('portfolio_single_page') ): ?>

<?php while ( have_rows('portfolio_single_page') ) : the_row(); ?>

<div class="portfolio-single">
<div class="portfolio-single-box">
<img src="<?php the_sub_field('portfolio_single_image'); ?>" />
</div><!---portfolio-single-image-->

<div class="portfolio-single-box" style="background-color:#<?php the_sub_field('portfolio_textbox_bg_color'); ?>">
<h3><?php the_sub_field('portfolio_single_title'); ?></h3>
<?php the_sub_field('portfolio_single_description'); ?>
</div><!---portfolio-single-text-->

<div class="clear"></div>
</div><!---portfolio-single-->

<?php endwhile; ?>

<?php else : endif; ?>   
    
    
  
  
  
  <div id="social-menu-responsive">
<?php
$portfolioMenu = array(
	'theme_location'  => 'portfolio-menu',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => 'blog-menu-res',
	'menu_class'      => 'blog-menu-res',
	'menu_id'         => 'blog-menu-res',
	'echo'            => true,
	'fallback_cb'     => 'blog-menu-res',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="%2$s"> %3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
);
wp_nav_menu( $portfolioMenu );
?>
</div><!---social-menu-responsive-->  
    
    
    
    


<?php get_footer(); ?>