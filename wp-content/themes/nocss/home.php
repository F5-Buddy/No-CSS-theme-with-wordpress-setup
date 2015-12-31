<?php 

/* Template Name: Home */
 
get_header(); 

if(have_posts()): the_post();

?>

<div class="container">
	<div class="row">
		<div class="col-md-8"><?php  the_content(); ?></div>
		<div class="col-md-4"><?php  get_sidebar(); ?></div>
	</div>
</div>

<?php 

endif;

get_footer();

?>
