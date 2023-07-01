<?php 
/**
*	Template name: Главная страница
*/
?>
<?php
    get_header();
?>
<?php $first_block = get_field( 'first_block' );?>
<?php if ($first_block['title']): ?>
    <section id="first_block" class="first_block">
        <div class="first_block__in center_block">
            <div class="first_block__blocks">
                <div class="first_block__l-side">
                    <h1 class="first_block__title"><?php echo $first_block['title']; ?></h1>
                    <div class="first_block__text"><?php echo $first_block['text']; ?></div>
                    <div class="first_block__form">
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
                			<div class="personal_text">Персональные данные защищены. Официальный оператор по обработке Персональных данных</div>
                			<div class="politic_text">Нажимая на кнопку «Оставить заявку», я соглашаюсь на обработку персональных данных и согласен с Политикой конфиденциальности и Лицензией</div>
					        <!--<div class="block_main__sending">-->
					        <!--    <div class="block_main__sending--tit">СПАСИБО!</div>-->
					        <!--    <div class="block_main__sending--txt">Ваша заявка отправлена!</div>-->
					        <!--    <div class="block_main__sending--icon">-->
					        <!--        <svg width="130" height="130" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">-->
             <!--                       <path d="M59.9481 7.88451C62.3086 4.20048 67.6914 4.20048 70.0519 7.88451L74.3303 14.5618C76.0022 17.1711 79.3862 18.0778 82.1388 16.654L89.1827 13.0106C93.0689 11.0004 97.7306 13.6918 97.9328 18.0625L98.2994 25.9844C98.4427 29.0801 100.92 31.5573 104.016 31.7006L111.938 32.0672C116.308 32.2694 119 36.9311 116.989 40.8174L113.346 47.8612C111.922 50.6138 112.829 53.9978 115.438 55.6697L122.115 59.9481C125.8 62.3086 125.8 67.6914 122.115 70.0519L115.438 74.3303C112.829 76.0022 111.922 79.3862 113.346 82.1388L116.989 89.1826C119 93.0689 116.308 97.7306 111.938 97.9328L104.016 98.2994C100.92 98.4427 98.4427 100.92 98.2994 104.016L97.9328 111.938C97.7306 116.308 93.0689 119 89.1826 116.989L82.1388 113.346C79.3862 111.922 76.0022 112.829 74.3303 115.438L70.0519 122.115C67.6914 125.8 62.3086 125.8 59.9481 122.115L55.6697 115.438C53.9978 112.829 50.6138 111.922 47.8612 113.346L40.8174 116.989C36.9311 119 32.2694 116.308 32.0672 111.938L31.7006 104.016C31.5573 100.92 29.0801 98.4427 25.9843 98.2994L18.0625 97.9328C13.6918 97.7306 11.0004 93.0689 13.0106 89.1826L16.654 82.1388C18.0778 79.3862 17.1711 76.0022 14.5617 74.3303L7.88451 70.0519C4.20048 67.6914 4.20048 62.3086 7.88451 59.9481L14.5618 55.6697C17.1711 53.9978 18.0778 50.6138 16.654 47.8612L13.0106 40.8173C11.0004 36.9311 13.6918 32.2694 18.0625 32.0672L25.9844 31.7006C29.0801 31.5573 31.5573 29.0801 31.7006 25.9843L32.0672 18.0625C32.2694 13.6918 36.9311 11.0004 40.8174 13.0106L47.8612 16.654C50.6138 18.0778 53.9978 17.1711 55.6697 14.5617L59.9481 7.88451Z" fill="#4EC275"/>-->
             <!--                       <path fill-rule="evenodd" clip-rule="evenodd" d="M87.6767 48.3287C89.4701 50.1222 89.4701 53.0299 87.6767 54.8233L60.4756 82.0244C58.6821 83.8179 55.7744 83.8179 53.981 82.0244L42.3234 70.3668C40.5299 68.5734 40.5299 65.6656 42.3234 63.8722C44.1168 62.0788 47.0245 62.0788 48.818 63.8722L57.2283 72.2825L81.182 48.3287C82.9755 46.5353 85.8832 46.5353 87.6767 48.3287Z" fill="white"/>-->
             <!--                       </svg>-->
					        <!--    </div>-->
					        <!--    <div class="block_main__sending--txt">Менеджер перезвонит Вам в течение 5 минут</div>-->
					        <!--</div>-->
                		</form>
                    </div>
                </div>
                <?php if ($first_block['img']): ?>
                    <div class="first_block__r-side">
                        <img src="<?php echo $first_block['img']; ?>" alt="">
                        <div class="first_block__form mob">
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
                    			<div class="personal_text">Персональные данные защищены. Официальный оператор по обработке Персональных данных</div>
                    			<div class="politic_text">Нажимая на кнопку «Оставить заявку», я соглашаюсь на обработку персональных данных и согласен с Политикой конфиденциальности и Лицензией</div>
                    			<!--<div class="modal-body isSent">-->
                    			<!--	<h2><span>Спасибо</span>, мы получили вашу заявку. Позвоним через 3 минуты!</h2>-->
                    			<!--</div>-->
                    		</form>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $item_blocks = get_field( 'item_blocks' );?>
