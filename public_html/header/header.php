<?php  
	//Полноэкранный вид
	echo '
		<head>
			<link rel="stylesheet" type="text/css" href="/header/header.css">
			<script style="text/javascript" src="/header/script.js"></script>
		</head>
		<header class="header_fullScreen" >
			<div class="header_UpMenu">
				<div class="header_UpMenu_flex">
					<a href="tel:+78005508633">
						<img src="/img/telephone.png" alt="">
						<span>+7 (800) 550-86-33</span>
					</a>
					<div class="header_UpMenu_button">
						<a href="">
							<span>Отзывы</span>
						</a>
						<a href="">
							<span>Как купить</span>
						</a>
						<a href="">
							<span>Контакты</span>
						</a>
					</div>
					<div class="header_UpMenu_profile">
						<a href="">
							<svg class="reg_icon">
								<use xlink:href="/header/SvgIcons.svg#registration_icon"></use>
							</svg>
							<span>Регистрация</span>
						</a>
						<a href="">
							<svg class="login_icon">
								<use xlink:href="/header/SvgIcons.svg#login_icon"></use>
							</svg>
							<span>Вход</span>
						</a>
					</div>
				</div>
			</div>
			<div class="header_DownMenu">
				<div class="header_DownMenu_flex">
					<a href="">
						<svg class="logo_icon">
							<use xlink:href="/header/SvgIcons.svg#logo_icon"></use>
						</svg>
					</a>
					<div class="drop_menu" onclick="dropDownMenu(this)">
						<span>Каталог</span>
						<svg class="drop_arrow_icon ">
							<use xlink:href="/header/SvgIcons.svg#drop_arrow"></use>
						</svg>
					</div>
					<a href="" class="btn_stock">Акции</a>
					<a href="" class="btn_novelty">Новинки</a>
					<div class="full_search_header">
						<form method="GET" action="search_header" class="form_search_header">
							<input type="text" name="" id="" class="inp_search_header" placeholder="Поиск">
							<button class="btn_search_header">
								<svg class="icon_search_header">
									<use xlink:href="/header/SvgIcons.svg#search_btn_header"></use>
								</svg>
							</button>
						</form>
					</div>
					<a href="" class="a_heart">
						<svg class="heart_header">
							<use xlink:href="/header/SvgIcons.svg#heart"></use>
						</svg>
						<span class="haart_cart_num">0</span>
					</a>
					<a href="" class="a_cart">
						<svg class="cart_header">
							<use xlink:href="/header/SvgIcons.svg#cart_header"></use>
						</svg>
						<span class="haart_cart_num">0</span>
					</a>
				</div>
			</div>
		</header>
	';
	// мобильный вид
	echo '
		<header class="header_mobil">
			<div class="menu_div" onclick="showLeftMenu()">
				<svg class="menu_icon">
					<use xlink:href="/header/SvgIcons.svg#menu_icon_header"></use>
				</svg>
			</div>
			<div class="logo_mobilV">
				<svg class="logo_icon_mobil">
					<use xlink:href="/header/SvgIcons.svg#logo_icon"></use>
				</svg>
			</div>
			<a href="" class="search_header_mobil_a">
				<svg class="search_header_mobil">
					<use xlink:href="/header/SvgIcons.svg#search_btn_header"></use>
				</svg>
			</a>
			<a href="" class="cart_header_mobil_a">
				<svg class="cart_header_mobil">
					<use xlink:href="/header/SvgIcons.svg#cart_header"></use>
				</svg>
			</a>
		</header>
		<div class="displayBlockMenu" onclick="closeMenu(this)"></div>
		<div class="left_menu_header">
			<div class="left_menu_header_down">
				<div class="btn_left_header_back" onclick="closeMenu(this)">
					<svg class="back_leftMenu">
						<use xlink:href="/header/SvgIcons.svg#back_btn_header"></use>
					</svg>
					<span class="back_btn_leftMenu">Назад</span>	
				</div>
				<div class="btn_left_header" onclick="showMore(this)">
					<div class="active_btn"></div>
					<span class="span_more">Каталог</span>
					<svg class="more_arrow_lftMenu">
						<use xlink:href="/header/SvgIcons.svg#more_arrow"></use>
					</svg>
				</div>
				<a href="">
					<div class="btn_left_header">
						<div class="active_btn"></div>
						<span>Акции</span>
					</div>
				</a>
				<a href="">
					<div class="btn_left_header">
						<div class="active_btn"></div>
						<span>Новинки</span>
					</div>
				</a>
				<div class="btn_left_header" onclick="showMore(this)">
					<div class="active_btn"></div>
					<span class="span_more">Покупателям</span>
					<svg class="more_arrow_lftMenu">
						<use xlink:href="/header/SvgIcons.svg#more_arrow"></use>
					</svg>
				</div>
				<a href="">
					<div class="btn_left_header">
						<div class="active_btn"></div>
						<span>О нас</span>
					</div>
				</a>
				<a href="tel:+78005508633" class="tele_left_menu">
					<svg class="left_svg">
						<use xlink:href="/header/SvgIcons.svg#phone_header"></use>
					</svg>
					<span>+7 (800) 550-86-33</span>
				</a>
				<a href="" class="tele_left_menu">
					<svg class="left_svg">
						<use xlink:href="/header/SvgIcons.svg#registration_icon"></use>
					</svg>
					<span>Личный кабинет</span>
				</a>
				<div class="contact_info">
					<span class="info_about">Контактная информация</span>
					<a href="https://yandex.ru/maps/-/CCUNRXuvKC">
						<div class="contact_map_email">
							<svg class="map_marker_menu">
								<use xlink:href="/header/SvgIcons.svg#map_marker"></use>
							</svg>
							<span> г. Тольятти, Обводное шоссе, д. 3</span>
						</div>
					</a>
					<a href="mailto:motor.ring@ya.ru">
						<div class="contact_map_email">
							<svg class="map_marker_menu">
								<use xlink:href="/header/SvgIcons.svg#mail_svg"></use>
							</svg>
							<span>motor.ring@ya.ru</span>
						</div>
					</a>
					<div class="socialLink vkSocial">	
						<svg class="social_link vkSocial">
							<a href="https://vk.cc/5WKKDi">
								<use xlink:href="/header/SvgIcons.svg#vkAvatar"></use>
							</a>
						</svg>						
						<svg class="social_link ytb">
							<a href="https://www.youtube.com/channel/UCo3D3HPCRg_G2dBJa9DLaqg/videos">
								<use xlink:href="/header/SvgIcons.svg#YouTubeAvatar"></use>
							</a>
						</svg>
						<svg class="social_link twtr">
							<a href="https://twitter.com/Motor_ring">
								<use xlink:href="/header/SvgIcons.svg#TwitterAvatar"></use>
							</a>
						</svg>
						<svg class="social_link OkSocial">
							<a href="https://ok.ru/group/52993986134214">
								<use xlink:href="/header/SvgIcons.svg#OkSvg"></use>
							</a>
						</svg>
					</div>								
				</div>
				<div class="left_menu_more ">
					<div class="btn_left_more_back" onclick="hideMore()">
						<svg class="back_leftMenu">
							<use xlink:href="/header/SvgIcons.svg#back_btn_header"></use>
						</svg>
						<span class="back_btn_leftMenu">Назад</span>	
					</div>
					<div class="btn_left_header_more">
						<span class="span_more_menu"></span>
					</div>
					<div class="catalog_more_btn">
						<div class="btn_left_header" onclick="showMoreCatalog(this)">
							<div class="active_btn"></div>
							<span class="span_more">Внешний вид</span>
							<svg class="more_arrow_lftMenu">
								<use xlink:href="/header/SvgIcons.svg#more_arrow"></use>
							</svg>
						</div>
					</div>
					<div class="buyer_more_btn">
						<div class="btn_left_header">
							<div class="active_btn"></div>
							<span class="span_more">Способы оплаты</span>
						</div>
						<div class="btn_left_header">
							<div class="active_btn"></div>
							<span class="span_more">Условия доставки</span>
						</div>
					</div>
				</div>
				<div class="left_menu_more_catalog">
					<div class="btn_left_more_back" onclick="hideMoreCatalog()">
						<svg class="back_leftMenu">
							<use xlink:href="/header/SvgIcons.svg#back_btn_header"></use>
						</svg>
						<span class="back_btn_leftMenu">Назад</span>	
					</div>
					<div class="btn_left_header_more">
						<span class="span_more_menu_catalog"></span>
					</div>
					<div class="catalog_more_after">
						<div class="btn_left_header">
							<div class="active_btn"></div>
							<span class="span_more">Способы оплаты</span>
						</div>
						<div class="btn_left_header">
							<div class="active_btn"></div>
							<span class="span_more">Условия доставки</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	';
?>