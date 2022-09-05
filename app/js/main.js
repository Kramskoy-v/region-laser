'use strict';

window.addEventListener('DOMContentLoaded', () => {
	//Hamburger menu
	const hamburger = document.querySelector('.hamburger'),
		mobileMenu = document.querySelector('.menu'),
		linkMobile = document.querySelector('.menu__link-mobile'),
		subMenuMobile = document.querySelector('.sub-menu-mobile'),
		hiddenItem = document.querySelector('.hidden-item');

	linkMobile.addEventListener('click', function () {
		hiddenItem.classList.toggle('active');
		subMenuMobile.classList.toggle('active');
	});

	hamburger.addEventListener('click', function () {
		hamburger.classList.toggle('hamburger--active');
		mobileMenu.classList.toggle('menu--active');
		if (subMenuMobile.classList.contains('active') || hiddenItem.classList.contains('active')) {
			subMenuMobile.classList.remove('active');
			hiddenItem.classList.remove('active');
		}

	});


	// arrow back to top	
	function trackScroll() {
		const scrolled = window.pageYOffset,
			coords = document.documentElement.clientHeight;

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

	const goTopBtn = document.querySelector('.back_to_top');

	window.addEventListener('scroll', trackScroll);
	goTopBtn.addEventListener('click', backToTop);


	// header sticky
	const logo = document.querySelector('.logo'),
		elementHidden = document.querySelector('.header__contact'),
		submenu = document.querySelectorAll('.sub-menu__wrap');

	window.addEventListener('scroll', function () {
		if (window.scrollY >= 1) {
			elementHidden.classList.add('hidden');
			logo.classList.add('scale');
			submenu.forEach((el) => {
				el.style.top = '69px';
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

	const inputs = document.querySelectorAll('.input__file');
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
	};


	//geo location

	const storageType = sessionStorage,
		consentPropertyType = 'location';

	const shouldShowPopup = () => !storageType.getItem(consentPropertyType);
	const saveToStorage = () => storageType.setItem(consentPropertyType, true);

	const popup = document.querySelector('.popup'),
		modal = document.querySelector('.modal'),
		btnConfirm = document.querySelector('[data-confirm]'),
		btnChange = document.querySelector('[data-change]');


	if (shouldShowPopup()) {
		popup.classList.add('active');
	}

	btnConfirm.addEventListener('click', () => {
		saveToStorage();
		popup.classList.remove('active');
	});

	btnChange.addEventListener('click', () => {
		modal.classList.add('active');
		saveToStorage();
	});

});

// main slider
let swiper;
if (document.querySelector('.mySwiper')) {
	swiper = new Swiper(".mySwiper", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
		},
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
		loop: true,
	});
};