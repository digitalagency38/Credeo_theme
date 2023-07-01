</main>
<footer class="footer">
    <div class="footer__in center_block">
        <div class="footer__text"><?= get_option('copy2'); ?></div>
        <div class="footer__item">
            <div class="footer__main">
                <div class="footer__logo">
                    <img src="<?= get_option('sale_image'); ?>" alt="">
                </div>
                <div class="footer__title"><?= get_option('copy'); ?></div>
            </div>
            <div class="footer__socs mob">
                <a href="<?= get_option('soc1'); ?>" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.906 7.00176C16.9108 7.00176 16.9171 7.00176 16.9235 7.00176C17.09 7.00176 17.2446 7.05224 17.3713 7.13923L17.3689 7.13768C17.4614 7.21612 17.5235 7.32641 17.5386 7.45068V7.45301C17.5546 7.54776 17.5633 7.6565 17.5633 7.76756C17.5633 7.81805 17.5618 7.86775 17.5578 7.91746V7.91047C17.3785 9.75042 16.6008 14.2124 16.2056 16.2722C16.0382 17.1444 15.7092 17.4364 15.3904 17.4644C14.698 17.5273 14.1721 17.0186 13.5012 16.5899C12.451 15.918 11.8574 15.5002 10.8382 14.8454C9.65976 14.0897 10.4239 13.6726 11.0948 12.9938C11.2709 12.8152 14.3235 10.1085 14.3833 9.86304C14.3865 9.84828 14.388 9.83197 14.388 9.81489C14.388 9.7543 14.3649 9.69916 14.3275 9.65722C14.2861 9.63081 14.2343 9.61606 14.1801 9.61606C14.1442 9.61606 14.11 9.62305 14.0781 9.6347L14.0797 9.63392C13.9745 9.65722 12.2969 10.7378 9.04701 12.8758C8.69243 13.1484 8.24462 13.3208 7.75697 13.341H7.75219C7.06136 13.2595 6.43426 13.1096 5.83904 12.896L5.89801 12.9146C5.1506 12.6769 4.55697 12.5519 4.60797 12.1496C4.63506 11.9404 4.93094 11.7263 5.49562 11.5073C8.97397 10.03 11.2935 9.05633 12.4542 8.58618C13.9124 7.99554 15.0916 7.56485 16.7801 7.02506L16.9052 7.00098L16.906 7.00176ZM11.9721 0C5.35697 0.0155336 0 5.24646 0 11.6968C0 18.1564 5.37211 23.3936 12 23.3936C18.6279 23.3936 24 18.1572 24 11.6968C24 5.24646 18.643 0.0155336 12.0295 0H12.0279C12.0093 0 11.9907 0 11.9721 0Z" fill="#34ABDF"/>
                    </svg>
                </a>
                <a href="<?= get_option('soc2'); ?>" target="_blank">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4967 0C5.15692 0 0 5.24662 0 11.6967C0 14.2547 0.811058 16.627 2.1898 18.5525L0.756887 22.8983L5.17713 21.4614C6.99516 22.6854 9.16475 23.3936 11.5033 23.3936C17.8431 23.3936 23 18.1467 23 11.6969C23 5.24683 17.8431 0.000193352 11.5033 0.000193352L11.4967 0ZM8.28616 5.94139C8.06317 5.39819 7.89417 5.37763 7.55635 5.36366C7.44133 5.35686 7.31314 5.35008 7.17103 5.35008C6.73155 5.35008 6.27204 5.48068 5.99488 5.76946C5.65706 6.12014 4.81889 6.93832 4.81889 8.61624C4.81889 10.2941 6.02196 11.9169 6.1841 12.144C6.3531 12.3707 8.52954 15.8639 11.9089 17.2876C14.5515 18.4015 15.3357 18.2983 15.9371 18.1677C16.8157 17.9752 17.9175 17.3148 18.1946 16.5173C18.4718 15.7195 18.4718 15.0387 18.3905 14.8943C18.3095 14.75 18.0863 14.6677 17.7485 14.4955C17.4107 14.3236 15.7681 13.4984 15.4572 13.3884C15.1529 13.2715 14.8624 13.3129 14.6328 13.643C14.3083 14.1037 13.9907 14.5714 13.7338 14.8532C13.531 15.0733 13.1997 15.1008 12.9227 14.9838C12.5509 14.8258 11.5102 14.4542 10.2259 13.2921C9.23228 12.3914 8.55646 11.2707 8.36056 10.9338C8.16447 10.5901 8.34032 10.3904 8.49559 10.2049C8.66459 9.99159 8.82675 9.84041 8.99575 9.64091C9.16476 9.4416 9.25937 9.33836 9.36753 9.10451C9.48255 8.87764 9.40127 8.64379 9.32021 8.47185C9.23914 8.2999 8.56331 6.62199 8.28616 5.94139Z" fill="#4EC275"/>
                    </svg>
                </a>
            </div>
            <nav class="footer__menu">
            	<?php
            		wp_nav_menu(
            			array(
            				'menu'            => 'Меню',
            				'theme_location'  => '',
            				'container'       => 'ul'
            			)
            		);
            	?>
            </nav>
            <div class="footer__info">
                <div class="footer__socs">
                    <a href="<?= get_option('soc1'); ?>" target="_blank">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.906 7.00176C16.9108 7.00176 16.9171 7.00176 16.9235 7.00176C17.09 7.00176 17.2446 7.05224 17.3713 7.13923L17.3689 7.13768C17.4614 7.21612 17.5235 7.32641 17.5386 7.45068V7.45301C17.5546 7.54776 17.5633 7.6565 17.5633 7.76756C17.5633 7.81805 17.5618 7.86775 17.5578 7.91746V7.91047C17.3785 9.75042 16.6008 14.2124 16.2056 16.2722C16.0382 17.1444 15.7092 17.4364 15.3904 17.4644C14.698 17.5273 14.1721 17.0186 13.5012 16.5899C12.451 15.918 11.8574 15.5002 10.8382 14.8454C9.65976 14.0897 10.4239 13.6726 11.0948 12.9938C11.2709 12.8152 14.3235 10.1085 14.3833 9.86304C14.3865 9.84828 14.388 9.83197 14.388 9.81489C14.388 9.7543 14.3649 9.69916 14.3275 9.65722C14.2861 9.63081 14.2343 9.61606 14.1801 9.61606C14.1442 9.61606 14.11 9.62305 14.0781 9.6347L14.0797 9.63392C13.9745 9.65722 12.2969 10.7378 9.04701 12.8758C8.69243 13.1484 8.24462 13.3208 7.75697 13.341H7.75219C7.06136 13.2595 6.43426 13.1096 5.83904 12.896L5.89801 12.9146C5.1506 12.6769 4.55697 12.5519 4.60797 12.1496C4.63506 11.9404 4.93094 11.7263 5.49562 11.5073C8.97397 10.03 11.2935 9.05633 12.4542 8.58618C13.9124 7.99554 15.0916 7.56485 16.7801 7.02506L16.9052 7.00098L16.906 7.00176ZM11.9721 0C5.35697 0.0155336 0 5.24646 0 11.6968C0 18.1564 5.37211 23.3936 12 23.3936C18.6279 23.3936 24 18.1572 24 11.6968C24 5.24646 18.643 0.0155336 12.0295 0H12.0279C12.0093 0 11.9907 0 11.9721 0Z" fill="#34ABDF"/>
                        </svg>
                    </a>
                    <a href="<?= get_option('soc2'); ?>" target="_blank">
                        <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4967 0C5.15692 0 0 5.24662 0 11.6967C0 14.2547 0.811058 16.627 2.1898 18.5525L0.756887 22.8983L5.17713 21.4614C6.99516 22.6854 9.16475 23.3936 11.5033 23.3936C17.8431 23.3936 23 18.1467 23 11.6969C23 5.24683 17.8431 0.000193352 11.5033 0.000193352L11.4967 0ZM8.28616 5.94139C8.06317 5.39819 7.89417 5.37763 7.55635 5.36366C7.44133 5.35686 7.31314 5.35008 7.17103 5.35008C6.73155 5.35008 6.27204 5.48068 5.99488 5.76946C5.65706 6.12014 4.81889 6.93832 4.81889 8.61624C4.81889 10.2941 6.02196 11.9169 6.1841 12.144C6.3531 12.3707 8.52954 15.8639 11.9089 17.2876C14.5515 18.4015 15.3357 18.2983 15.9371 18.1677C16.8157 17.9752 17.9175 17.3148 18.1946 16.5173C18.4718 15.7195 18.4718 15.0387 18.3905 14.8943C18.3095 14.75 18.0863 14.6677 17.7485 14.4955C17.4107 14.3236 15.7681 13.4984 15.4572 13.3884C15.1529 13.2715 14.8624 13.3129 14.6328 13.643C14.3083 14.1037 13.9907 14.5714 13.7338 14.8532C13.531 15.0733 13.1997 15.1008 12.9227 14.9838C12.5509 14.8258 11.5102 14.4542 10.2259 13.2921C9.23228 12.3914 8.55646 11.2707 8.36056 10.9338C8.16447 10.5901 8.34032 10.3904 8.49559 10.2049C8.66459 9.99159 8.82675 9.84041 8.99575 9.64091C9.16476 9.4416 9.25937 9.33836 9.36753 9.10451C9.48255 8.87764 9.40127 8.64379 9.32021 8.47185C9.23914 8.2999 8.56331 6.62199 8.28616 5.94139Z" fill="#4EC275"/>
                        </svg>
                    </a>
                </div>
                <a href="tel:<?= get_option('tel'); ?>" class="footer__tel"><?= get_option('tel'); ?></a>
                <button class="footer__btn" data-modal-id="1">Заказать обратный звонок</button>
            </div>
            <div class="footer__title mob"><?= get_option('copy'); ?></div>
        </div>
    </div>
