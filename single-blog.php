<?php
get_header(); ?>



    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>

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
				
        </div><!-- /entry -->

    </div>
    <?php endwhile; endif; ?>

</div><!-- #content -->
<?php get_footer(); ?>