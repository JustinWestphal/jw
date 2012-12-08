<?php
/*
Template Name: About
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

			<img class="inset" src="<?php bloginfo('template_url');?>/images/justin.jpg" />
			<p>Originally from Baltimore, Maryland, USA, I currently live in Osaka, Japan. I have worked with a wide range of clients, from individuals and small businesses, to industry giants such as Universal Studios Japan and InterContinental Hotels Group. It's been a wild ride thus far, and I'm enjoying every moment of it.</p>
			<p>My hobbies include cooking, playing the bass, checking out temples around Japan, and creating things in any way I can.</p>		
			
			<h2><a href="http://www.justinwestphal.com/justinwestphal-2012resume.pdf" target="_blank">view my résumé</a></h2>	
			<div class="clear"></div>	

			<h2>my approach to design</h2>
			
			<p>I believe honesty is essential for great design. I find that if you are genuine and sincere with people, you earn their trust and respect. That is why I approach each and every client and project in an honest way. You have a product or service you are passionate about, and that passion is what we need to communicate to the world.</p>
			<p>A designer is a problem-solver. I live for finding the best way to take your message and really make someone's day with it. Let's get everyone really pumped about what you want to show them.</p>
			<p>Making everything visually stunning, hard-hitting, and effective is of course an extremely important part of the job. Just as important is the research and diligence required to truly understand your product, your company, and your target audience. I believe that these are core responsibilities to a designer, and I constantly strive to deliver the utmost to my clients, improving myself along the way.</p>


				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>