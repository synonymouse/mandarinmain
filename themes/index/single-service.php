<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Golden_Mandarin
 */

get_header(); ?>
	<?php if (has_post_thumbnail()) { ?>
		<div class="title-block" style="background: url(<?php the_post_thumbnail(); ?>);">
		<div class="content-width">
			<p><?php the_title(); ?></p>
		</div>
	</div>
    <?php } else { ?>
    
    <?php } ?>

	<div class="content-width center-page">
			<?php if ( function_exists('yoast_breadcrumb') ) 
			{yoast_breadcrumb('<div class="pagination">','</div>');} ?>
		<?php
		get_template_part( 'template-parts/sidebar');
		?>	
	
			<div class="content-full">
				<?the_content();?>

				<?
				 if (types_render_field("included-services")) {
				?>
				<div class="included-services">
					<h2>Что входит в услугу </h2>
					<?echo types_render_field("included-services");?> 
				</div>
				<?}?>

				<?
				 if (types_render_field("for-whom-services")) {
				?>
				<div class="for-whom clear">
					<?echo types_render_field("for-whom-services");?> 
				</div>
				<?}?>

				<?
				 if (types_render_field("results-services")) {
				?>
				<div class="results">
					<h2>Что вы получаете в итоге</h2>
					<div class="gallery gallery-results">
						<div id="gallery-results" class="owl-carousel">
						<?echo types_render_field("results-services");?> 
						<div id="gallery-results" class="owl-carousel">
							<div class="item">
								<a href="images/img_receve1.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve1.png" alt=""></a>
							</div>
							<div class="item">
								<a href="images/img_receve2.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve2.png" alt=""></a>
							</div>
							<div class="item">
								<a href="images/img_receve3.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve3.png" alt=""></a>
							</div>
							<div class="item">
								<a href="images/img_receve1.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve1.png" alt=""></a>
							</div>
							<div class="item">
								<a href="images/img_receve2.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve2.png" alt=""></a>
							</div>
							<div class="item">
								<a href="images/img_receve3.png" class="fancybox" data-fancybox-group="gallery"><img src="images/img_receve3.png" alt=""></a>
							</div>
						</div>
						</div> 
					</div>					
				</div>
				<?}?>
					<?php
					get_template_part( 'template-parts/reviews');
					?>
				<?
				 if (types_render_field("price-services")) {
				?>
				<div class="cost-services">
					<h2>Стоимость услуг</h2>
					<?echo types_render_field("price-services");?> 
					
					<p class="text-after">Подробнее ознакомиться с полным перечнем цен на все парикмахерские услуги (модельные стрижки волос, стрижка мужская и женская, окрашивание и т.д.)</p>
					<a href="price.html" class="link-next">цены</a>
				</div>
				<?}?>
				<div class="container-form">
					<?php echo do_shortcode('[contact-form-7 id="97" title="Запись на прием"]'); ?>
				</div>
				<p class="text-after">Подробнее ознакомиться с полным перечнем цен на все парикмахерские услуги (модельные стрижки волос, стрижка мужская и женская, окрашивание и т.д.)</p>
			</div>
		</div>
	</div>
<?php
get_footer();
