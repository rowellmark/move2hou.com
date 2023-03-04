<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">

    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>

	<header class="header absolute left-0 top-0 w-100">

		<div class="default-container flex justify-between items-center relative">

			<div class="header-left">
				<div class="logo w-100">
					<a href="<?= do_shortcode('[blogurl]')?>" class="site-name">
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Move2Hou" class="block w-100 height-auto" width="269" height="54">
					</a>
				</div><!-- end of logo -->
			</div><!-- end of header left -->


			<div class="header-right flex justify-end items-center">
				<nav class="navigation">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'menu_class' => 'flex') ); ?>
				</nav><!-- end of navigation -->

				<div class="hd-contact">
					<?= do_shortcode('[ai_client_phone]<i class="ai-font-phone"></i> {default-phone}[/ai_client_phone]')?>
				</div><!-- end of hd contact -->

				<div class="expanded-menu-button"></div><!-- end of expanded menu button -->
			</div><!-- end of header right -->

		</div><!-- end of default container -->
	</header><!-- end of header -->

	<header class="expanded-menu-wrap fixed w-100 h-100 top-0 left-0">
		<div class="expanded-menu w-100 h-100 relative">
			<div class="expanded-close absolute"><i class="ai-font-close-b"></i></div>
			<div class="container">
				<div class="expanded-logo w-100">
					<a href="<?= do_shortcode('[blogurl]')?>" class="site-name">
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Move2Hou" class="block w-100 height-auto" width="269" height="54">
					</a>
				</div><!-- end of expanded logo -->
				<nav class="navigation">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'fixed-nav', 'theme_location' => 'primary-menu', 'menu_class' => 'flex flex-wrap-wrap justify-center') ); ?>
				</nav><!-- end of navigation -->

				<div class="expanded-contact-info">
					<ul class="flex justify-center">
						<li>
							<i class="ai-font-phone"></i>
							<?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?>
						</li>
						<li>
							<i class="ai-font-envelope"></i>
							<?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?>
						</li>
						<li>
							<i class="ai-font-location-c"></i>
							<span><?= do_shortcode('[ai_client_address]')?></span>
						</li>
						<li>
							<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank"><i class="ai-font-instagram"></i></a>
						</li>
					</ul>
				</div><!-- end of expanded contact info -->
			</div>
		</div>
	</header>
	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner')) {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
