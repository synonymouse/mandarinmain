<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Golden_Mandarin
 */

?>

<!-- #content -->
</div>
	<footer>
		<div class="content-width">
			<a href="/" class="logo"><img src="<?=get_stylesheet_directory_uri();?>/images/logo_footer.png" alt=""></a>
		</div>
		<div class="menu-footer">
			<div class="content-width clear">	
				<?php
	              $args = array(
	              'theme_location'=>'top',
	              'menu_class' => 'content-width clear',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="content-width clear container-links">
			<div class="column column-1">
				<p class="title-h3">Уход за волосами</p>
				<?php
	              $args = array(
	              'theme_location'=>'hair-repair',
	              );
	              wp_nav_menu($args);
	            ?>
				<p class="title-h3">Маникюр, педикюр</p>
				<?php
	              $args = array(
	              'theme_location'=>'manicure',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
			<div class="column column-2">
				<p class="title-h3">Косметология лица</p>
				<?php
	              $args = array(
	              'theme_location'=>'face-beauty',
	              );
	              wp_nav_menu($args);
	            ?>
				<p class="title-h3">Коррекция фигуры</p>
				<?php
	              $args = array(
	              'theme_location'=>'figure-correction',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
			<div class="column column-3">
				<p class="title-h3">SPA-процедуры</p>
				<?php
	              $args = array(
	              'theme_location'=>'spa-procedures',
	              );
	              wp_nav_menu($args);
	            ?>
				<p class="title-h3">SPA-программы</p>
				<?php
	              $args = array(
	              'theme_location'=>'spa-programms',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
			<div class="column column-4">
				<p class="title-h3">Омоложение</p>
				<?php
	              $args = array(
	              'theme_location'=>'rejuvenation',
	              );
	              wp_nav_menu($args);
	            ?>
				<p class="title-h3">Эпиляция</p>
				<?php
	              $args = array(
	              'theme_location'=>'epilation',
	              );
	              wp_nav_menu($args);
	            ?>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="content-width clear">
				<div class="left">
					<span class="copy">© 2009-<?=date("Y")?> "Золотой мандарин" - Cosmetology & SPA salon" </span>
					<span class="licensy">медицинская лицензия <strong>77-01-002242  от 14.06.2007</strong></span>
				</div>
				<ul class="social">
					<?php echo do_shortcode("[social]"); ?>
				</ul>
			</div>
		</div>
	</footer>
	<div class="bg-dark"></div>
	<div class="logo-group"></div>
	<div class="form-popup">
		<div class="container-form">
			<?php echo do_shortcode('[contact-form-7 id="94" title="Заявка на обратный звонок"]'); ?>
			<div class="close-pop"></div>
		</div>		
	</div>
	<div class="container-map">
		<div class="map-popup" id="map-popup"></div>
		<div class="close-pop"></div>
	</div>
	<div class="scrollTop"></div>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/jquery-1.11.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"> </script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
