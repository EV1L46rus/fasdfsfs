window.addEventListener('resize', closeMenuPage);
window.onload = closeMenuPage;

function dropDownMenu(div) {
	if (div.querySelector('.drow_arrow_scr')){
		div.querySelector('.drop_arrow_icon').classList.remove('drow_arrow_scr')
		div.classList.remove('drop_menu_after')
	} else {
		div.querySelector('.drop_arrow_icon').classList.add('drow_arrow_scr')
		div.classList.add('drop_menu_after')
	}
}

function closeMenu() {
	document.querySelector('.displayBlockMenu').style = 'display: none;'
	document.querySelector('.left_menu_header').style = 'transform: translateX(-101%);'
	setTimeout(() => document.querySelector('.left_menu_header_down').style = 'transform: translateX(0);', 200)
	setTimeout(() => document.querySelector('.left_menu_more').classList.remove('left_menu_more_after'), 200)
	setTimeout(() => document.querySelector('.left_menu_more_catalog').classList.remove('left_menu_more_catalog_after'), 200)
}

function closeMenuPage() {
	let pageWidth = document.documentElement.scrollWidth
	if (pageWidth > 1000) {closeMenu()}
}

function showLeftMenu() {
	document.querySelector('.left_menu_header').style = 'transform: translateX(0);'
	document.querySelector('.displayBlockMenu').style = 'display: block;'
}

function showMore(div) {
	const spanName = div.querySelector('.span_more').textContent

	document.querySelector('.left_menu_header_down').style = 'transform: translateX(-100%);'
	document.querySelector('.left_menu_more').classList.add('left_menu_more_after')
	document.querySelector('.span_more_menu').textContent = spanName
	if (spanName == 'Каталог') {
		document.querySelector('.catalog_more_btn').classList.add('active_more')
	} else if (spanName == 'Покупателям') {
		document.querySelector('.buyer_more_btn').classList.add('active_more')
	}
}

function hideMore() {
	document.querySelector('.left_menu_header_down').style = 'transform: translateX(0);'
	document.querySelector('.left_menu_more').classList.remove('left_menu_more_after')
	document.querySelector('.buyer_more_btn').classList.remove('active_more')
	document.querySelector('.catalog_more_btn').classList.remove('active_more')
}

function showMoreCatalog(div) {
	const spanName = div.querySelector('.span_more').textContent

	document.querySelector('.left_menu_header_down').style = 'transform: translateX(-200%);'
	document.querySelector('.left_menu_more_catalog').classList.add('left_menu_more_catalog_after')
	document.querySelector('.span_more_menu_catalog').textContent = spanName
	
}

function hideMoreCatalog() {
	document.querySelector('.left_menu_header_down').style = 'transform: translateX(-100%);'
	document.querySelector('.left_menu_more_catalog').classList.remove('left_menu_more_catalog_after')
}