<?php if ($item_blocks['title']): ?>
    <section id="item_blocks" class="item_blocks">
        <div class="item_blocks__items center_block">
            <div class="item_blocks__l-side">
	            <?php $item_blocks_list = ($item_blocks['list']); ?>
    			<?php if (is_array($item_blocks_list)) {
    				foreach ($item_blocks_list as $e) { ?>
                        <div class="item_blocks__block">
                            <div class="item_blocks__icon">
                                <svg width="49" height="32" viewBox="0 0 49 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.7">
                                    <circle cx="16.0925" cy="15.6433" r="14.5769" stroke="#303633" stroke-width="2"/>
                                    <circle cx="33.0019" cy="15.6433" r="14.5769" stroke="#4EC275" stroke-width="2"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="item_blocks__number"><span class="counter" data-target="<?php echo $e['numb']; ?>">0</span><?php echo $e['title']; ?></div>
                            <div class="item_blocks__txt"><?php echo $e['text']; ?></div>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
            <div class="item_blocks__r-side">
                <div class="item_blocks__title"><?php echo $item_blocks['title']; ?></div>
                <div class="item_blocks__text"><?php echo $item_blocks['text']; ?></div>
                <button class="item_blocks__btn" data-modal-id="1">Подать заявку</button>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $block_calc = get_field( 'block_calc' );?>
<?php if ($block_calc['title']): ?>
    <section id="block_calc" class="block_calc">
    	<div class="block_calc__item center_block">
    		<div class="block_calc__block">
    			<div class="calc__wrap calc_pts">
    				<div class="calc_borrow_step_1">
    					<div class="title_calc"><?php echo $block_calc['title']; ?></div>
    					<div class="calc_items">
    						<div class="calc_item">
    							<div class="calc_item_wrap">
    								<div class="calc_left">
    									<label class="calc_label">Сумма займа</label>
    								</div>
    								<div class="calc_right">
    									<input type="text" id="amount_cash-pts" class="calc_input js-input-only-numbers js-q-price-range-value-pts">
    									<div class="calc_right_absolute">
    										<div class="calc_currency">рублей</div>
    									</div>
    								</div>
    							</div>
    							<div id="cash-pts" class="calc_range"></div>
    							<div class="calc_values">
    								<span class="calc_value">50 тыс.</span>
    								<span class="calc_value">5 млн</span>
    								<span class="calc_value">10 млн</span>
    								<span class="calc_value">15 млн</span>
    							</div>
    						</div>
    						<div class="calc_item">
    							<div class="calc_item_wrap">
    								<div class="calc_left">
    									<label class="calc_label">Срок займа</label>
    								</div>
    								<div class="calc_right">
    									<input type="text" id="amount_time-pts" class="calc_input js-input-only-numbers js-q-days-range-value-pts">
    									<div class="calc_right_absolute">
    										<div class="calc_textday b-calc-param__textday-pts">месяца</div>
    									</div>
    								</div>
    							</div>
    							<div id="time-pts" class="calc_range"></div>
    							<div class="calc_values">
    								<span class="calc_value">2 мес</span>
    								<span class="calc_value mobs">24 мес</span>
    								<span class="calc_value">32 мес.</span>
    								<span class="calc_value mobs">48 мес</span>
    								<span class="calc_value">60 мес.</span>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="calc_bottom">
    					<div class="calc_total">
    						<div class="calc_total_col">
    							<div class="calc_total_title">Ежемесячный платёж</div>
    							<div class="calc_total_text"><span id="total-final-pts"></span><span id="month-pts">1</span>&nbsp;руб.</div>
    						</div>
    						<div class="calc_total_cols">
    							<div class="calc_total_cet">Процентная ставка</div>
    							<div class="calc_total_txt"><span class="js-days-percents-pts"></span></div><div class="calc_total_proc">%</div>
    						</div>
    					</div>
    					<button class="calc_formss" data-modal-id="1">Оформить займ</button>
    				</div>
    			</div>
    			<div class="block_calc__txt"><?php echo $block_calc['txt']; ?></div>
    		</div>
    	</div>
    </section>
<?php endif ?>
<?php $block_form = get_field( 'block_form' );?>
<?php if ($block_form['title']): ?>
    <section id="block_form" class="block_form">
        <div class="block_form__in center_block">
            <div class="block_form__item">
                <div class="block_form__l-side">
                    <h1 class="block_form__h1"><?php echo $block_form['title']; ?></h1>
                    <div class="block_form__text"><?php echo $block_form['text']; ?></div>
                    <button class="block_form__btn" data-modal-id="1">Написать в What’sApp</button>
                </div>
                <?php if ($block_form['img']): ?>
                    <div class="block_form__r-side">
                        <img src="<?php echo $block_form['img']; ?>" alt="">
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $stages_block = get_field( 'stages_block' );?>
<?php if ($stages_block['title']): ?>
    <section id="stages_block" class="stages_block">
        <div class="stages_block__in center_block">
            <h1 class="stages_block__h1 section_h1"><?php echo $stages_block['title']; ?></h1>
            <div class="stages_block__items">
                <?php if ($stages_block['img']): ?>
                    <div class="stages_block__l-side">
                        <img src="<?php echo $stages_block['img']; ?>" alt="">
                    </div>
                <?php endif ?>
                <div class="stages_block__r-side">
                    <div class="stages_block__blocks">
    	            <?php $stages_block_list = ($stages_block['list']); ?>
        			<?php if (is_array($stages_block_list)) {
        				foreach ($stages_block_list as $e) { ?>
                            <div class="stages_block__block">
                                <div class="stages_block__lside"><?php echo $e['number']; ?></div>
                                <div class="stages_block__rside">
                                    <div class="stages_block__tit"><?php echo $e['title']; ?></div>
                                    <div class="stages_block__text"><?php echo $e['text']; ?></div>
                                </div>
                            </div>
        				<?php } ?>
        			<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $tabs_block = get_field( 'tabs_block' );?>
<?php if ($tabs_block['title']): ?>
    <section id="tabs_block" class="tabs_block">
        <div class="tabs_block__in center_block">
            <h1 class="tabs_block__h1 section_h1"><?php echo $tabs_block['title']; ?></h1>
            <div class="tabs_block__tabs">
	            <?php $tabs_block_list = ($tabs_block['list']); ?>
    			<?php if (is_array($tabs_block_list)) {
    				foreach ($tabs_block_list as $key => $e) { ?>
                        <div class="tabs_block__tab<?php if ($key == 0) { ?> active<?php } ?>" data-tab-id="tab<?php echo $key; ?>"><?php echo $e['title']; ?></div>
    				<?php } ?>
    			<?php } ?>
            </div>
            <div class="tabs_block__contents">
    			<?php if (is_array($tabs_block_list)) {
    				foreach ($tabs_block_list as $key => $e) { ?>
                        <div id="tab<?php echo $key; ?>" class="tabs_block__content"<?php if ($key == 0) { ?>  style="display: flex;"<?php } ?>>
                            
        	            <?php $lists = ($e['lists']); ?>
            			<?php if (is_array($lists)) {
            				foreach ($lists as $s) { ?>
                            <div class="tabs_block__block">
                                <div class="tabs_block__icon">
                                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M61.7979 18.7662L57.823 15.2304C57.2948 14.7645 56.6057 14.5277 55.9054 14.5716C55.2051 14.6156 54.5503 14.9366 54.0834 15.4649L28.8117 44.4182L20.2657 33.294C19.8333 32.7374 19.2007 32.3754 18.5052 32.2865C17.8098 32.1975 17.1076 32.3889 16.5512 32.819L12.3649 36.0985C12.0897 36.3133 11.8592 36.5808 11.6866 36.8856C11.5139 37.1903 11.4026 37.5265 11.3588 37.8747C11.315 38.223 11.3398 38.5765 11.4315 38.9151C11.5233 39.2537 11.6804 39.5707 11.8937 39.848L25.0302 56.9561C25.7693 57.9124 27.0099 58.7367 28.202 58.8892C29.3942 59.0416 30.6912 58.4376 31.6067 57.4022L62.0359 22.5345C62.4989 22.0025 62.7338 21.3071 62.6892 20.6007C62.6446 19.8943 62.3241 19.2346 61.7979 18.7662Z" fill="#4EC275"/>
                                    </svg>
                                </div>
                                <?php if ($s['img']): ?>
                                    <div class="tabs_block__img">
                                        <img src="<?php echo $s['img']; ?>" alt="">
                                    </div>
                                <?php endif ?>
                                <div class="tabs_block__text"><?php echo $s['text']; ?></div>
                            </div>
            				<?php } ?>
            			<?php } ?>
                </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $services_block = get_field( 'services_block' );?>
<?php if ($services_block['title']): ?>
    <section id="services_block" class="services_block">
        <div class="services_block__in center_block">
            <h1 class="services_block__title section_h1"><?php echo $services_block['title']; ?></h1>
            <div class="services_block__items">
	            <?php $services_block_list = ($services_block['list']); ?>
    			<?php if (is_array($services_block_list)) {
    				foreach ($services_block_list as $e) { ?>
                        <div class="services_block__item">
                            <div class="services_block__l-side"><?php echo $e['number']; ?></div>
                            <div class="services_block__r-side">
                                <div class="services_block__tit"><?php echo $e['title']; ?></div>
                                <div class="services_block__text"><?php echo $e['text']; ?></div>
                            </div>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $advantage_block = get_field( 'advantage_block' );?>
<?php if ($advantage_block['title']): ?>
    <section id="advantage_block" class="advantage_block">
        <div class="advantage_block__in center_block">
            <h1 class="advantage_block__title section_h1"><?php echo $advantage_block['title']; ?></h1>
            <div class="advantage_block__blocks">
	            <?php $advantage_block_list = ($advantage_block['list']); ?>
    			<?php if (is_array($advantage_block_list)) {
    				foreach ($advantage_block_list as $e) { ?>
                        <div class="advantage_block__block">
                            <?php if ($e['icon']): ?>
                                <div class="advantage_block__img">
                                    <img src="<?php echo $e['icon']; ?>" alt="">
                                </div>
                            <?php endif ?>
                            <div class="advantage_block__tit"><?php echo $e['title']; ?></div>
                            <div class="advantage_block__text"><?php echo $e['text']; ?></div>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $bid_block = get_field( 'bid_block' );?>
<?php if ($bid_block['title']): ?>
    <section id="bid_block" class="bid_block">
        <div class="bid_block__in center_block">
            <h1 class="bid_block__title section_h1"><?php echo $bid_block['title']; ?></h1>
            <div class="bid_block__blocks js_bid">
	            <?php $bid_block_list = ($bid_block['list']); ?>
    			<?php if (is_array($bid_block_list)) {
    				foreach ($bid_block_list as $e) { ?>
                        <div class="bid_block__block">
                            <div class="bid_block__l-side">
                                <div class="bid_block__tit"><?php echo $e['car']; ?> <br>
                                    <?php echo $e['model']; ?></div>
                                <div class="bid_block__year"><?php echo $e['year']; ?></div>
                                <div class="bid_block__price"><?php echo $e['price']; ?></div>
                            </div>
                            <?php if ($e['img']): ?>
                                <div class="bid_block__r-side">
                                    <img src="<?php echo $e['img']; ?>" alt="">
                                </div>
                            <?php endif ?>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $stand_block = get_field( 'stand_block' );?>
<?php if ($stand_block['title']): ?>
    <section id="stand_block" class="stand_block">
        <div class="stand_block__in center_block">
            <div class="stand_block__item">
                <div class="stand_block__l-side">
                    <h1 class="stand_block__title"><?php echo $stand_block['title']; ?></h1>
                    <div class="stand_block__text"><?php echo $stand_block['text']; ?></div>
                    <button class="stand_block__btn" data-modal-id="1">Подать документы онлайн</button>
                </div>
                <?php if ($stand_block['img']): ?>
                    <div class="stand_block__r-side">
                        <img src="<?php echo $stand_block['img']; ?>" alt="">
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $stocks_block = get_field( 'stocks_block' );?>
<?php if ($stocks_block['title']): ?>	
    <section id="stocks_block" class="stocks_block">
        <div class="stocks__in center_block">
            <h1 class="stocks_block__title section_h1"><?php echo $stocks_block['title']; ?></h1>
            <div class="stocks_block__blocks">
	            <?php $stocks_block_list = ($stocks_block['list']); ?>
    			<?php if (is_array($stocks_block_list)) {
    				foreach ($stocks_block_list as $e) { ?>
                        <div class="stocks_block__block">
                            <div class="stocks_block__l-side">
                                <div class="stocks_block__tit"><?php echo $e['title']; ?></div>
                                <div class="stocks_block__text"><?php echo $e['text']; ?></div>
                                <div class="stocks_block__btn" data-modal-id="1">Участвовать в акции</div>
                            </div>
                            <?php if ($e['img']): ?>
                                <div class="stocks_block__r-side">
                                    <img src="<?php echo $e['img']; ?>" alt="">
                                    <?php if ($e['stick']): ?>
                                        <div class="stocks_block__flag"><?php echo $e['stick']; ?></div>
                                    <?php endif ?>
                                </div>
                            <?php endif ?>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $reviews_block = get_field( 'reviews_block' );?>
<?php if ($reviews_block['title']): ?>	
    <section id="reviews__block" class="reviews__block">
        <div class="reviews__block__in center_block">
            <div class="reviews__block__top">
                <h1 class="reviews__block__title section_h1"><?php echo $reviews_block['title']; ?></h1>
                <a href="<?php echo $reviews_block['link']; ?>" class="reviews__block__btn">Читать все отзывы на Яндекс Картах</a>
            </div>
            <div class="reviews__block__slider js_reviews">
	            <?php $reviews_block_list = ($reviews_block['list']); ?>
    			<?php if (is_array($reviews_block_list)) {
    				foreach ($reviews_block_list as $e) { ?>
                        <div class="reviews__block__block">
                            <div class="reviews__block__tit"><?php echo $e['title']; ?></div>
                            <div class="reviews__block__text"><?php echo $e['text']; ?></div>
                            <div class="reviews__block__info">
                                <div class="reviews__block__name"><?php echo $e['name']; ?></div>
                                <div class="reviews__block__rating">
									<?php if($e['check'] == '1') { ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
									<?php } elseif($e['check'] == '2') { ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
									<?php } elseif($e['check'] == '3') { ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
									<?php } elseif($e['check'] == '4') { ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
									<?php } elseif($e['check'] == '5') { ?>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 17.9894L16.8229 20.604C17.6146 21.0832 18.5833 20.3748 18.375 19.479L17.2292 14.5623L21.0521 11.2498C21.75 10.6457 21.375 9.49984 20.4583 9.42692L15.4271 8.99984L13.4583 4.354C13.1042 3.51025 11.8958 3.51025 11.5417 4.354L9.5729 8.98942L4.54165 9.4165C3.62498 9.48942 3.24998 10.6353 3.9479 11.2394L7.77082 14.5519L6.62498 19.4686C6.41665 20.3644 7.3854 21.0728 8.17707 20.5936L12.5 17.9894Z" fill="#FFCD00"/>
                                        </svg>
									<?php } ?>
                                </div>
                            </div>
                        </div>
    				<?php } ?>
    			<?php } ?>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $calc_form = get_field( 'calc_form' );?>
<?php if ($calc_form['title']): ?>	
    <section id="calc_form" class="calc_form">
        <div class="calc_form__in center_block">
        <h1 class="calc_form__title section_h1"><?php echo $calc_form['title']; ?></h1>
            <form id="stepForm" method="POST" action="обработчик.php">
                <div class="container calc_form__item">
                    <?php if ($calc_form['img']): ?>
                        <div class="calc_form__l-side">
                            <img src="<?php echo $calc_form['img']; ?>" alt="">
                        </div>
                    <?php endif ?>
                    <div class="calc_form__r-side">
                      <div class="step calc_form__form" id="step1">
                        <div class="calc_form__tit"><?php echo $calc_form['tit']; ?></div>
                        <div class="calc_form__topbar">
                            <div class="calc_form__steps">Шаг 1 из 3</div>
                            <div class="calc_form__mores">+20% за шаг</div>
                        </div>
                        <div class="calc_form__progs">
                            <div class="calc_form__prog" style="width: 20%"></div>
                        </div>
                        <div class="step_text">Данные автомобиля</div>
            			<input class="feedback__input" type="text" placeholder="Введите марку" name="marka" required="required">
            			<input class="feedback__input" type="text" placeholder="Введите модель" name="model" required="required">
            			<input class="feedback__input" type="text" placeholder="Год выпуска" name="year" required="required">
                          <div class="buttons">
                            <button class="button next-button" type="button" onclick="showStep(currentStep + 1)">Следующий вопрос</button>
                          </div>
                      </div>
                    </div>
                  </div>
            
                <div class="container calc_form__item hidden" id="step2">
                    <?php if ($calc_form['img2']): ?>
                        <div class="calc_form__l-side">
                            <img src="<?php echo $calc_form['img2']; ?>" alt="">
                        </div>
                    <?php endif ?>
                    <div class="calc_form__r-side">
                      <div class="step calc_form__form">
                        <div class="calc_form__tit"><?php echo $calc_form['tit']; ?></div>
                        <div class="calc_form__topbar">
                            <div class="calc_form__steps">Шаг 2 из 3</div>
                            <div class="calc_form__mores">+20% за шаг</div>
                        </div>
                        <div class="calc_form__progs">
                            <div class="calc_form__prog" style="width: 50%"></div>
                        </div>
                        <div class="step_text">Сумма и срок займа</div> <div class="calc__wrap2 calc_pts">
                        	<div class="calc_borrow_top">
                        		<div class="calc_items">
                        			<div class="calc_item">
                        				<div class="calc_item_wrap2">
                        					<div class="calc_left2">
                        						<label class="calc_label">Сумма займа</label>
                        					</div>
                        					<div class="calc_right2">
                        						<input type="text" id="amount_cash-pts2" class="calc_input js-input-only-numbers2 js-q-price-range-value-pts2">
                        					</div>
                        				</div>
                        				<div id="cash-pts2" class="calc_range"></div>
                        				<div class="calc_values">
                        					<span class="calc_value">50 000 ₽</span>
                        					<span class="calc_value">15 000 000 ₽</span>
                        				</div>
                        			</div>
                        			<div class="calc_item">
                        				<div class="calc_item_wrap2">
                        					<div class="calc_left2">
                        						<label class="calc_label">Срок займа</label>
                        					</div>
                        					<div class="calc_right2">
                        						<input type="text" id="amount_time-pts2" class="calc_input js-input-only-numbers2 js-q-days-range-value-pts2">
                        					</div>
                        				</div>
                        				<div id="time-pts2" class="calc_range"></div>
                        				<div class="calc_values">
                        					<span class="calc_value">2</span>
                        					<span class="calc_value">12</span>
                        					<span class="calc_value">24</span>
                        					<span class="calc_value">36</span>
                        					<span class="calc_value">38</span>
                        					<span class="calc_value">60</span>
                        				</div>
                        			</div>
                        		</div>
                        	</div>
                        	<!--<div class="calc_borrow_bottom">-->
                        	<!--	<div class="calc_total">-->
                        	<!--		<div class="calc_total_col">-->
                        	<!--			<div class="calc_total_title2">Ежемесячный платёж</div>-->
                        	<!--			<div class="calc_total_text2"><span id="month-pts2">1</span>&nbsp;руб.</div>-->
                        	<!--		</div>-->
                        	<!--		<div class="calc_total_cols">-->
                        	<!--			<div class="calc_total_cet2">Процентная ставка</div>-->
                        	<!--			<div class="calc_total_txt2"><span id="total-final-pts2"></span><span class="js-days-percents-pts2"></span></div><div class="calc_total_proc">%</div>-->
                        	<!--		</div>-->
                        	<!--	</div>-->
                        	<!--</div>-->
                        </div>
                      <div class="buttons">
                        <button class="button back-button" type="button" onclick="showStep(currentStep - 1)">Назад</button>
                        <button class="button next-button" type="button" onclick="showStep(currentStep + 1)">Следующий вопрос</button>
                      </div>
                      </div>
                    </div>
                </div>
            
                <div class="container calc_form__item hidden" id="step3">
                    <?php if ($calc_form['img3']): ?>
                        <div class="calc_form__l-side">
                            <img src="<?php echo $calc_form['img3']; ?>" alt="">
                        </div>
                    <?php endif ?>
                    <div class="calc_form__r-side">
                      <div class="step calc_form__form">
                        <div class="calc_form__tit"><?php echo $calc_form['tit']; ?></div>
                        <div class="calc_form__topbar">
                            <div class="calc_form__steps">Шаг 3 из 3</div>
                            <div class="calc_form__mores">+40% за шаг</div>
                        </div>
                        <div class="calc_form__progs">
                            <div class="calc_form__prog" style="width: 95%"></div>
                        </div>
                        <div class="step_text">Контактная информация</div>
            			<input class="feedback__input" type="name" placeholder="Введите имя" name="name" required="required">
            			<input class="feedback__input" type="tel" placeholder="Введите телефон" name="tel" required="required">
                      <div class="buttons">
                        <input class="global_btn feedback__submit js_submit" type="submit" onclick="document.getElementById('check-34').value = 'stopSpam';" value="Отправить">
                      </div>
                      </div>
                  </div>
              </div>
            </form>
        </div>
    </section>
<?php endif ?>
<?php $questions_block = get_field( 'questions_block' );?>	
<?php if ($questions_block['title']): ?>	
    <section id="questions_block" class="questions_block">
        <div class="questions_block__in center_block">
            <h1 class="questions_block__h1 section_h1"><?php echo $questions_block['title']; ?></h1>
            <div class="questions_block__item">
                <div class="questions_block__l-side">
                    <img src="<?php echo $questions_block['img']; ?>" alt="">
                </div>
                <div class="questions_block__r-side">
    	            <?php $questions_block_list = ($questions_block['list']); ?>
        			<?php if (is_array($questions_block_list)) {
        				foreach ($questions_block_list as $e) { ?>
                            <div class="questions_block__question">
                                <div class="questions_block__title"><?php echo $e['title']; ?></div>
                                <div class="questions_block__text"><?php echo $e['text']; ?></div>
                            </div>
        				<?php } ?>
        			<?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<?php $map_block = get_field( 'map_block' );?>	
<?php if ($map_block['title']): ?>	
    <section id="map_block" class="map_block">
        <div class="map_block__in center_block">
            <h1 class="map_block__title section_h1"><?php echo $map_block['title']; ?></h1>
            <div class="map_block__item">
                <div class="map_block__l-side">
    	            <?php $map_block_list = ($map_block['list']); ?>
        			<?php if (is_array($map_block_list)) {
        				foreach ($map_block_list as $e) { ?>
                            <div class="map_block__block">
                                <div class="map_block__address"><?php echo $e['address']; ?></div>
                                <a href="tel:<?php echo $e['tel']; ?>" class="map_block__tel"><?php echo $e['tel']; ?></a>
                                <div class="map_block__work"><?php echo $e['work']; ?></div>
                            </div>
        				<?php } ?>
        			<?php } ?>
                </div>
                <div class="map_block__r-side">
                    <div id="map" style="width: 100%; height: 700px;"></div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>
<?php
    get_footer();
?>