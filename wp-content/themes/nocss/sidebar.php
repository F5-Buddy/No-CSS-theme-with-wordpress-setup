	
	<div id="sidebar">

			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
						<?php 
						
						dynamic_sidebar('sidebar'); 
						dynamic_sidebar('sidebar-2');
						dynamic_sidebar('sidebar-3');
						
						?>

			<?php endif; ?>

	</div>
