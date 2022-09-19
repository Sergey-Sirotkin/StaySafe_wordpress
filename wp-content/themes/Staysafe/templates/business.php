<?php
/*
Template Name: business
*/
?>
<?php $page_id = get_the_ID(); ?>
<?php $lang_prefix = carbon_lang_prefix(); ?>
<?php get_header() ?>
		<main class="page">
			<section class="businesses-hero">
				<div class="businesses-hero__image">
					<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'businesses_main_img'), 'full'); ?>" alt="flag">
				</div>
				<div class="businesses-hero__container">
					<h1 class="businesses-hero__title title"><?php echo carbon_get_post_meta( $page_id, 'businesses_main_title'.$lang_prefix); ?></h1>
					<div class="businesses-hero__subtitle">
						<p><?php echo carbon_get_post_meta( $page_id, 'businesses_main_text-01'.$lang_prefix); ?></p>
						<p><?php echo carbon_get_post_meta( $page_id, 'businesses_main_text-02'.$lang_prefix); ?></p>
					</div>
					<button data-popup="#popup-form" class="businesses-hero__btn btn"><?php echo carbon_get_post_meta( $page_id, 'businesses_main_btn'.$lang_prefix); ?></button>
				</div>
			</section>
			<section class="hire">
				<div class="hire__container">
					<div class="hire__image">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'ambassadors_img'), 'full'); ?>" alt="logo">
					</div>
					<div class="hire__body">
						<div class="hire__decor">
							<img src="<?php bloginfo('template_url') ?>/assets/img/decor-06.png" alt="decor">
						</div>
						<h2 class="hire__title"><?php echo carbon_get_post_meta( $page_id, 'ambassadors_title'.$lang_prefix); ?></h2>
						<p class="hire__text"><?php echo carbon_get_post_meta( $page_id, 'ambassadors_text-01'.$lang_prefix); ?></p>
						<p class="hire__text"><?php echo carbon_get_post_meta( $page_id, 'ambassadors_text-02'.$lang_prefix); ?></p>
						<p class="hire__text"><?php echo carbon_get_post_meta( $page_id, 'ambassadors_text-03'.$lang_prefix); ?></p>
						<?php $hire_items = carbon_get_the_post_meta('ambassadors_list'.$lang_prefix);?>
						<?php if ($hire_items) : ?>
						<ul class="hire__list">
							<?php foreach ($hire_items as $hire_item) : ?>	
							<li class="hire__item">
								<p class="hire__text hire__text_list"><?php echo $hire_item['ambassadors_list_item'.$lang_prefix]?></p>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
						<p class="hire__text hire__text_bold"><?php echo carbon_get_post_meta( $page_id, 'ambassadors_text-04'.$lang_prefix); ?></p>
					</div>
				</div>
			</section>
			<section class="boxes">
				<div class="boxes__container">
					<div data-da=".boxes__body,767.98,1" class="boxes__image">
						<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'boxes_img'), 'full'); ?>" alt="box">
					</div>
					<div class="boxes__body">
						<h2 class="boxes__title"><?php echo carbon_get_post_meta( $page_id, 'boxes_title'.$lang_prefix); ?></h2>
						<p class="boxes__text"><?php echo carbon_get_post_meta( $page_id, 'boxes_text-01'.$lang_prefix); ?></p>
						<p class="boxes__text"><?php echo carbon_get_post_meta( $page_id, 'boxes_text-02'.$lang_prefix); ?></p>
						<?php if ($GLOBALS['stay_safe']['donate']) : ?>
						<a href="<?php echo $GLOBALS['stay_safe']['donate']; ?>" target="_blank" class="boxes__btn btn"><?php echo $GLOBALS['stay_safe']['donate_text']; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<section class="do-well">
				<div class="do-well__container">
					<h2 class="do-well__title"><?php echo carbon_get_post_meta( $page_id, 'well_title'.$lang_prefix); ?></h2>
					<div class="do-well__inner">
						<div class="do-well__decor do-well__decor_desktop">
							<img src="<?php bloginfo('template_url') ?>/assets/img/business/b-decor-01.png" alt="decor">
						</div>
						<div class="do-well__decor do-well__decor_mobile">
							<img src="<?php bloginfo('template_url') ?>/assets/img/business/b-decor-03.png" alt="decor">
						</div>
						<div class="do-well-body">
							<div class="do-well-body__item">
								<div class="do-well-body__item-inner">
									<h4 class="do-well-body__title"><?php echo carbon_get_post_meta( $page_id, 'well_item_title_01'.$lang_prefix); ?></h4>
									<p class="do-well-body__text"><?php echo carbon_get_post_meta( $page_id, 'well_item_text_01'.$lang_prefix); ?></p>
								</div>
								<div class="do-well-body__image">
									<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'well_item_img_01'), 'full'); ?>" alt="do-well-image">
								</div>
							</div>
							<div class="do-well-body__item">
								<div class="do-well-body__item-inner">
									<h4 class="do-well-body__title"><?php echo carbon_get_post_meta( $page_id, 'well_item_title_02'.$lang_prefix); ?></h4>
									<p class="do-well-body__text"><?php echo carbon_get_post_meta( $page_id, 'well_item_text_02'.$lang_prefix); ?></p>
								</div>
								<div class="do-well-body__image">
									<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'well_item_img_02'), 'full'); ?>" alt="do-well-image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="get-contact">
				<div class="get-contact__container">
					<div class="get-contact__body">
						<h2 class="get-contact__title title"><?php echo carbon_get_post_meta( $page_id, 'get_contact_title'.$lang_prefix); ?></h2>
						<p class="get-contact__text"><?php echo carbon_get_post_meta( $page_id, 'get_contact_text'.$lang_prefix); ?></p>
						<ul class="get-contact__list">
							<li class="get-contact-item">
								<span>1</span>
								<p class="get-contact-item__title"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_01_title'.$lang_prefix); ?></p>
								<p class="get-contact-item__text"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_01_text'.$lang_prefix); ?></p>
							</li>
							<li class="get-contact-item">
								<span>2</span>
								<p class="get-contact-item__title"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_02_title'.$lang_prefix); ?></p>
								<p class="get-contact-item__text"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_02_text'.$lang_prefix); ?></p>
							</li>
							<li class="get-contact-item">
								<span>3</span>
								<p class="get-contact-item__title"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_03_title'.$lang_prefix); ?></p>
								<p class="get-contact-item__text"><?php echo carbon_get_post_meta( $page_id, 'get_contact_step_03_text'.$lang_prefix); ?></p>
							</li>
						</ul>
					</div>
					<div class="get-contact__form">
						<div class="contact-form contact-form-business">
							<h2 class="contact-form__title title contact-form-title-business"><?php echo carbon_get_post_meta( $page_id, 'get_contact_title_form'.$lang_prefix); ?></h2>
							<form class="contact-form__form" action="#">
								<ul class="contact-form__list">
									<li class="contact-form__item">
										<label class="contact-form__label" for="name">Name<span>*</span></label>
										<input required id="name" type="text" class="contact-form__input">
									</li>
									<li class="contact-form__item">
										<label class="contact-form__label" for="email">E-mail<span>*</span></label>
										<input required id="email" type="email" class="contact-form__input">
									</li>
									<li class="contact-form__item">
										<label class="contact-form__label" for="phone">Phone</label>
										<input id="phone" type="tel" class="contact-form__input">
									</li>
									<li class="contact-form__item">
										<label class="contact-form__label" for="message">Your message to us</label>
										<textarea class="contact-form__textarea" id="message"></textarea>
									</li>
								</ul>
								<button type="submit" class="contact-form__button btn">Submit</button>
							</form>
						</div>
						<ul class="get-contact__socials">
							<?php if ($GLOBALS['stay_safe']['facebook']) : ?>
							<li class="get-contact__socials-item">
								<a href="<?php echo $GLOBALS['stay_safe']['facebook']; ?>" target="_blank" class="get-contact__socials-link icon-facebook"></a>
							</li>
							<?php endif; ?>
							<?php if ($GLOBALS['stay_safe']['instagram']) : ?>
							<li class="get-contact__socials-item">
								<a href="<?php echo $GLOBALS['stay_safe']['instagram']; ?>" target="_blank" class="get-contact__socials-link icon-instagram"></a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</section>
			<?php $partners_items = carbon_get_theme_option('our_partners_items');?>
			<?php if ($partners_items) : ?>
			<section class="partners">
				<div class="partners__container">
					<div class="partners__title title"><?php echo carbon_get_theme_option('our_partners_title'.$lang_prefix) ?></div>
					<ul class="partners__list">
							<?php foreach ($partners_items as $partners_item) : ?>
							<li class="partners__item">
								<img src="<?php echo wp_get_attachment_image_url( $partners_item[ 'our_partners_image'], 'full' ); ?>" alt="partner">
							</li>
							<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<?php endif; ?>
		</main>
		<div id="popup-form" aria-hidden="true" class="popup">
			<div class="popup__wrapper">
				<div class="popup__content popup__content_form">
					<button data-close type="button" class="popup__close popup__close_form"></button>
					<div class="popup-form">
						<div class="contact-form contact-form-popup">
							<h2 class="contact-form__title contact-form__title_popup"><?php echo carbon_get_theme_option('contact_popup_title'.carbon_lang_prefix()); ?></h2>
							<form class="contact-form__form" action="#"><?php echo do_shortcode('[contact-form-7 id="21" title="Main contact form"]') ?></form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_footer() ?>