<?php
/*
Template Name: home
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php get_header() ?>
		<main class="page">
			<section class="hero">
				<div class="hero__container">
					<div class="hero-body">
						<h1 class="hero-body__title"><?php echo carbon_get_post_meta( $page_id, 'main_title'.carbon_lang_prefix()); ?></h1>
						<p class="hero-body__text"><?php echo carbon_get_post_meta( $page_id, 'main_subtitle'.carbon_lang_prefix()); ?></p>
						<?php if ($GLOBALS['stay_safe']['donate']) : ?>
						<a href="<?php echo $GLOBALS['stay_safe']['donate']; ?>" target="_blank" class="hero-body__btn btn"><?php echo $GLOBALS['stay_safe']['donate_text']; ?></a>
						<?php endif; ?>
					</div>
					<div data-da=".hero-body,767.98,2" class="hero-bottom">
						<ul class="hero-bottom__socials">
							<?php if ($GLOBALS['stay_safe']['facebook']) : ?>
							<li class="hero-bottom__socials-item">
								<a href="<?php echo $GLOBALS['stay_safe']['facebook']; ?>" target="_blank" class="hero-bottom__socials-link icon-facebook"></a>
							</li>
							<?php endif; ?>
							<?php if ($GLOBALS['stay_safe']['instagram']) : ?>
							<li class="hero-bottom__socials-item">
								<a href="<?php echo $GLOBALS['stay_safe']['instagram']; ?>" target="_blank" class="hero-bottom__socials-link icon-instagram"></a>
							</li>
							<?php endif; ?>
						</ul>
						<p class="hero-bottom__socials-text"><?php echo carbon_get_post_meta( $page_id, 'main_socials_text'.carbon_lang_prefix()); ?></p>
					</div>
				</div>
			</section>
			<?php $about_left_list = carbon_get_the_post_meta('together_list_left'.carbon_lang_prefix());?>
			<?php $about_right_list = carbon_get_the_post_meta('together_list_right'.carbon_lang_prefix());?>
			<section class="about">
				<div class="about__container">
					<div class="about__body">
						<p class="about__subtitle subtitle"><?php echo carbon_get_post_meta( $page_id, 'together_subtitle'.carbon_lang_prefix()); ?></p>
						<h2 class="about__title title"><?php echo carbon_get_post_meta( $page_id, 'together_title'.carbon_lang_prefix()); ?></h2>
						<p class="about__text"><?php echo carbon_get_post_meta( $page_id, 'together_text'.carbon_lang_prefix()); ?></p>
						<p class="about__label"><?php echo carbon_get_post_meta( $page_id, 'together_label'.carbon_lang_prefix()); ?></p>
						<div class="about-lists">
							<?php if ($about_left_list) : ?>
							<ul>
							<?php foreach ($about_left_list as $about_left_item) : ?>
								<li><?php echo $about_left_item['together_list_left_item'.carbon_lang_prefix()]?></li>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
							<?php if ($about_right_list) : ?>
							<ul>
							<?php foreach ($about_right_list as $about_right_item) : ?>
								<li><?php echo $about_right_item['together_list_right_item'.carbon_lang_prefix()]?></li>
							<?php endforeach; ?>
							</ul>
							<?php endif; ?>
						</div>
						<a href="<?php echo get_permalink(pll_get_post(183)); ?>" class="about__btn btn"><?php echo carbon_get_post_meta( $page_id, 'together_btn'.carbon_lang_prefix()); ?></a>
					</div>
					<div data-da=".about__body,991.98,3" class="about__image">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'together_img'), 'full'); ?>" alt="about-img">
					</div>
				</div>
			</section>
			<?php $meet_team_items = carbon_get_the_post_meta('meet_team_item'.carbon_lang_prefix());?>
			<section class="team">
				<div class="team__container">
					<p class="team__subtitle subtitle"><?php echo carbon_get_post_meta( $page_id, 'meet_team_subtitle'.carbon_lang_prefix()); ?></p>
					<h2 class="team__title title"><?php echo carbon_get_post_meta( $page_id, 'meet_team_title'.carbon_lang_prefix()); ?></h2>
					<p class="team__text"><?php echo carbon_get_post_meta( $page_id, 'meet_team_text'.carbon_lang_prefix()); ?></p>
					<div class="team-body">
						<?php if ($meet_team_items) : ?>
						<?php foreach ($meet_team_items as $meet_team_item) : ?>
						<div class="team-body__item">
							<div class="team-body__img">
								<img src="<?php echo wp_get_attachment_image_url( $meet_team_item[ 'meet_team_item_image'.carbon_lang_prefix() ], 'full' ); ?>" alt="team">
							</div>
							<p class="team-body__title"><?php echo $meet_team_item['meet_team_item_title'.carbon_lang_prefix()]?></p>
							<p class="team-body__subtitle"><?php echo $meet_team_item['meet_team_item_subtitle'.carbon_lang_prefix()]?></p>
						</div>
						<?php endforeach; ?>
						<?php endif; ?>
					</div>
					<a href="<?php echo get_permalink(pll_get_post(185)); ?>" class="team__btn btn"><?php echo carbon_get_post_meta( $page_id, 'meet_team_btn'.carbon_lang_prefix()); ?></a>
				</div>
			</section>
			<section class="posts">
				<div class="posts__container">
					<h2 class="posts__title title"><?php echo carbon_get_post_meta( $page_id, 'do_well_title'.carbon_lang_prefix()); ?></h2>
					<div class="posts__items">
						<div class="posts-item">
							<div class="posts-item__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'do_well_img_01'), 'full'); ?>" alt="posts-img">
							</div>
							<h4 class="posts-item__title"><?php echo carbon_get_post_meta( $page_id, 'do_well_item_title_01'.carbon_lang_prefix()); ?></h4>
							<p class="posts-item__text"><?php echo carbon_get_post_meta( $page_id, 'do_well_item_text_01'.carbon_lang_prefix()); ?></p>
							<?php if ($GLOBALS['stay_safe']['donate']) : ?>
							<a href="<?php echo $GLOBALS['stay_safe']['donate']; ?>" target="_blank" class="posts-item__link icon-arrow"><?php echo $GLOBALS['stay_safe']['donate_text']; ?></a>
							<?php endif; ?>
						</div>
						<div class="posts-item">
							<div class="posts-item__image">
							<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'do_well_img_02'), 'full'); ?>" alt="posts-img">
							</div>
							<h4 class="posts-item__title"><?php echo carbon_get_post_meta( $page_id, 'do_well_item_title_02'.carbon_lang_prefix()); ?></h4>
							<p class="posts-item__text"><?php echo carbon_get_post_meta( $page_id, 'do_well_item_text_02'.carbon_lang_prefix()); ?></p>
							<a href="<?php echo get_permalink(pll_get_post(184)); ?>" class="posts-item__link icon-arrow"><?php echo carbon_get_post_meta( $page_id, 'do_well_item_btn_02'.carbon_lang_prefix()); ?></a>
						</div>
					</div>
				</div>
			</section>
			<section class="contact">
				<div class="contact__container">
					<div class="contact-form contact-form-home">
						<h2 class="contact-form__title title"><?php echo carbon_get_post_meta( $page_id, 'contact_title'.carbon_lang_prefix()); ?></h2>
						<div class="contact-form__image">
							<img src="<?php bloginfo('template_url') ?>/assets/img/decor-01.png" alt="decor">
						</div>
						<p class="contact-form__text"><?php echo carbon_get_post_meta( $page_id, 'contact_subtitle'.carbon_lang_prefix()); ?></p>
						<form class="contact-form__form" action="#">
						<?php echo do_shortcode('[contact-form-7 id="21" title="Main contact form"]') ?>
						</form>
					</div>
					<div class="contact-body">
						<div class="contact-body__inner">
							<h2 class="contact-body__title"><?php echo carbon_get_post_meta( $page_id, 'contact_right_title'.carbon_lang_prefix()); ?></h2>
							<ul class="contact-body__list">
								<?php if ($GLOBALS['stay_safe']['phone']) : ?>
								<li class="contact-body__item">
									<p class="contact-body__label"><?php echo carbon_get_post_meta( $page_id, 'contact_phone'.carbon_lang_prefix()); ?></p>
									<a href="tel:<?php echo $GLOBALS['stay_safe']['phone_digits']; ?>" class="contact-body__link"><?php echo $GLOBALS['stay_safe']['phone']; ?></a>
								</li>
								<?php endif; ?>
								<?php if ($GLOBALS['stay_safe']['email']) : ?>
								<li class="contact-body__item">
									<p class="contact-body__label"><?php echo carbon_get_post_meta( $page_id, 'contact_email'.carbon_lang_prefix()); ?></p>
									<a href="mailto:<?php echo $GLOBALS['stay_safe']['email']; ?>" class="contact-body__link"><?php echo $GLOBALS['stay_safe']['email']; ?></a>
								</li>
								<?php endif; ?>
								<?php if ($GLOBALS['stay_safe']['address_text']) : ?>
								<li class="contact-body__item">
									<p class="contact-body__label"><?php echo carbon_get_post_meta( $page_id, 'contact_address'.carbon_lang_prefix()); ?></p>
									<a href="<?php echo $GLOBALS['stay_safe']['address_link']; ?>" target="_blank" class="contact-body__link"><?php echo $GLOBALS['stay_safe']['address_text']; ?></a>
								</li>
								<?php endif; ?>
								<li class="contact-body__item">
									<p class="contact-body__text"><?php echo carbon_get_post_meta( $page_id, 'contact_payment'.carbon_lang_prefix()); ?></p>
								</li>
							</ul>
							<div class="contact-body-footer">
								<p class="contact-body-footer__label"><?php echo carbon_get_post_meta( $page_id, 'contact_socials'.carbon_lang_prefix()); ?></p>
								<ul class="contact-body-footer__socials">
									<?php if ($GLOBALS['stay_safe']['facebook']) : ?>
									<li class="contact-body-footer__item">
										<a href="<?php echo $GLOBALS['stay_safe']['facebook']; ?>" target="_blank" class="contact-body-footer__link icon-facebook"></a>
									</li>
									<?php endif; ?>
									<?php if ($GLOBALS['stay_safe']['instagram']) : ?>
									<li class="contact-body-footer__item">
										<a href="<?php echo $GLOBALS['stay_safe']['instagram']; ?>" target="_blank" class="contact-body-footer__link icon-instagram"></a>
									</li>
									<?php endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php $our_actions_items = carbon_get_the_post_meta('our_actions_items'.carbon_lang_prefix());?>
			<section class="actions">
				<div class="actions__container">
					<h2 class="actions__title title"><?php echo carbon_get_post_meta( $page_id, 'our_actions_title'.carbon_lang_prefix()); ?></h2>
					<p class="actions__subtitle"><?php echo carbon_get_post_meta( $page_id, 'our_actions_subtitle'.carbon_lang_prefix()); ?></p>
					<div class="actions-slider">
						<div class="actions-slider__slider swiper">
							<div class="actions-slider__wrapper swiper-wrapper">
							<?php if ($our_actions_items) : ?>
							<?php foreach ($our_actions_items as $our_actions_item) : ?>
								<div class="actions-slide swiper-slide">
									<div class="actions-slide__inner">
										<div class="actions-slide__image">
											<img src="<?php echo wp_get_attachment_image_url( $our_actions_item[ 'our_actions_image'.carbon_lang_prefix() ], 'full' ); ?>" alt="actions-image">
										</div>
										<div class="actions-slide__decor">
											<img src="<?php echo wp_get_attachment_image_url( $our_actions_item[ 'our_actions_decor'.carbon_lang_prefix() ], 'full' ); ?>" alt="actions-decor">
										</div>
										<div class="actions-slide__bullets"></div>
										<div class="actions-slide__body">
											<h4 class="actions-slide__title"><?php echo $our_actions_item['our_actions_item_title'.carbon_lang_prefix()]?></h4>
											<p class="actions-slide__text"><?php echo $our_actions_item['our_actions_item_text'.carbon_lang_prefix()]?></p>
											<a href="" data-popup="#popup-actions-<?php echo $our_actions_item['our_actions_index'.carbon_lang_prefix()]?>" class="actions-slide__link btn"><?php echo carbon_get_post_meta( $page_id, 'our_actions_btn_text'.carbon_lang_prefix()); ?></a>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<div class="actions-slider__buttons">
								<button type="button" class="swiper-button-prev icon-arrow"></button>
								<button type="button" class="swiper-button-next icon-arrow"></button>
							</div>
						</div>
					</div>
			</section>
			<section class="reports">
				<div class="reports__container">
					<h2 class="reports__title title"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_title'.carbon_lang_prefix()); ?></h2>
					<p class="reports__subtitle">Click on the photo to find out more</p>
					<div class="reports__gallery">
						<div class="reports__item">
							<div class="reports__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'photo_reports_img_01'), 'full'); ?>" alt="reports-img">
							</div>
							<p class="reports__text"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_text-01'.carbon_lang_prefix()); ?></p>
						</div>
						<div class="reports__item">
							<div class="reports__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'photo_reports_img_02'), 'full'); ?>" alt="reports-img">
							</div>
							<p class="reports__text"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_text-02'.carbon_lang_prefix()); ?></p>
						</div>
						<div class="reports__item">
							<div class="reports__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'photo_reports_img_03'), 'full'); ?>" alt="reports-img">
							</div>
							<p class="reports__text"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_text-03'.carbon_lang_prefix()); ?></p>
						</div>
						<div class="reports__item">
							<div class="reports__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'photo_reports_img_04'), 'full'); ?>" alt="reports-img">
							</div>
							<p class="reports__text"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_text-04'.carbon_lang_prefix()); ?></p>
						</div>
						<div class="reports__item reports__item_big">
							<div class="reports__image">
								<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'photo_reports_img_05'), 'full'); ?>" alt="reports-img">
							</div>
							<p class="reports__text"><?php echo carbon_get_post_meta( $page_id, 'photo_reports_text-05'.carbon_lang_prefix()); ?></p>
						</div>
					</div>
				</div>
			</section>
			<?php $partners_items = carbon_get_theme_option('our_partners_items');?>
			<section class="partners">
				<div class="partners__container">
					<div class="partners__title title"><?php echo carbon_get_theme_option('our_partners_title'.carbon_lang_prefix()) ?></div>
					<ul class="partners__list">
							<?php if ($partners_items) : ?>
							<?php foreach ($partners_items as $partners_item) : ?>
							<li class="partners__item">
								<img src="<?php echo wp_get_attachment_image_url( $partners_item[ 'our_partners_image'], 'full' ); ?>" alt="partner">
							</li>
							<?php endforeach; ?>
							<?php endif; ?>
					</ul>
				</div>
			</section>
		</main>
<?php get_footer() ?>