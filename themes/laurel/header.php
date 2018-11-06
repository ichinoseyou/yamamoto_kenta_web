<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<?php if(!get_theme_mod('laurel_responsive')) { ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php } ?>	

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper">
		
		<header id="top-bar" <?php if(get_theme_mod('laurel_secondary_header')) : ?>class="header2"<?php endif; ?>>
			
			<?php if(get_theme_mod('laurel_secondary_header')) : else : ?>
			<div id="logo">
				<?php laurel_get_logo(); ?>
			</div>
			<?php endif; ?>
			
			<nav id="navigation">
			
				<div id="nav-wrapper">
					
					<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
					
				</div>
				
				<div id="slick-mobile-menu"></div>
			
			</nav>
			
			<div id="top-right">
				
				<?php if(!get_theme_mod('laurel_header_hide_search')) : ?>
				<div id="top-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<div id="show-search">
					<?php get_search_form(); ?>
					<a href="#" class="close-search"><i class="fa fa-close"></i></a>
				</div>
				<?php endif; ?>
				
				<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
				<?php if(!get_theme_mod('laurel_woo_cart_icon')) : ?>
				<div id="sp-shopping-cart">
				<?php $count = WC()->cart->cart_contents_count; ?>
					<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'laurel' ); ?>"><?php if ( $count >= 0 ) echo '<span class="sp-count">' . $count . '</span>'; ?></a>
				</div>
				<?php endif; ?>
				<?php endif; ?>
				
				<?php if(!get_theme_mod('laurel_header_hide_social')) : ?>
				<div id="top-social">
					<?php if(get_theme_mod('laurel_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('laurel_facebook')); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('laurel_twitter')); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('laurel_instagram')); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('laurel_pinterest')); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('laurel_bloglovin')); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('laurel_google')); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('laurel_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('laurel_youtube')); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('laurel_dribbble')); ?>" target="_blank"><i class="fa fa-dribbble"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('laurel_soundcloud')); ?>" target="_blank"><i class="fa fa-soundcloud"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('laurel_vimeo')); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('laurel_linkedin')); ?>" target="_blank"><i class="fa fa-linkedin"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_snapchat')) : ?><a href="http://snapchat.com/add/<?php echo esc_html(get_theme_mod('laurel_snapchat')); ?>" target="_blank"><i class="fa fa-snapchat-ghost"></i></a><?php endif; ?>
					<?php if(get_theme_mod('laurel_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('laurel_rss')); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
				</div>
				<?php endif; ?>
			
			</div>
			
		</header>
		
		<div id="inner-wrapper" <?php if(get_theme_mod('laurel_secondary_header')) : ?>class="header2"<?php endif; ?>>
			
			<?php if(get_theme_mod('laurel_secondary_header')) : ?>
			<div id="logo-secondary">
				
				<?php laurel_get_logo(); ?>
				
			</div>
			<?php endif; ?>
			
			<div id="mobile-logo">
				<?php laurel_get_logo(); ?>
			</div>