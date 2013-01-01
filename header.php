<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="I'm Justin and I love making people and their businesses look amazing. Whether you need a complete brand, materials to promote yourself, or an attention-wrangling web experience for your users, I'm thrilled to work with you and go above and beyond your expectations and goals."/>
	<meta name="keywords" content="graphic design, web design, website redesign, logos, print design, advertising, i need a website, i need a logo, justin westphal"/>
	<meta name="author" content="Justin Westphal, © 2012. All Rights Reserved." />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="7 days" />
	<meta name="viewport" content = "width = device-width">
	
	<link href="<?php bloginfo('template_url');?>/favicon.ico" rel="SHORTCUT ICON" />
	
	<link href="<?php bloginfo('stylesheet_url');?>" media="screen" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2)" type="text/css" href="<?php bloginfo('template_url');?>/css/highdpi.css" />
	<link href="<?php bloginfo('template_url');?>/css/dathumbs.css" media="screen" rel="stylesheet" type="text/css"/>
	<link href="<?php bloginfo('template_url');?>/css/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css"/>

	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/libs/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/script.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>

	
	<title><?php bloginfo('name'); ?> | <?php wp_title();?>	</title>

	<!-- WP-Generated Header -->
	<?php wp_head();?>
	<!-- End WP-Generated Header -->

	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26642988-2']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</head>

<body>

	<header>
		<nav>
			<ul>
				<li class="logo">
					<a href="<?php echo get_option('home');?>">
						<img src="<?php bloginfo('template_url');?>/images/logo.gif" alt="Justin Westphal" width="121" class="replace-2x" />
					</a>
				</li>
				<?php $args = array(
					'link_before'  => '<li>',
					'link_after'   => '</li>',
					'title_li'     => ''
					);
				?>
				<?php wp_list_pages( $args );?>
			</ul>
		</nav>
	</header>

	<div class="wrapper">
