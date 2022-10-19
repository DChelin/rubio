<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
    
    <meta name="viewport" content="width=device-width; initial-scale=1" />

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
    <link rel="icon" type="img/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/responsive.css"  />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>




<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div class="wrapper">
<div id="header">

<div id="logo">
<a href="<?php echo get_option('home'); ?>/">
<img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" />

</a>
</div><!---logo-->


<!--menu starts-->
<div id="full-menu">
<div id="menu-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> 
<?php // wp_nav_menu( array( 'theme_location' => 'Main Menu' ) ); ?> 
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>

<!---targeting a specific menu. Referrence: http://codex.wordpress.org/Function_Reference/wp_nav_menu-->
<?php //wp_nav_menu( array('menu' => 'mainnav' )); ?>
    <div class="clear"></div>
</div><!---menuwrapper-->
</div><!---full-menu-->
<!--menu ends-->

<div class="clear"></div>





<div id="responsivemenu">
<div class="menubutton">
<img src="<?php bloginfo('template_url'); ?>/images/menuicon-black.png" width="25" height="19" align="right" />
<p>MENU </p>
</div><!---menubutton-->
<div class="clear"></div>

<div id="hiddenmenu">
<?php //wp_nav_menu(array('menu' => 'Main Nav Menu'));?>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?> 

<div class="clear"></div>
 </div><!---hiddenmenu-->
</div><!--responsivemenu-->


<!---make sure that this script always goes below the menu otherwise it wont work -->
<script type="text/javascript">
	jQuery(function($) {
			
			$('.menubutton').click(function() {
				$('#hiddenmenu').slideToggle();
			});
	});
</script>


<div class="clear"></div>


<div id="social">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar("social-links") ) : ?>    
<?php endif; ?>
</div><!---social-->


</div><!---header-->


