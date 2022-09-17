<footer class="footer">
			<div class="footer__container">
				<div class="footer-top">
					<a href="<?= get_home_url(); ?>" class="footer-top__logo">
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
					<form data-da=".footer-body,767.98,2" class="footer-top__form" action="#">
					<?php echo do_shortcode('[contact-form-7 id="22" title="Small contact form"]') ?>
					</form>
				</div>
				<div class="footer-body">
				<?php
						wp_nav_menu( [
							'theme_location'  => 'menu_footer',
							'container'       => 'null',
							'menu_class'      => 'footer-body-list',
							'items_wrap'  => '<ul id="%1$s" class="%2$s" data-da=".footer-top,767.98">%3$s</ul>',
						] );
				?>
					<ul class="footer-body-contacts">
						<li class="footer-body-contacts__item">
							<p class="footer-body-contacts__text"><?php echo carbon_get_post_meta( $page_id, 'contact_phone'.carbon_lang_prefix()); ?></p>
							<a href="tel:<?php echo $GLOBALS['stay_safe']['phone_digits']; ?>" class="footer-body-contacts__link"><?php echo $GLOBALS['stay_safe']['phone']; ?></a>
						</li>
						<?php if ($GLOBALS['stay_safe']['email']) : ?>
						<li class="footer-body-contacts__item">
							<p class="footer-body-contacts__text"><?php echo carbon_get_post_meta( $page_id, 'contact_email'.carbon_lang_prefix()); ?></p>
							<a href="mailto:<?php echo $GLOBALS['stay_safe']['email']; ?>" class="footer-body-contacts__link"><?php echo $GLOBALS['stay_safe']['email']; ?></a>
						</li>
						<?php endif; ?>
					</ul>
					<?php if ($GLOBALS['stay_safe']['address_text']) : ?>
					<div class="footer-body-address">
						<p class="footer-body-address__text"><?php echo carbon_get_post_meta( $page_id, 'contact_address'.carbon_lang_prefix()); ?></p>
						<a href="<?php echo $GLOBALS['stay_safe']['address_link']; ?>" target="_blank" class="footer-body-address__link"><?php echo $GLOBALS['stay_safe']['address_text']; ?></a>
					</div>
					<?php endif; ?>
					<ul class="footer-body-socials">
					<?php if ($GLOBALS['stay_safe']['facebook']) : ?>
						<li class="footer-body-socials__item">
							<a href="<?php echo $GLOBALS['stay_safe']['facebook']; ?>" target="_blank" class="footer-body-socials__link icon-facebook"></a>
						</li>
						<?php endif; ?>
						<?php if ($GLOBALS['stay_safe']['instagram']) : ?>
						<li class="footer-body-socials__item">
							<a href="<?php echo $GLOBALS['stay_safe']['instagram']; ?>" target="_blank" class="footer-body-socials__link icon-instagram"></a>
						</li>
						<?php endif; ?>
					</ul>
				</div>
				<?php if ($GLOBALS['stay_safe']['copy']) : ?>
				<div class="footer-bottom">
					<div class="footer-bottom__copy"><?php echo $GLOBALS['stay_safe']['copy']; ?></div>
				</div>
				<?php endif; ?>
			</div>
		</footer>
	</div>
	<div class="scroll-up">
		<svg class="scroll-up__svg" viewBox="-2 -2 52 52">
			<path class="scroll-up__svg-path" d="
				M24,0
				a24,24, 0 0,1 0,48
				a24,24, 0 0,1 0,-48
				" />
		</svg>
	</div>
	<div id="popup-actions-1" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close">Закрыть</button>
				<div class="popup__text">Я 1 попап
				</div>
			</div>
		</div>
	</div>
	<div id="popup-actions-2" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close">Закрыть</button>
				<div class="popup__text">Я 2 попап
				</div>
			</div>
		</div>
	</div>
	<div id="popup-actions-3" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<button data-close type="button" class="popup__close">Закрыть</button>
				<div class="popup__text">Я 3 попап
				</div>
			</div>
		</div>
	</div>
    <?php wp_footer(); ?>
</body>

</html>