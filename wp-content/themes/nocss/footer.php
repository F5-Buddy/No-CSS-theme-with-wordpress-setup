<?php $option = get_option( 'my_option_name' ); //Social media link:PLUGIN-Setting-smo  ?>

<div id="footer">

	<div class="col-md-12">
	<div class="socials">
	
	  <?php 
	  
	 // if ($option['facebook']!=''){
	  	?>
	  	 <a class=" facebook" href="<?php echo $option['facebook']; ?>"><i class="fa fa-facebook"></i></a> 
	  	<?php
	 // }
	  
	  if ($option['twitter']!=''){
	  	?>
	  	<a class=" twitter" href="<?php echo $option[ 'twitter' ]; ?>"><i class="fa fa-twitter"></i></a> 
	  	<?php
	  }
	  
	  if ($option['linkedin']!=''){
	  	?>
	  	<a class=" in" href="<?php echo $option[ 'linkedin' ]; ?>"><i class="fa fa-linkedin"></i></a> 
	  	<?php
	  }
	  
	  if ($option['instagram']!=''){
	  	?>
	  	<a class=" instagram" href="<?php echo $option[ 'instagram' ]; ?>"><i class="fa fa-instagram"></i> </a>
	  	<?php
	  }
	  
	  if ($option['pinterest']!=''){
	  	?>
	  	<a class="pinterest" href="<?php echo $option[ 'pinterest' ]; ?>"><i class="fa fa-pinterest-p"></i></a>
	  	<?php
	  }
	  
	  if ($option['vimeo']!=''){
	  	?>
	  	<a class="vimeo" href="<?php echo $option[ 'vimeo' ]; ?>"><i class="fa fa-vimeo"></i></a>
	  	<?php
	  }
	  
	  if ($option['google']!=''){
	  	?>
	  	<a class="google-plus" href="<?php echo $option[ 'google' ]; ?>"><i class="fa fa-google-plus"></i></a>
	  	<?php
	  }
	  
	  ?>
	
	</div>
	</div>


<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
	<p>
		<?php bloginfo('name'); ?> is proudly powered by
		<a href="http://wordpress.org/">WordPress</a>
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
	<p><?php echo $option[ 'copyright' ]; ?></p>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/kubrick/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
