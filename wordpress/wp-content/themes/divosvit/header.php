<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divosvit
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php bloginfo('name') . wp_title(); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="<?=get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?=get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrapper">

		<header>
			<div id="contacts">
				<div class="container">
					<div class="left">
						<div class="item">
							<img src="<?=get_template_directory_uri();?>/img/icon-inbox.png" alt="icon inbox">
							<a class="no-locale" href="mailto:<?php the_field('email', 52); ?>"><?php the_field('email', 52); ?></a>
						</div>
						<div class="item">
							<img src="<?=get_template_directory_uri();?>/img/icon-phone.png" alt="con phone">
							<a class="no-locale" href="tel:<?php the_field('tel-1', 52); ?>"><?php the_field('tel-1', 52); ?></a>
						</div>
					</div>
					<div class="right">
						<div class="socials">
							<a class="no-locale" href="#"><i class="fa fa-facebook"></i></a>
							<a class="no-locale" href="#"><i class="fa fa-twitter"></i></a>
							<a class="no-locale" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="no-locale" href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div id="navigation">
				<div class="container fix"> 
					<nav>
						<div id="logo">
							<a href="<?=site_url(); ?>/"><img src="<?=get_template_directory_uri();?>/img/logo.png" alt="Logo"></a>
						</div>
						<?php wp_nav_menu(); ?>
						<div id="locale">
							<a class="no-locale ua" href="/">Ua</a>
							<a class="no-locale ru" href="/ru">Rus</a>
							<a class="no-locale en" href="/en">Eng</a>
						</div>
					</nav>
				</div>
			</div>
		</header>
