<?php get_header(); ?>


<div id="banner">
<?php nivo_slider( "front-page-banner" ); ?>
</div><!---banner-->


<div id="banner-responsive">
<img src="<?php bloginfo('template_url'); ?>/images/banner-responsive.jpg" />
</div><!---banner-responsive-->


<div id="home-content">
<div class="home-content">
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
</div><!---home-content-->


<div class="home-content">
<?php nivo_slider( "flip-image" ); ?>
</div><!---home-content-->

<div class="clear"></div>
</div><!---home-content-->








<div id="home-boxes">

<div class="home-box">

<script type="text/javascript"
   src="https://raw.githubusercontent.com/stevenschobert/instafeed.js/master/instafeed.min.js"></script>


<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 7881394,
        accessToken: '7881394.1677ed0.e1933073ddd743119829bcca001d8148', 
		limit: 1, 
		resolution: 'low_resolution'
    });
    userFeed.run();
</script>

<div id="instafeed"></div>


<div id="instafeed-uploaded-image">
	<?php 
	$image = get_field('instagram_image');
	$size = 'instagram-image'; // (thumbnail, medium, large, full or custom size)

	if( $image ) {

		echo wp_get_attachment_image( $image, $size );
	}
	?>
</div><!---instafeed-uploaded-image-->


<?php if( get_field('instagram_url') ): ?>
<div id="join-instagram">
<a href="<?php the_field('instagram_url'); ?>" target="_new">Join us on Instagram</a>

</div><!---join-instagram-->
<?php endif; ?>





</div><!---home-box-->

<div class="home-box box-tweet">
<h3>Cheep</h3>

<?php echo do_shortcode("[rotatingtweets screen_name='RUBIO_Janet']") ?> 

<div class="home-box-readmore">
<a href="#">follow us on Twitter</a>
</div><!---readmore-->
</div><!---home-box-->

<div class="home-box box-blog">
<h3>Newsy</h3>
<?php query_posts('showposts=1&category_name=blog'); ?>
<?php while (have_posts()): the_post(); ?>


<p><?php echo excerpt(25); ?>  </p>


<div class="home-box-readmore">
<a href="<?php the_permalink(); ?>">read more on the blog</a>
</div><!---home-box-readmore-->
<?php endwhile; ?>
<?php wp_reset_query() ?>

</div><!---home-box-->
<div class="clear"></div>
</div><!---home-boxes-->



<div class="clear"></div>








<div id="connect">
<?php 


if( have_rows('connect') ):
    while ( have_rows('connect') ) : the_row(); ?>
	
<div class="connect-box">
<h3><?php the_sub_field('connect_title'); ?></h3>
<?php the_sub_field('connect_description'); ?>

<div class="connect-box-readmore">
<a href="<?php the_sub_field('connect_url'); ?>">
<?php the_sub_field('connect_url_title'); ?>
</a>
</div><!---connect-box-readmore-->

<div class="clear"></div>
</div><!---connect-box-->

 <?php   endwhile; 
else :
endif;

?>




<?php 


if( have_rows('mailchimp') ):
    while ( have_rows('mailchimp') ) : the_row(); ?>
	
<div class="connect-box">
<h3><?php the_sub_field('mailchimp_title'); ?></h3>
<?php the_sub_field('mailchimp_description'); ?>

</div><!---connect-box-->

 <?php   endwhile; 
else :
endif;

?>





<div class="clear"></div>
</div><!---connect-->




 









<?php get_footer(); ?>