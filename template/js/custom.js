$(document).ready(function(){

	/*--------------------------------- функция для меню -----------------------------*/
	(function(){
		var $menuBtn = $('.menuBtn');
		$menuBtn.on('click', function(e){
			e.preventDefault();
			$('.headerNav__sublist').not($(this).next()).slideUp();
			$(this).next('.headerNav__sublist').slideToggle();
		});
	})();
	/*--------------------------------- функция для меню Конец -----------------------*/


	/*--------------------------------- функция для select/option -----------------------------*/
	(function(){
		var $services_address_text = $('.services__address-text>span'),
			$services_address_phone = $('.services__address-phone>span'),
			value = $('#touchpoint-filter').val(),
			st1 = 'Озерки-Просвещение',
			st2 = 'Сенная/Спасская/Садовая',
			st3 = 'Лесная'
			addressArr = {
							st1: {
									addr: 'ул. Композиторов 4.<br/> помещение 245',
									phone:'+7 (812) 900-76-64'
								},
							st2: {
									addr: 'ул.Гороховая 45 (во Дворе)',
									phone: '+7 (812) 956-98-71'
								},
							st3: {
									addr: 'Лесной проспект д.61к1',
									phone: '+7 (812) 906-04-17'
								}
						};
			

		if (value == st1) {
			$services_address_text.html(addressArr.st1.addr);
			$services_address_phone.html('<a href="tel:' + addressArr.st1.phone + '">' + addressArr.st1.phone + '<a/>');
		} else if (value == st2) {
			$services_address_text.html(addressArr.st2.addr);
			$services_address_phone.html('<a href="tel:' + addressArr.st2.phone + '">' + addressArr.st2.phone + '<a/>');
		} else if (value == 'Лесная') {
			$services_address_text.html(addressArr.st3.addr);
			$services_address_phone.html('<a href="tel:' + addressArr.st3.phone + '">' + addressArr.st3.phone + '<a/>');
		}

		$('#touchpoint-filter').on('hidden.bs.select', function (e) {
			var value = $('#touchpoint-filter').val();
			if (value == st1) {
				$services_address_text.html(addressArr.st1.addr);
				$services_address_phone.html('<a href="tel:' + addressArr.st1.phone + '">' + addressArr.st1.phone + '<a/>');
			} else if (value == st2) {
				$services_address_text.html(addressArr.st2.addr);
				$services_address_phone.html('<a href="tel:' + addressArr.st2.phone + '">' + addressArr.st2.phone + '<a/>');
			} else if (value == 'Лесная') {
				$services_address_text.html(addressArr.st3.addr);
				$services_address_phone.html('<a href="tel:' + addressArr.st3.phone + '">' + addressArr.st3.phone + '<a/>');
			}
		});
	})();
	/*--------------------------------- функция для select/option Конец -----------------------*/


	/*--------------------------------- функция для адаптивного меню -----------------------------*/

		(function(){
			$('.headerNav__innerItem .glyphicon.glyphicon-menu-hamburger').on('click', function(){
				$('.headerNav__navigation').toggleClass('right_0');
			});
		})();
	
	/*--------------------------------- функция для адаптивного меню End -------------------------*/



	/*--------------------------------- функция для якоря -------------------------*/

		function ancor (ancor, goal) {

			$(ancor).on('click', function(e){
			  $('html,body').stop().animate({ scrollTop: $(goal).offset().top }, 2000);
			  e.preventDefault();
			});

		}

		// ancor($('#choice'), $('.choice'));
		// ancor($('#feedback'), $('.feedback'));
		// ancor($('#toPartners'), $('.toPartners'));
		// ancor($('#ourContacts'), $('.ourContacts'));
	
	/*--------------------------------- функция для якоря Конец -------------------------*/



	/*--------------------------------- функция для вкладок -----------------------------*/

		function getTabs(tabsClass, sectionsClass, classActive){
			var $tabs = $('.' + tabsClass),
				$sections = $('.' + sectionsClass);

			$sections.not(':first').addClass('choice__posAbs');

			$tabs.click(function(){
				$tabs.removeClass(classActive).eq($(this).index()).addClass(classActive);
				$sections.addClass('choice__posAbs').eq($(this).index()).removeClass('choice__posAbs');
			}).eq(0).addClass(classActive);
		}
		
		/* вызов функции вкладок */
		// getTabs('choice__tab', 'choice__slider', 'active');
	
	/*--------------------------------- функция для вкладок End -------------------------*/



	/*--------------------------------- функция для карусели -------------------------*/

		function getCarousel(list, element, arrowRight, arrowLeft) {
			var $list = $('.' + list),
				$element = $('.' + element),
				$arrowRight = $('.' + arrowRight),
				$arrowLeft = $('.' + arrowLeft),
				$carouselSimple__wrap = $('.carouselSimple__wrap'),
				elemWidth = $carouselSimple__wrap.outerWidth(true);

			$element.width(elemWidth);
			$list.css({'left' : -elemWidth}).prepend($element.last());

			$(window).resize(function(){

				var $list = $('.' + list),
					$element = $('.' + element),
					$arrowRight = $('.' + arrowRight),
					$arrowLeft = $('.' + arrowLeft),
					$carouselSimple__wrap = $('.carouselSimple__wrap'),
					elemWidth = $carouselSimple__wrap.outerWidth(true);

				$element.width(elemWidth);
				$list.css({'left' : -elemWidth});

			});

			function nextSlide() {
				$list.animate({'margin-left' : -elemWidth}, 500, function(){
					$('.' + element).first().appendTo($list);
					$list.css({'margin-left' : 0});
				});
			}

			function prevSlide() {
				$list.animate({'margin-left' : elemWidth}, 500, function(){
					$('.' + element).last().prependTo($list);
					$list.css({'margin-left' : 0});
				});
			}

			$arrowRight.click(function(){
				nextSlide();
			});

			$arrowLeft.click(function(){
				prevSlide();
			});
		}

		/* вызов функции для карусели carouselSimple */
		// getCarousel('carouselSimple__list_1', 'carouselSimple__item_1', 'carouselSimple__arrowRight_1', 'carouselSimple__arrowLeft_1');
		// getCarousel('carouselSimple__list_2', 'carouselSimple__item_2', 'carouselSimple__arrowRight_2', 'carouselSimple__arrowLeft_2');
		// getCarousel('carouselSimple__list_3', 'carouselSimple__item_3', 'carouselSimple__arrowRight_3', 'carouselSimple__arrowLeft_3');

	/*--------------------------------- функция для карусели End -------------------------*/


	/*--------------------------------- функция для выравнивания высоты колонок -------------------------*/

		function setMaxHeight(elem) {
		    var $elem = $('.' + elem),
		        arrAllHeight = [],
		        maxHeight;
		    
		    $elem.each(function(){
		      arrAllHeight.push($(this).height());
		    });
		    
		    maxHeight = Math.max.apply(null, arrAllHeight);
		    
		    $elem.height(maxHeight);
		}


		/* вызов функции для выравнивания высоты колонок */
		// if (window.matchMedia('only screen and (max-width : 992px)').matches) {

		// 	setMaxHeight('itemQuestion');
		// 	setMaxHeight('itemAnswer');

		// }

		// $(window).resize(function(){

		// 		if ( window.matchMedia('only screen and (max-width : 992px)').matches ) {

		// 			setMaxHeight('itemQuestion');
		// 	  		setMaxHeight('itemAnswer');

		// 		}

		// });

		// setMaxHeight('serviceFooter');
	
	/*--------------------------------- функция для выравнивания высоты колонок End -------------------------*/	  

});