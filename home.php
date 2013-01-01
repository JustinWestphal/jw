<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
		<section class="contents">
			<h1>Graphic and web design to get everyone really excited.</h1>
			<p>I create brands, web experiences, and anything else you could ever need to look your absolute best.<br />I'm currently available for projects, so whether you're looking to build a world-class, timeless brand, reboot your business card or brochure, or craft a fun, engaging website, <a href="/contact/">I'd love to hear your story</a> and see if we can't make some magic happen.</p>
		</section>
		
		<section class="gallery half first">
				<ul id="da-thumbs" class="da-thumbs">
						
						<!-- List Graphic Design Posts -->						
						<?php query_posts('category_name=graphic-design'); ?>
						<h3 class="graphic_design">Graphic</h3>
						<?php while (have_posts()) : the_post(); ?>
							
						
							<?php //get article_image (custom field) ?>
							<?php $the_thumbnail = get_post_meta($post->ID, 'the_thumbnail', true);?>
							
							<li>
								<a href="<?php the_permalink();?>" class="fancybox" title="title">
									<img src="<?php echo $the_thumbnail; ?>" alt="View more info" />
									<div><span><?php echo get_the_title($ID);?></span></div>
								</a>	
							</li>
						<?php endwhile;?>
				</ul>
		</section>
						
		<section class="gallery half last">
				<ul id="da-thumbs" class="da-thumbs">
						
						<!-- List Web Design Posts -->						
						<?php query_posts('category_name=web-design'); ?>
						<h3 class="web_design">Web</h3>
						<?php while (have_posts()) : the_post(); ?>
						
							<?php //get article_image (custom field) ?>
							<?php $the_thumbnail = get_post_meta($post->ID, 'the_thumbnail', true);?>
							
							<li>
								<a href="<?php the_permalink();?>" class="fancybox" title="title">
									<img src="<?php echo $the_thumbnail; ?>" alt="View more info" />
									<div><span><?php echo get_the_title($ID);?></span></div>
								</a>	
							</li>
						<?php endwhile;?>
				</ul>
		</section>
		
<?php get_footer(); ?>