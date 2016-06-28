<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Golden_Mandarin
 */

?>
<div class="reviews">
					<h2>Отзывы наших клиентов </h2>	
					<ul class="clear">
						<?php $loop = new WP_Query( array( 'cat' => '14', 'posts_per_page' => 4 ) ); ?>
						<?php while ( $loop->have_posts() ) : $loop->the_post();
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); ?>
						<li>
							<p class="date-item"><?the_Date();?></p>
							<?php the_content();?>
							<a href="<?echo $thumb_url[0];?>" class="fancybox"><span>оригинал</span></a>
						</li>
						
						<?php endwhile; wp_reset_query(); ?>	
					</ul>
					<a href="#" class="link-next">все отзывы</a>
				</div>