</footer>
<div class="modal" data-modal="1">
    <div class="modal__in">
        <div class="modal__closer"></div>
        <div class="modal__title">Оставьте заявку прямо сейчас </div>
        <div class="modal__text">Наш специалист свяжется с Вами в ближайшее время</div>
		<form class="feedback__form" action="/callback/" method="POST" name="">
			<input type="hidden" name="subject" value="Получить займ">
			<input class="feedback__input" type="name" placeholder="Введите имя" name="name" required="required">
			<input class="feedback__input" type="tel" placeholder="Введите телефон" name="tel" required="required">
			<input id="check-37" name="check" type="hidden" value="" />
			<input class="global_btn feedback__submit js_submit" type="submit" onclick="document.getElementById('check-34').value = 'stopSpam';" value="Оставить заявку">
			<input type="hidden" name="UTM_SOURCE" value="">
			<input type="hidden" name="UTM_MEDIUM" value="">
			<input type="hidden" name="UTM_CAMPAIGN" value="">
			<input type="hidden" name="UTM_TERM" value="">
			<input type="hidden" name="UTM_CONTENT" value="">
			<input type="hidden" name="affiliate_id">
			<input type="hidden" name="source">
			<input type="hidden" name="transaction_id">
			<div class="politic_text">Нажимая на кнопку «Оставить заявку», я соглашаюсь на обработку персональных данных и согласен с Политикой конфиденциальности и Лицензией</div>
			<!--<div class="modal-body isSent">-->
			<!--	<h2><span>Спасибо</span>, мы получили вашу заявку. Позвоним через 3 минуты!</h2>-->
			<!--</div>-->
		</form>
    </div>
</div>
    </div>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&_v=20230630103800" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);

        <?php $map_block = get_field( 'map_block' );?>
        function init() {
        var myMap = new ymaps.Map("map", {
            center: [<?php echo $map_block['center_coords']; ?>],
            zoom: 10
        });

        var markers = [
            <?php $map_block_list = ($map_block['list']); ?>
			<?php if (is_array($map_block_list)) {
				foreach ($map_block_list as $e) { ?>
                    { coordinates: [<?php echo $e['coords']; ?>], content: '<?php echo $e['address']; ?>' },
				<?php } ?>
			<?php } ?>
        ];

        markers.forEach(function(marker) {
            var placemark = new ymaps.Placemark(
            marker.coordinates,
            { content: marker.content }
            );

            myMap.geoObjects.add(placemark);

            myMap.behaviors.enable('dblClickZoom');
            placemark.options.set('draggable', true);
        });
        }
    </script>
    <script src="<?php echo get_theme_file_uri(); ?>/dist/js/app.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/form.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/modernizr.custom.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/flexmenu.min.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/main_dop.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/form_step.js"></script>
    <script src="<?php echo get_theme_file_uri(); ?>/js/calc_step.js"></script>
    <?php wp_footer();?>
</body>
</html>