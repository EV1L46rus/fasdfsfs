Data = new Date();
Year = 'Motorring.ru © 2008-' + Data.getFullYear();

document.querySelector('.down_footer_span').textContent = Year ;


function clickBtnMobilFooter(div) {
		div.classList.toggle('active_btnFooter');
}