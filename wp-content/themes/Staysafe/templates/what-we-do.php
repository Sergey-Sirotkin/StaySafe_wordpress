<?php
/*
Template Name: what-we-do
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php $lang_prefix = carbon_lang_prefix(); ?>
<?php get_header() ?>
		<main class="page">
			<section class="impact">
				<div class="impact__container">
					<div class="impact__body">
						<p class="impact__subtitle subtitle"><?php echo carbon_get_post_meta( $page_id, 'what_main_subtitle'.$lang_prefix); ?></p>
						<h1 class="impact__title title"><?php echo carbon_get_post_meta( $page_id, 'what_main_title'.$lang_prefix); ?></h1>
						<ul class="impact__list">
							<li class="impact__item">
								<p class="impact__text"><?php echo carbon_get_post_meta( $page_id, 'what_main_text_01'.$lang_prefix); ?></p>
							</li>
							<li class="impact__item">
								<p class="impact__text"><?php echo carbon_get_post_meta( $page_id, 'what_main_text_02'.$lang_prefix); ?></p>
							</li>
						</ul>
					</div>
					<div data-da=".impact__body,991.98,2" class="impact__image">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'what_main_img'), 'full'); ?>" alt="impact">
					</div>
				</div>
			</section>
			<?php $news_items = carbon_get_the_post_meta('news_items'.$lang_prefix);?>
			<section class="news">
				<div class="news__container">
					<h2 class="news__title title"><?php echo carbon_get_post_meta( $page_id, 'latest_news_title'.$lang_prefix); ?></h2>
					<?php if ($news_items) : ?>
					<div class="news__body">
						<?php foreach ($news_items as $news_item) : ?>
						<div class="news-item">
							<div class="news-item__image">
								<img src="<?php echo wp_get_attachment_image_url( $news_item[ 'news_img'.$lang_prefix ], 'full' ); ?>" alt="new">
							</div>
							<div class="news-item__title"><?php echo $news_item['news_title'.$lang_prefix]?></div>
							<p class="news-item__text"><?php echo $news_item['news_text'.$lang_prefix]?></p>
						</div>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<?php if ($GLOBALS['stay_safe']['instagram']) : ?>
					<a href="<?php echo $GLOBALS['stay_safe']['instagram']; ?>" target="_blank" class="news__link icon-arrow">instagram</a>
					<?php endif; ?>
				</div>
			</section>
			<section class="help">
				<div class="help__container">
					<h2 class="help__title title"><?php echo carbon_get_post_meta( $page_id, 'help_title'.$lang_prefix); ?></h2>
					<p class="help__text"><?php echo carbon_get_post_meta( $page_id, 'help_text'.$lang_prefix); ?></p>
					<div class="help__links">
						<?php if ($GLOBALS['stay_safe']['donate']) : ?>
						<a href="<?php echo $GLOBALS['stay_safe']['donate']; ?>" target="_blank" class="help__link btn"><?php echo $GLOBALS['stay_safe']['donate_text']; ?></a>
						<?php endif; ?>
						<button data-popup="#popup-form" class="help__link help__link_white btn"><?php echo carbon_get_post_meta( $page_id, 'help_btn'.$lang_prefix); ?></button>
					</div>
				</div>
			</section>
			<?php $photos_items = carbon_get_the_post_meta('photos_items'.$lang_prefix);?>
			<?php if ($photos_items) : ?>
			<section class="photos">
				<div class="photos__container">
					<h2 class="photos__title title"><?php echo carbon_get_post_meta( $page_id, 'photos_title'.$lang_prefix); ?></h2>
					<p class="photos__subtitle"><?php echo carbon_get_post_meta( $page_id, 'photos_subtitle'.$lang_prefix); ?></p>
					<div class="photos-slider">
						<div class="photos-slider__slider swiper">
							<div class="photos-slider__wrapper swiper-wrapper">
								<?php foreach ($photos_items as $photos_item) : ?>
								<div class="photos-slide swiper-slide">
									<div class="photos-slide__inner">
										<div class="photos-slide__image">
											<img src="<?php echo wp_get_attachment_image_url( $photos_item[ 'photos_image'.$lang_prefix ], 'full' ); ?>" alt="photo">
										</div>
										<p class="photos-slide__text"><?php echo $photos_item['photos_text'.$lang_prefix]?></p>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="photos-slider__buttons">
								<button type="button" class="swiper-button-prev icon-arrow"></button>
								<button type="button" class="swiper-button-next icon-arrow"></button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php endif; ?>
		</main>
		<?php get_footer() ?>