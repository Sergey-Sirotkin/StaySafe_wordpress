<?php
/*
Template Name: about
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php $lang_prefix = carbon_lang_prefix(); ?>
<?php get_header() ?>
		<main class="page">
			<?php $team_slider = carbon_get_the_post_meta('team_slider'.$lang_prefix);?>
			<section class="about-us">
				<div class="about-us__container">
					<div class="about-us__body">
						<p class="about-us__subtitle subtitle"><?php echo carbon_get_post_meta( $page_id, 'team_subtitle'.$lang_prefix); ?></p>
						<h1 class="about-us__title title"><?php echo carbon_get_post_meta( $page_id, 'team_title'.$lang_prefix); ?></h1>
						<p class="about-us__text"><?php echo carbon_get_post_meta( $page_id, 'team_text'.$lang_prefix); ?></p>
					</div>
					<?php if ($team_slider) : ?>
					<div class="about-us-slider">
						<div class="about-us-slider__slider swiper">
							<div class="about-us-slider__wrapper swiper-wrapper">
							<?php foreach ($team_slider as $team_slide) : ?>
								<div class="about-us-slider__slide swiper-slide">
									<img src="<?php echo wp_get_attachment_image_url( $team_slide[ 'team_slide'.$lang_prefix ], 'full' ); ?>" alt="about-us">
								</div>
							<?php endforeach; ?>
							</div>
							<div class="about-us-slider__buttons">
								<button type="button" class="swiper-button-prev icon-arrow"></button>
								<button type="button" class="swiper-button-next icon-arrow"></button>
							</div>
							<div class="about-us-slider__bullets"></div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</section>
			<?php $statistics_items = carbon_get_the_post_meta('statistics_items'.$lang_prefix);?>
			<?php if ($statistics_items) : ?>
			<section class="statistics">
				<div class="statistics__container">
				<?php foreach ($statistics_items as $statistics_item) : ?>
					<div class="statistics__item">
						<div class="statistics__image">
							<img src="<?php echo wp_get_attachment_image_url( $statistics_item[ 'statistics_img'.$lang_prefix ], 'full' ); ?>" alt="statistics">
						</div>
						<div class="statistics__body">
							<p class="statistics__title"><?php echo $statistics_item['statistics_title'.$lang_prefix]?></p>
							<p class="statistics__subtitle"><?php echo $statistics_item['statistics_text'.$lang_prefix]?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</section>
			<?php endif; ?>
			<section class="how-we-help">
				<div class="how-we-help__container">
					<div class="how-we-help__image">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'how_help_img'), 'full'); ?>" alt="how-we-help">
					</div>
					<div class="how-we-help__body">
						<p class="how-we-help__subtitle subtitle"><?php echo carbon_get_post_meta( $page_id, 'how_help_subtitle'.$lang_prefix); ?></p>
						<h2 class="how-we-help__title title"><?php echo carbon_get_post_meta( $page_id, 'how_help_title'.$lang_prefix); ?></h2>
						<p class="how-we-help__text"><?php echo carbon_get_post_meta( $page_id, 'how_help_text'.$lang_prefix); ?></p>
					</div>
				</div>
			</section>
			<?php $teammates = carbon_get_the_post_meta('teammates'.$lang_prefix);?>
			<?php if ($teammates) : ?>
			<section class="our-team">
				<div class="our-team__container">
					<div class="our-team__title title"><?php echo carbon_get_post_meta( $page_id, 'our_team_title'.$lang_prefix); ?></div>
					<div class="our-team__body">
					<?php foreach ($teammates as $teammate) : ?>
						<div class="our-team__item">
							<div class="our-team__image">
								<img src="<?php echo wp_get_attachment_image_url( $teammate[ 'teammate_img'.$lang_prefix ], 'full' ); ?>" alt="our-team">
							</div>
							<p class="our-team__text"><?php echo $teammate['teammate_title'.$lang_prefix]?></p>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</section>
			<?php endif; ?>
		</main>
		<?php get_footer() ?>