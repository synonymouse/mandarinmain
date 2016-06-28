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
 * Template Name: Внутренняя страница
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
				
				
				<?php
					get_template_part( 'template-parts/reviews');
					?>
				
				<div class="container-form">
					<?php echo do_shortcode('[contact-form-7 id="97" title="Запись на прием"]'); ?>
				</div>
				<p class="text-after">Подробнее ознакомиться с полным перечнем цен на все парикмахерские услуги (модельные стрижки волос, стрижка мужская и женская, окрашивание и т.д.)</p>
			</div>
		</div>
	</div>

<?php
get_footer();
