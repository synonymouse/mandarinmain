<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Главная страница
 * @package Golden_Mandarin
 */

get_header(); ?>



	<div class="container-carousel">
		<div id="top-carousel" class="owl-carousel">
			<?php $loop = new WP_Query( array( 'post_type' => 'main-slider', 'posts_per_page' => 20 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
			<div class="item">
				<a href="<?echo types_render_field("main-slider-url");?>">
				<div class="content-width">
					<p class="title-slide"><?php the_title(); ?></p>
				</div>
				<img src="<?echo $thumb_url[0];?>" alt="<?php the_title(); ?>">
				</a>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</div>
		<div class="content-width cont-scroll">
			<a href="#directions" class="scroll-directions"></a>
		</div>
	</div>
	<div id="directions" class="content-width directions">
		<ul class="clear">
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_1.png" alt="">
					<h3>Омоложение</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_2.png" alt="">
					<h3>Косметология лица</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_3.png" alt="">
					<h3>Коррекция фигуры</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_4.png" alt="">
					<h3>Эпиляция</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_7.png" alt="">
					<h3>стрижка и укладка </h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_8.png" alt="">
					<h3>Маникюр, педикюр</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_5.png" alt="">
					<h3>SPA - процедуры</h3>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri();?>/images/category_img_6.png" alt="">
					<h3>SPA - программы</h3>
				</a>
			</li>
		</ul>
	</div>
	<div class="few-words">
		<div class="content-width">
			<div class="container-words clear">
				<?the_content();?>
			</div>
		</div>
	</div>
	<!--banner home-->
	<div class="banner-home banner">
		<img src="<?=get_stylesheet_directory_uri();?>/images/banner/banner_logo.png" alt="">
		<p>This is Photoshop's version<br>  of Lorem Ipsum</p>
		<a href="#"></a>
	</div>
	<!--banner home-->
	<div class="specialists">
		<div class="content-width">
			<h2>Специалисты</h2>
			<ul class="clear">
				<?php $loop = new WP_Query( array( 'post_type' => 'expert', 'posts_per_page' => 4 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
				<li>
					<a href="#">
						<p><img src="<?echo $thumb_url[0];?>" alt="<?php the_title(); ?>"></p>
						<h3><?php the_title(); ?></h3>
						<h3><?echo types_render_field("specialty");?> </h3>
					</a>
				</li>
				<?php endwhile; wp_reset_query(); ?>	
				
			</ul>		
		</div>
	</div>
	<div class="gallery">
		<div class="content-width">
			<h2>Галерея</h2>	
			<div id="gallery-carousel" class="owl-carousel">
				<?echo types_render_field("glavnaya-gallery");?>
			</div>
			<a href="#" class="link-next">перейти в галерею</a>
		</div>
	</div>
	<div class="text-block">
		<div class="content-width">
			<?echo types_render_field("glavnaya-bottom");?>
		</div>
	</div>
	<div class="map-container">
		<div class="content-width">
			<div class="contacts-cont">
				<div class="border-cont">
					<h2>Наш адрес</h2>
					<address>
						119415 Москва,<br>
						Проспект Вернадского, д.37,<br> 
						корпус 1Б
					</address>
					<p><span>Телефон: </span><a class="bold-text" href="tel:4953080866">(495)308-08-66</a></p>
					<p><span>E-mail: </span><a href="mailto:goldenmandarin@mail.ru">goldenmandarin@mail.ru</a></p>
					<p class="time-work">Время работы: <strong>с 10-00 до 22-00</strong></p>
					<a href="#" class="link-next">Записаться на прием</a>
				</div>
			</div>
		</div>
		<div id="map"></div>
	</div>
	









<?php
get_footer();
