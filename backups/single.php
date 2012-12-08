<?php
get_header(); ?>



    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <h1><?php the_title(); ?></h1>

        <div class="entry">
            <?php the_content(); ?>
            
            	<?php //get the_brief (custom field) ?>
				<?php $the_brief = get_post_meta($post->ID, 'the_brief', true);?>
				<?php //get the_solution (custom field) ?>
				<?php $the_solution = get_post_meta($post->ID, 'the_solution', true);?>
				<?php //get the_image (custom field) ?>
				<?php $the_image = get_post_meta($post->ID, 'the_image', true);?>
					<?php //get image_2 (custom field) ?>
					<?php $image_2 = get_post_meta($post->ID, 'image_2', true);?>
					<?php //get image_3 (custom field) ?>
					<?php $image_3 = get_post_meta($post->ID, 'image_3', true);?>
					<?php //get image_4 (custom field) ?>
					<?php $image_4 = get_post_meta($post->ID, 'image_4', true);?>
				
				<div class="entry-image-column">

					<div class="frame">
					
						<a class="fancybox" rel="group" href="<?php echo $the_image;?>">
							<img title="<?php the_title(); ?>" src="<?php echo $the_image;?>" alt="<?php the_title(); ?>" />
						</a>
						
						<!-- If there are more pictures, post them: -->
						<?php if ( get_post_meta($post->ID, 'image_2', true) ) { ?>
						<a class="fancybox" rel="group" href="<?php echo $image_2;?>">
							<img src="<?php echo $image_2;?>" alt="<?php the_title(); ?>" />
						</a>
						<?php } ?>
						
						<!-- If there are more pictures, post them: -->
						<?php if ( get_post_meta($post->ID, 'image_3', true) ) { ?>
						<a class="fancybox" rel="group" href="<?php echo $image_3;?>">
							<img src="<?php echo $image_3;?>" alt="<?php the_title(); ?>" />
						</a>	
						<?php } ?>
						
						<!-- If there are more pictures, post them: -->
						<?php if ( get_post_meta($post->ID, 'image_4', true) ) { ?>
						<a class="fancybox" rel="group" href="<?php echo $image_4;?>">
							<img src="<?php echo $image_4;?>" alt="<?php the_title(); ?>" />
						</a>
						<?php } ?>
						
						<!-- If a web design post, insert the_link -->
						<?php if (in_category('web-design')) : ?> 
						<?php $the_link = get_post_meta($post->ID, 'the_link', true);?>
							<a href="<?php echo $the_link;?>" target="_blank"><h2>See the site live! ></h2></a>
						<?php endif; ?>		
										
					</div>

				</div><!-- /entry-image-column -->

				<div class="entry-text">
				
					<h2>The Brief</h2>			
					<p><?php echo $the_brief;?></p>
					
					<h2>The Solution</h2>
					<p><?php echo $the_solution;?></p>
										
				</div><!-- /entry-text -->
            
        </div><!-- /entry -->

    </div>
    <?php endwhile; endif; ?>

</div><!-- #content -->
<?php get_footer(); ?>