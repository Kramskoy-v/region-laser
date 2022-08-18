//кнопка вверх при скроле
'use strict';

//Hamburger menu
let hamburger = document.querySelector('.hamburger'),
	mobileMenu = document.querySelector('.menu'),
	linkClose = document.querySelector('.menu__list');

hamburger.addEventListener('click', function () {
	hamburger.classList.toggle('hamburger--active');
	mobileMenu.classList.toggle('menu--active');
});

// arrow back to top	
function trackScroll() {
	let scrolled = window.pageYOffset;
	let coords = document.documentElement.clientHeight;

	if (scrolled > coords) {
		goTopBtn.classList.add('back_to_top-show');
	}
	if (scrolled < coords) {
		goTopBtn.classList.remove('back_to_top-show');
	}
}

function backToTop() {
	if (window.pageYOffset > 0) {
		window.scrollBy(0, -80);
		setTimeout(backToTop, 0);
	}
}

let goTopBtn = document.querySelector('.back_to_top');

window.addEventListener('scroll', trackScroll);
goTopBtn.addEventListener('click', backToTop);


// header sticky
let logo = document.querySelector('.logo'),
	elementHidden = document.querySelector('.header__contact'),
	submenu = document.querySelectorAll('.sub-menu__wrap');

window.addEventListener('scroll', function () {
	if (window.scrollY >= 1) {
		elementHidden.classList.add('hidden');
		logo.classList.add('scale');
		submenu.forEach((el) => {
			el.style.top = '70px';
		});
	} else {
		elementHidden.classList.remove('hidden');
		logo.classList.remove('scale');
		submenu.forEach((el) => {
			el.style.top = '114px';
		});

	}
});

// input type=file

let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
	let label = input.nextElementSibling,
		labelVal = label.querySelector('.input__file-button-text').innerText;

	input.addEventListener('change', function (e) {
		let countFiles = '';
		if (this.files && this.files.length >= 1)
			countFiles = this.files.length;

		if (countFiles)
			label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
		else
			label.querySelector('.input__file-button-text').innerText = labelVal;
	});
	document.addEventListener('submit', (e) => {
		// Очищаем поля формы 
		e.target.reset();
		label.querySelector('.input__file-button-text').innerText = labelVal;
	});
});


// Отправка данных на сервер
function send(event, php) {
	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	var req = new XMLHttpRequest();
	req.open('POST', php, true);
	req.onload = function () {
		if (req.status >= 200 && req.status < 400) {
			// ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
			alert("Сообщение отправлено");
			// Если не удалось связаться с php файлом
		} else { alert("Ошибка сервера. Номер: " + req.status); }
	};

	// Если не удалось отправить запрос. Стоит блок на хостинге
	req.onerror = function () { alert("Ошибка отправки запроса"); };
	req.send(new FormData(event.target));
}

