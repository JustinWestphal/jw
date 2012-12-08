<?php
get_header(); ?>

<?php
	$post = $wp_query->post;
	
	if ( in_category('blog') ) {
		include(TEMPLATEPATH . '/single-blog.php');
	}
	else {
		include(TEMPLATEPATH . '/single-default.php');
	}
?> 

<?php get_footer(); ?>