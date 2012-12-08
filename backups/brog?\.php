<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php //get main_header (custom field) ?>
				<?php $main_header = get_post_meta($post->ID, 'main_header', true);?>
				<?php //get sub_header (custom field) ?>
				<?php $sub_header = get_post_meta($post->ID, 'sub_header', true);?>
				
					<h1><?php echo $main_header;?></h1>
					<h2><?php echo $sub_header;?></h2>

<?php $args = array(
    'category'        => 'blog-posts',
    'orderby'         => 'post_date',
    'order'           => 'DESC',
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'suppress_filters' => true ); ?>
    
    <?php $posts_array = get_posts( $args ); ?> 
    
   				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>