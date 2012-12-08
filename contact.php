<?php
/*
Template Name: Contact
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
					
				<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/mail.js"></script>
								
			<form method="post" action="<?php bloginfo('template_url');?>/php/contact-send.php" id="contact_form">
			
				<p><label class="form_label" for='name'>Name</label>
				<input id='form_name' type='text' name='name' class="textbox" value='' /></p>
				
				<p><label class="form_label" for='email'>E-mail</label>
				<input id='form_email' type='text' name='email' class="textbox" value='' /></p>
				
				<p><label class="form_label" for='message'>Message</label>
				<textarea id='form_message' name='message' class="textbox"></textarea></p>
				
				<input id='form_submit' type='submit' name='submit' value='Send!' />
				
				<!-- hidden input for basic spam protection -->
				<div class='hide'>
					<label for='spamCheck'>Do not fill out this field</label>
					<input id="spamCheck" name='spam_check' type='text' value='' />
				</div>
				
			</form><!-- contact form ends here-->	
						
			<!-- This div will be shown if mail was sent successfully -->		
			<div class="hide success">
				<h2>Thanks! Your message has been sent.</h2>
			</div>


				<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>