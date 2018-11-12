<div id="featured-area" <?php if(get_theme_mod( 'laurel_promo' ) == true) : ?>class="promo-active"<?php else : ?>class="promo-inactive"<?php endif; ?>>

	<div class="sideslides">

		<div class="bxslider">

			<?php	// [2018.11.12 Ichi]トップのスライド写真設定・URLリンク設定 start ?>
			<div class="slide-item">
				<a href="https://yamamoto-kenta.com/about-me/">
					<div class="feat-item" style="background-image:url(https://yamamoto-kenta.com/wp-content/uploads/2018/10/トップ画像_1.jpg);"></div>
				</a>
			</div>

			<div class="slide-item">
				<a href="https://yamamoto-kenta.com/category/background/">
					<div class="feat-item" style="background-image:url(https://yamamoto-kenta.com/wp-content/uploads/2018/10/トップ画像_2.jpg);"></div>
				</a>
			</div>


			<div class="slide-item">
				<a href="https://yamamoto-kenta.com/online-college/">
					<div class="feat-item" style="background-image:url(https://yamamoto-kenta.com/wp-content/uploads/2018/10/トップ写真_3.jpg);"></div>
				</a>
			</div>

			<div class="slide-item">
				<a href="https://www.youtube.com/channel/UCWv4QD6t4L_ZbmFLxtIUazA">
					<div class="feat-item" style="background-image:url(https://yamamoto-kenta.com/wp-content/uploads/2018/10/トップ画像_4.jpg);"></div>
				</a>
			</div>
			<?php	// [2018.11.12 Ichi]トップのスライド写真設定・URLリンク設定 end ?>

			<?php
				// Get featured posts
				$featured_cat = get_theme_mod( 'laurel_featured_cat' );
				$get_featured_posts = get_theme_mod('laurel_featured_id');
				$number = get_theme_mod( 'laurel_featured_slider_slides' );

				if($get_featured_posts) {
					$featured_posts = explode(',', $get_featured_posts);
					$args = array( 'showposts' => $number, 'post_type' => array('post', 'page'), 'post__in' => $featured_posts, 'orderby' => 'post__in' );
				} else {
					$args = array( 'cat' => $featured_cat, 'showposts' => $number );
				}

			?>

			<?php $feat_query = new WP_Query( $args ); ?>

			<?php if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post(); ?>

			<?php

				// Get slider image
				if(rwmb_meta( 'laurel_meta_custom_slider' )) :

					$get_custom_feat_image = rwmb_meta( 'laurel_meta_custom_slider', 'size=full&limit=1');
					$feat_image = $get_custom_feat_image[0]['full_url'];

				else :

					if(has_post_thumbnail()) {
						$get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
						$feat_image = $get_feat_image[0];
					} else {
						$feat_image = get_template_directory_uri() . '/img/slider-default.png';
					}

				endif;

				if(rwmb_meta( 'laurel_meta_custom_slider_excerpt')) :
					$sub_title = rwmb_meta( 'laurel_meta_custom_slider_excerpt');
				else :
					$sub_title = laurel_string_limit_words(get_the_excerpt(), 9) . '&hellip;';
				endif;

			?>

			<div class="slide-item">
				<div class="feat-item" style="background-image:url(<?php echo $feat_image; ?>);"></div>

				<?php if(get_theme_mod( 'laurel_featured_slider_hide_cat' ) && get_theme_mod( 'laurel_featured_slider_hide_title' ) && get_theme_mod( 'laurel_featured_slider_hide_excerpt' ) && get_theme_mod( 'laurel_featured_slider_hide_button' )) : else : ?>
				<div class="feat-overlay">
					<?php if(!get_theme_mod( 'laurel_featured_slider_hide_cat' )) : ?><span class="cat"><?php the_category('<span>&#8226;</span> '); ?></span><?php endif; ?>
					<?php if(!get_theme_mod( 'laurel_featured_slider_hide_title' )) : ?><h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2><?php endif; ?>
					<?php if(!get_theme_mod( 'laurel_featured_slider_hide_excerpt' )) : ?><p><?php echo $sub_title; ?></p><?php endif; ?>
					<?php if(!get_theme_mod( 'laurel_featured_slider_hide_button' )) : ?>
					<div class="feat-read-more">
					<a href="<?php echo get_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'laurel' ); ?></a>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

			</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

</div>
