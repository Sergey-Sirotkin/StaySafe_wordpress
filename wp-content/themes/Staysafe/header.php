<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php the_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<a href="<?= get_home_url(); ?>" class="header__logo">
					<?php 
					$logo_img = '';
					if( $custom_logo_id = get_theme_mod('custom_logo') ){
						$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
							'class'    => 'custom-logo',
							'itemprop' => 'logo',
						) );
					}
					echo $logo_img; 
					?>
				</a>
				<div class="header__menu menu">
					<nav class="menu__body">
						<a href="<?= get_home_url(); ?>" class="menu__logo">
						<?php 
						$logo_img = '';
						if( $custom_logo_id = get_theme_mod('custom_logo') ){
							$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
								'class'    => 'custom-logo',
								'itemprop' => 'logo',
							) );
						}
						echo $logo_img; 
						?>
						</a>
						<?php
						wp_nav_menu( [
							'theme_location'  => 'menu_main_header',
							'container'       => 'null',
							'menu_class'      => 'menu__list',
						] );
						?>
					</nav>
				</div>
				<div class="header__info">
					<?php if ($GLOBALS['stay_safe']['phone']) : ?>
					<a href="tel:<?php echo $GLOBALS['stay_safe']['phone_digits']; ?>" class="header__phone icon-phone"><span><?php echo $GLOBALS['stay_safe']['phone']; ?></span></a>
					<?php endif; ?>
					<?php
					$menuParameters = array(
						'theme_location'  => 'menu_lang',
						'container'       => false,
						'echo'            => false,
						'items_wrap'      => '%3$s',
						'depth'           => 0,
						'menu_class'      => 'menu-lang',
						);
						echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
						?>
					<button type="button" class="menu__icon icon-menu"><span></span></button>
				</div>
			</div>
		</header>