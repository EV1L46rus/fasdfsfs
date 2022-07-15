<?php  
	echo'
	<link rel="stylesheet" type="text/css" href="/footer/footer.css">

	<footer class="full_footer">
		<div class="up_footer">
			<div class="catalog_footer">
				<span>Каталог</span>
				<div class="down_upperFooter">
					<div class="a_down_upperFotter"><a href="">Акции</a></div>
					<div class="a_down_upperFotter"><a href="">Новинки</a></div>
					<div class="a_down_upperFotter"><a href="">Каталог товаров</a></div>
				</div>
			</div>
			<div class="company_footer">
				<span>Компания</span>
				<div class="down_upperFooter">
					<div class="a_down_upperFotter"><a href="">Отзывы</a></div>
					<div class="a_down_upperFotter"><a href="">Сертификаты</a></div>
					<div class="a_down_upperFotter"><a href="">Наши клиенты</a></div>
					<div class="a_down_upperFotter"><a href="">Партнерская программа</a></div>
				</div>
			</div>
			<div class="info_footer">
				<span>Информация</span>
				<div class="down_upperFooter">
					<div class="a_down_upperFotter"><a href="">О нас</a></div>
					<div class="a_down_upperFotter"><a href="">Контакты и график</a></div>
					<div class="a_down_upperFotter"><a href="">Публичная оферта</a></div>
					<div class="a_down_upperFotter"><a href="">Правовая информация</a></div>	
				</div>
			</div>	
			<div class="help_footer">
				<span>Помощь</span>
				<div class="down_upperFooter">
					<div class="a_down_upperFotter"><a href="">Оплата</a></div>
					<div class="a_down_upperFotter"><a href="">Доставка</a></div>
					<div class="a_down_upperFotter"><a href="">Как оформить заказ</a></div>	
					<div class="a_down_upperFotter"><a href="">Часто задаваемые вопросы</a></div>	
				</div>
			</div>
			<div class="contact_footer">
				<div class="product_send_footer">
					<span>Не нашли нужный товар</span>
				</div>
				<div class="up_footer_downBlock">
					<a href="https://yandex.ru/maps/-/CCUNRXuvKC">
						<div class="svg_footer adress_footer">
							<svg class="phone_footer_svg adress_footer_svg">
								<use xlink:href="/header/SvgIcons.svg#map_marker"></use>
							</svg>
							<span> г. Тольятти, Обводное шоссе, д. 3</span>
						</div>
					</a>
					<a href="tel:+78005508633">
						<div class="svg_footer">
							<svg class="phone_footer_svg">
								<use xlink:href="/header/SvgIcons.svg#phone_header"></use>
							</svg>
							<span>+7 (800) 550-86-33</span>
						</div>
					</a>
					<a href="mailto:motor.ring@ya.ru">
						<div class="svg_footer">
							<svg class="phone_footer_svg">
								<use xlink:href="/header/SvgIcons.svg#mail_svg"></use>
							</svg>
							<span>motor.ring@ya.ru</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="social_line">
			<div class="social_line_icons">
				<svg class="social_link_footer vkSocial_footer">
						<use xlink:href="/header/SvgIcons.svg#vkAvatar"></use>
				</svg>						
				<svg class="social_link_footer ytb_footer">				
						<use xlink:href="/header/SvgIcons.svg#YouTubeAvatar"></use>
				</svg>
				<svg class="social_link_footer twtr_footer">
					<a href="https://twitter.com/Motor_ring">
						<use xlink:href="/header/SvgIcons.svg#TwitterAvatar"></use>
					</a>
				</svg>
				<svg class="social_link_footer OkSocial_footer">
					<a href="https://ok.ru/group/52993986134214">
						<use xlink:href="/header/SvgIcons.svg#OkSvg"></use>
					</a>
				</svg>
			</div>
		</div>
		<div class="down_footer">
			<span class="down_footer_span"></span>
			<img src="/img/oplata.png" alt="">
		</div>
	</footer>

	<footer class="mobile_footer">
		<div class="upFooter_mobile">
			<div class="dropDownBtn_footer">
				<div class="dropDownBtn_footer_click " onclick="clickBtnMobilFooter(this)">
					<span>Каталог</span>
					<svg class="dropDownArrow_footer">
							<use xlink:href="/header/SvgIcons.svg#drop_arrow"></use>
					</svg>
				</div>
				<div class="dropDownMenu_footerMobil">
					<a href="">
						<div class="dropDownMenu_btn_footerMobil">
							<span>
								Акции
							</span>
						</div>
					</a>
				</div>
			</div>
			<div class="dropDownBtn_footer">
				<div class="dropDownBtn_footer_click">
					<span>Компания</span>
					<svg class="dropDownArrow_footer" onclick="clickBtnMobilFooter(this)">
							<use xlink:href="/header/SvgIcons.svg#drop_arrow"></use>
					</svg>
				</div>
				<div class="dropDownMenu_footerMobil">
					
				</div>
			</div>
			<div class="dropDownBtn_footer">
				<div class="dropDownBtn_footer_click" onclick="clickBtnMobilFooter(this)">
					<span>Информация</span>
					<svg class="dropDownArrow_footer">
							<use xlink:href="/header/SvgIcons.svg#drop_arrow"></use>
					</svg>
				</div>
				<div class="dropDownMenu_footerMobil">
					
				</div>
			</div>
			<div class="dropDownBtn_footer">
				<div class="dropDownBtn_footer_click" onclick="clickBtnMobilFooter(this)">
					<span>Помощь</span>
					<svg class="dropDownArrow_footer">
							<use xlink:href="/header/SvgIcons.svg#drop_arrow"></use>
					</svg>
				</div>
				<div class="dropDownMenu_footerMobil">
					
				</div>
			</div>
		</div>
	</footer>
	<script style="text/javascript" src="/footer/script.js"></script>
	';
?>