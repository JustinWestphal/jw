<?php
/*
Template Name: Page
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
					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>