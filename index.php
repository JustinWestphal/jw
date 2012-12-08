<?php
/*
Template Name: JW
*/
?>
<?php get_header(); ?>
		<section class="contents">
			<h1>Graphic and web design to get everyone really excited.</h1>
			<p>I make brands, web experiences, and anything else you could ever need to look your absolute best.</p>
			
			<p>Please feel free to have a look at my portfolio. Whether you're looking to build a world-class, timeless brand, reboot your business card or brochure, craft a fun, engaging website, or just say hello, I'd love to hear your story and see if we can make some magic happen. And if you're in the Osaka area, I'd be thrilled to hear it over a coffee.</p>
		</section>
		
		<section class="contents gallery">
				<ul id="da-thumbs" class="da-thumbs">
						
						<!-- List Graphic Design Posts -->						
						<?php query_posts('category_name=graphic-design'); ?>
						<h2 class="graphic_design">Graphic Design</h2>
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
						
		<section class="contents gallery spacer">
				<ul id="da-thumbs" class="da-thumbs">
						
						<!-- List Web Design Posts -->						
						<?php query_posts('category_name=web-design'); ?>
						<h2 class="web_design">Web Design</h2>
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