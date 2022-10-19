<div class="clear"></div>




<div id="copyright">
<h3><?php bloginfo('description'); ?></h3>

<p><small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?> | 
     by Rubio and <a href="http://kablooeystudios.com/" target="new">Kablooey Studios, Durban Website Design </a></small></p>
</div><!---copyright-->

</div><!---wrapper-->




<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".home-content").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".home-content").height(maxHeight);
		
	});

});

</script>


<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".home-box").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".home-box").height(maxHeight);
		
	});

});

</script>




<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".connect-box").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".connect-box").height(maxHeight);
		
	});

});

</script>





<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".portfolio-single-box").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".portfolio-single-box").height(maxHeight);
		
	});

});

</script>




<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".blog-single-box").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".blog-single-box").height(maxHeight);
		
	});

});

</script>





<script type="text/javascript">
<!---innerbox same height script -->
jQuery(window).load(function($) {
			var maxHeight = 0;
			var maxHeight2 = 0;
			var maxHeight3 = 0;
			var maxHeight4 = 0;
			
	jQuery(function($) {
		$(".peeps-box").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		
		$(".peeps-box").height(maxHeight);
		
	});

});

</script>




	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
