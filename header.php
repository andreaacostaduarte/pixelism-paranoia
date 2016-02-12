<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Pixelism Paranoia | Blog about Art/Design/Front-End Development" />
<meta name="keywords" content="Andrea, Andrea Acosta, Andrea Acosta Duarte, Artist, Web Designer, Front-End Developer, Toronto, Montreal, Professional, freelance, contract, web, print, art direction, graphic designer, graphic design, designer, branding, colour, color, type, photo retouching, production, seo, search engine optimization, implementation, maintenance, websites, sites, digital, professional, adobe, photoshop, illustrator, indesign, quark, macromedia, flash, dreamweaver, fireworks, html, xhtml,  css, office, mac, pc, javascript, jquery, php, asp, mysql, independent, tutorials, HTML, HTML/CSS, CSS" />
<meta name="author" content="http://www.pixelismparanoid.com" />
<meta name="copyright" content="Andrea Acosta Duarte" />
<?php $wl_theme_options = pixelismparanoia_get_options(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<?php wp_enqueue_script("jquery"); ?>   
<?php wp_head(); ?>
<script src="<?php bloginfo('url'); ?>/wp-content/themes/pixelismparanoia/js/jquery.shorten.js"></script>
</head>
<body class="custom-background">
<!-- wrapper: start -->
<div id="wrapper" class="clearfix">
	<!-- column 1: start -->
	<div id="col1">
		<!-- header: start -->
		<div id="header" class="clearfix" style="background-image: url(<?php header_image(); ?>);">		
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>">
				<?php if($wl_theme_options['upload_image_logo'] !='') { ?>
					<style>
					 #logo a { text-indent: 0; background-image: none; }
					</style>
					<img src="<?php echo $wl_theme_options['upload_image_logo']; ?>"/>
				<?php
				}
				else { ?>		
						Pixelism Paranoia
				<?php		} ?></a></div>
			<div class="main-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'ul', 'container_class' => '', 'menu_class' => 'nav-bar' ) ); ?>
			</div>
		</div>
		<!-- header: end -->