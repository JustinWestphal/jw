<?php
get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>
        <p class="date"><?php echo the_time(get_option('date_format'));?></p>
        <div class="entry">
            <?php the_content(); ?>
            
				<?php //get the_image (custom field) ?>
				<?php $the_image = get_post_meta($post->ID, 'the_image', true);?>
					<?php //get image_2 (custom field) ?>
					<?php $image_2 = get_post_meta($post->ID, 'image_2', true);?>
					<?php //get image_3 (custom field) ?>
					<?php $image_3 = get_post_meta($post->ID, 'image_3', true);?>
					<?php //get image_4 (custom field) ?>
					<?php $image_4 = get_post_meta($post->ID, 'image_4', true);?>
				
			<nav class="blog-nav">
							
				<div class="previous"><?php previous_post_link('<h4>%link</h4>', 'Previous Post', TRUE); ?></div>
				<div class="next"><?php next_post_link('<h4>%link</h4>', 'Next Post', TRUE); ?></div>
				
			</nav>
        </div><!-- /entry -->

    </div>
    <?php endwhile; endif; ?>

</div><!-- #content -->
<?php get_footer(); ?>