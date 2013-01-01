<?php
/*
Template Name: JW Blog
*/
?>
<?php get_header(); ?>
		<section class="contents">
			<h1>My Blog</h1>
			<p>My thoughts, theories, and (controlled) rants about design, and how to be a better design professional. I'm constantly seeking to improve myself, and this blog documents the process. If you feel I'm missing something, I'm wrong, or you just have something to share, please feel free to add a comment!</p>
			
<?php query_posts('category_name=blog'); ?>
<?php while (have_posts()) : the_post(); ?>
	
		<a href="<?php the_permalink();?>">
			<h2><?php echo get_the_title($ID);?></h2>
			<p class="date"><?php echo the_time(get_option('date_format'));?></p>

		</a>	
<?php endwhile;?>


		</section>
		
<?php get_footer(); ?>