<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden_Mandarin
 */

?>

	<div class="clear">
			<aside>
				<div class="left-menu">
				<?php
	              $args = array(
	              'theme_location'=>'service',
	              'container'=>'left-menu'
	              );
	              wp_nav_menu($args);
	            ?>
	        	</div>
				<a href="#" class="medical-link"><strong>медицинская лицензия</strong> 77-01-002242 от 14.06.2007</a>
				<a href="#" class="threed-link"> 3D-тур по салону</a>
				<a href="#" class="sertificats-link">Подарочные сертификаты</a>
				
			
				<!--banner 1-->
				<div class="banner-left-1 banner">
					<img src="<?=get_stylesheet_directory_uri();?>/images/banner/banner_logo.png" alt="">
					<p>This is Photoshop's<br>  version<br>  of Lorem Ipsum</p>
					<a href="#"></a>
				</div>
				<!--banner 2-->
				<div class="banner-left-2 banner">
					<img src="<?=get_stylesheet_directory_uri();?>/images/banner/banner_logo.png" alt="">
					<p>This is Photoshop's<br>  version<br>  of Lorem Ipsum</p>
					<a href="#"></a>
				</div>
			</aside>
			