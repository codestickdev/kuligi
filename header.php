<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kuligi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVsxlxHIR-f5y2bHNk-_GmTGvbyBuZW_A"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="headerClone"></div>
	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container-lg">
			<div class="siteHeader__logo">
				<a href="<?php get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri() . '/images/logo_new.jpg'; ?>" />
				</a>
			</div>
			<nav class="siteHeader__menu">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kuligi' ); ?></button> -->
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav>
			<div class="siteHeader__social">
				<a href="<?php the_field('social_fb_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_fb_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_ig_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_ig_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_yt_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_yt_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_wap_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_wap_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_air_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_air_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_trip_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_trip_logo', 'option'); ?>" />
				</a>
				<a href="<?php the_field('social_pin_link', 'option'); ?>" class="social">
					<img src="<?php the_field('social_pin_logo', 'option'); ?>" />
				</a>
			</div>
			<div class="siteHeader__lang">
				
			</div>
			<div class="siteHeader__mobileMenu">
				<div class="openMobileMenu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<div id="mobileMenu" class="mobileMenu">
			<div class="mobileMenu__list">
				<?php wp_nav_menu(array('theme_location' => 'menu-1')); ?>
			</div>
		</div>
	</header><!-- #masthead -->
