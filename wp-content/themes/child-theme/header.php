<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link
		href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Lora:ital,wght@0,400..700;1,400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet"
		href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/wow.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
	<?php
	$site_logo = get_theme_mod('custom_logo');
	$imageLogo = wp_get_attachment_image_src($site_logo, 'full');
	?>
	<?php if ($site_logo): ?>
		<header class="header-section">
			<div class="header-main d-flex align-items-center justify-space">
				<div class="header-logo wow bounceInUp">
					<?php if ($site_logo): ?>
						<a href="<?php echo get_home_url(); ?>" rel="home">
							<img src="<?php echo $imageLogo[0]; ?>" alt="">
						</a>
					<?php endif; ?>
				</div>
				<nav class="navigation">
					<?php wp_nav_menu(array('menu' => 'Header Menu', 'container' => '', 'menu_class' => 'menu-item', 'container_class' => '')); ?>
				</nav>
				<div class="menu-icon">
					<div class="line line1"></div>
					<div class="line line2"></div>
					<div class="line line3"></div>
				</div>
			</div>
		</header>
	<?php endif; ?>