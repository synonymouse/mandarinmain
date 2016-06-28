<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Mandarin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/css/style.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>		
		<div class="top-header clear">
			<div class="content-width">
				<a href="/" class="logo logo-pc"><img src="<?=get_stylesheet_directory_uri();?>/images/logo.png" alt=""></a>
				<a href="/" class="logo logo-mob"><img src="<?=get_stylesheet_directory_uri();?>/images/logo_mobile.png" alt=""></a>
				<div class="menu-mobile"></div>
				<div class="adress-header">
					<p><?php echo do_shortcode("[address]"); ?></p>
					<div class="see-map">Посмотреть на карте</div>
					<ul class="social">
						<?php echo do_shortcode("[social]"); ?>
					</ul>
				</div>
				<div class="phone-header clear">
					<div class="mob-left">
						<p><?php echo do_shortcode("[phone]"); ?></p>
						<div class="call-back"><p>обратный звонок</p></div>
					</div>
					<div class="call-form">Записаться online</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="content-width clear">
				<?php
	              $args = array(
	              'theme_location'=>'top',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
		</div>
		<div class="menu-mobile-container">
			<p></p>
			<div></div>
		</div>
	</header>