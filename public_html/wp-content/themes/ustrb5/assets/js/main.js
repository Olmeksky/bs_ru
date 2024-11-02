function readyFn( jQuery ) {
	// Срабатывает при загрузке документа
	//alert('Загрузка готова');

	$('.wp-block-button').on('click', function() {
		//alert('Получилось нажать');
		if ($('.cp_cff_13').length) {
			
			var data = $('.cp_cff_13').serializeArray();
			// переберём каждое значение массива и выведем его в формате имяЭлемента=значение в консоль
			$.each(data,function(){
			  console.log(this.name+'='+this.value);
			});
		}
	});
	
		// Всплывающий попап
	$('.h_zamerchik').click(function() {
		//$(".popup_balcons").css("visibility", "visible");
		$(".popup_title").text('Вызвать замерщика');
		$(".popup_balcons").css("display", "block");
	});
	$('.h_consult').click(function() {
		$(".popup_title").text('Записаться на консультацию');
		$(".popup_balcons").css("display", "block");
	});
	$('.h_zz').click(function() {
		$(".popup_title").text('Заказ обратного звонка');
		$(".popup_balcons").css("display", "block");
	});
	$('.xic svg, .xic_f svg').on('click', function() {
		//$(".popup_balcons").css("visibility", "hidden");
		$(".popup_balcons").css("display", "none");
	});
	
		// Счетчик для акции
	$('#getting-started').countdown("2024/07/12 23:59:55", function(event) {
		//$(this).text(event.strftime('%D days %H:%M:%S'));
		$('#days').text(event.strftime('%D'));
		$('#hours').text(event.strftime('%H'));
		$('#minutes').text(event.strftime('%M'));
		$('#seconds').text(event.strftime('%S'));
	});

/*
const mutiItemCarousel = document.querySelector('#carouselExampleM')

if (window.matchMedia('(min-width:576px)').matches) {
	const carousel = new bootstrap.Carousel(mutiItemCarousel, {
	interval: false
	});
	
	var carouselWidth = $('.carousel-inner.mult')[0].scrollWidth;
	var cardWidth = $('.carousel-item.mult').width();

	var scrollPosition = 0;
	$('.carousel-control-next.mult').on('click', function() {
		if (scrollPosition < (carouselWidth - (cardWidth * 4))) {
			console.log('Вперед');
			scrollPosition = scrollPosition + cardWidth;
			$('.carousel-inner.mult').animate({scrollLeft: scrollPosition},200);
		}
		
	});
	$('.carousel-control-prev.mult').on('click', function() {
		if (scrollPosition > 0) {
			console.log('Назад');
			scrollPosition = scrollPosition - cardWidth;
			$('.carousel-inner.mult').animate({scrollLeft: scrollPosition},200);
		}
	});
	var carouselWidth2 = $('.carousel-inner.mult2')[0].scrollWidth;
	var cardWidth2 = $('.carousel-item.mult2').width();
	var scrollPosition2 = 0;
	$('.carousel-control-next.mult2').on('click', function() {
		if (scrollPosition2 < (carouselWidth2 - (cardWidth2 * 4))) {
			console.log('Вперед');
			scrollPosition2 = scrollPosition2 + cardWidth2;
			$('.carousel-inner.mult2').animate({scrollLeft: scrollPosition2},200);
		}
	});
	$('.carousel-control-prev.mult2').on('click', function() {
		if (scrollPosition2 > 0) {
			console.log('Назад');
			scrollPosition2 = scrollPosition2 - cardWidth2;
			$('.carousel-inner.mult2').animate({scrollLeft: scrollPosition2},200);
		}
	});
	var carouselWidth3 = $('.carousel-inner.mult3')[0].scrollWidth;
	var cardWidth3 = $('.carousel-item.mult3').width();
	var scrollPosition3 = 0;
	$('.carousel-control-next.mult3').on('click', function() {
		if (scrollPosition3 < (carouselWidth3 - (cardWidth3 * 4))) {
			console.log('Вперед');
			scrollPosition3 = scrollPosition3 + cardWidth3;
			$('.carousel-inner.mult3').animate({scrollLeft: scrollPosition3},200);
		}
	});
	$('.carousel-control-prev.mult3').on('click', function() {
		if (scrollPosition3 > 0) {
			console.log('Назад');
			scrollPosition3 = scrollPosition3 - cardWidth3;
			$('.carousel-inner.mult3').animate({scrollLeft: scrollPosition3},200);
		}
	});
	
} else {
	$(mutiItemCarousel).addClass('slide');
}
*/


	// вешаем маску на телефон
	$('.phone-field').inputmask("+7(999)999-9999");
	$('.phone-field_z').inputmask("+7(999)999-9999");

	// получаем нашу форму по class
	var form_с = $('.culc__form');
	var form_z = $('.zamer__form');
	
	/* JQuery-скрипт для отправки из калькулятора */
	const TOKEN = '7252876467:AAEL0SFVeslZCd6n4jTrHyAHyxPSJzanFYQ';
	const CHAT_ID = '-1002172525520';
	const URI_API = `https://api.telegram.org/bot${TOKEN}/sendMessage`;
	//const URI_API_IMG = `https://api.telegram.org/bot${TOKEN}/sendPhoto`;
	//const URI_API = 'https://api.telegram.org/bot7252876467:AAEL0SFVeslZCd6n4jTrHyAHyxPSJzanFYQ/sendMessage';
	form_с.submit(function(e){
		e.preventDefault();
		//console.log('culc__form');
		let th_tg = $(this);
		let tel = $('.phone-field').val(); // получили телефон
		let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
		let mess_err = $('.mess_err'); //сообщения с ошибками
		let btn = th_tg.find('.culc__submit');
		let profil = $("#profil option:selected").text();
		let furnit = $("#furnit option:selected").text();
		let Range1 = $(".Range1").text();
		let Range2 = $(".Range2").text();
		let big_win = $(".big_win").attr('src');
		big_win = 'https://balconi-stolicy.ru'+big_win;
		
		if(!regex.test(tel)){
			console.log('Не соответствует');
			mess_err.html('<div class="alert alert-danger mb-3">Введите правильный телефон.</div>');
			setTimeout(function(){
				mess_err.html('');
			}, 3000);
		}else{
			console.log('Соответствует');
			let massage_tg = '<b>Заявка с Калькулятора окон</b>\n';
			massage_tg += '<b>Телефон отправителя:</b> '+tel+'\n';
			massage_tg += '<b>Профиль:</b> '+profil+'\n';
			massage_tg += '<b>Фурнитура:</b> '+furnit+'\n';
			//massage_tg += 'https://balconi-stolicy.ru'+big_win+'\n';
			massage_tg += big_win+'\n';
			massage_tg += '<b>Ширина:</b> '+Range1+' мм\n';
			massage_tg += '<b>Высота:</b> '+Range2+' мм\n';
			massage_tg += '<b>Цена:</b> '+$('.num_res').text()+' руб.\n';
			console.log(massage_tg);
			
			axios.post(URI_API,{
				chat_id: CHAT_ID,
				parse_mode: 'html',
				text: massage_tg
			})
			.then((res) => {
				
			})
			.catch((err) => {
				console.warn(err);
			})
			.finally(() => {
				console.log('Конец отправки через Аксиос');
			});
		}
	});
	// Отправка из попапа
	form_z.submit(function(e){
		e.preventDefault();
		let th = $(this);
		let mess = $('.mess_z'); //сообщения с ошибками
		let btn = th.find('.form__submit');
		let tel = $('.phone-field_z').val(); // получили телефон
		let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
		let usermess = $('#usermess_z').val();
		
		if(!regex.test(tel)){
			console.log('Не соответствует');
			mess.html('<div class="alert alert-danger mb-3">Введите настоящий телефон.</div>');
			setTimeout(function(){
				mess.html('');
			}, 3000);
		}else{
			console.log('Соответствует');
			
			let massage_tg = '<b>Заявка на замер</b>\n';
			massage_tg += '<b>Телефон отправителя:</b> '+tel+'\n';
			massage_tg += '<b>Сообщение:</b> '+usermess+'\n';
			
			console.log(massage_tg);
			
			axios.post(URI_API,{
				chat_id: CHAT_ID,
				parse_mode: 'html',
				text: massage_tg
			})
			.then((res) => {
				mess.html('<div class="alert alert-success mb-3">Заявка принята.</div>');
				setTimeout(function(){
				mess.html('');
				$('#usermess_z').val(' ');
				$('.phone-field_z').val('');
				$(".popup_balcons").css("display", "none");
			}, 3000);
			})
			.catch((err) => {
				console.warn(err);
			})
			.finally(() => {
				console.log('Конец отправки через Аксиос');
			});
			
		}
	});
	

	/* JQuery-скрипт для отправки из формы на почту*/
	$('.offer__form').submit(function(e){
		e.preventDefault();
		let th = $(this);
		let mess = $('.mess'); //сообщения с ошибками
		let btn = th.find('.form__submit');
		let templateUrl = '/wp-content/themes/ustrb5/send.php';
		let tel = $('.phone-field').val(); // получили телефон
		let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
		let usermess = $('#usermess').val();
		
		if(!regex.test(tel)){
			console.log('Не соответствует');
			mess.html('<div class="alert alert-danger mb-3">Введите настоящий телефон.</div>');
			setTimeout(function(){
				mess.html('');
			}, 3000);
		}else{
			console.log('Соответствует');
			
			let massage_tg = '<b>Заявка с сайта</b>\n';
			massage_tg += '<b>Телефон отправителя:</b> '+tel+'\n';
			massage_tg += '<b>Сообщение:</b> '+usermess+'\n';
			
			console.log(massage_tg);
			
			axios.post(URI_API,{
				chat_id: CHAT_ID,
				parse_mode: 'html',
				text: massage_tg
			})
			.then((res) => {
				
			})
			.catch((err) => {
				console.warn(err);
			})
			.finally(() => {
				console.log('Конец отправки через Аксиос');
			});
			
			btn.addClass('progress-bar-striped progress-bar-animated');
			$.ajax({
				url: templateUrl,
				type: 'POST',
				data: th.serialize(),
				success: function(data){
					if (data == 1) {
						btn.removeClass('progress-bar-striped progress-bar-animated');
						mess.html('<div class="alert alert-danger mb-3">Email введен неверно.</div>');
						setTimeout(function(){
							mess.html('');
						}, 3000);
						return false;
					} else if (data == 2) {
						btn.removeClass('progress-bar-striped progress-bar-animated');
						mess.html('<div class="alert alert-danger mb-3">Введите правильный телефон.</div>');
						setTimeout(function(){
							mess.html('');
						}, 3000);
						return false;
					} else {
						btn.removeClass('progress-bar-striped progress-bar-animated');
						mess.html('<div class="alert alert-success mb-3">Все оправлено! Ждите ответа.</div>');
						setTimeout(function(){
							th.trigger('reset');
							mess.html('');
						}, 3000);
						$(".popup_balcons").css("display", "none");
					}
				},error: function(){
					mess.html('<div class="alert alert-danger mb-3">Ошибка отправки.</div>');
					btn.removeClass('progress-bar-striped progress-bar-animated');
				}
			});
			
		}
		

	});
	
	
	function calcul_summ() {
		let dostavka = 3000;
		let montage = 2500;
		let setka = 1500;
		let otkosi = 2500;
		let otliv = 3000;
		let podokonnik = 3000;
		let summ1 = $('.num_res').html(); // берем текущую сумму
		summ1 = parseInt(String(summ1).replace(/ /g, '')); // переводим в число
		let square = 1;
		
		let Blitz = 13000; let Grazio = 15000; let Thermo = 14000; let Brillant = 23000; let Intelio = 18000; let Geneo = 35000;
		let Softline = 10500; let Euroline = 11000; let VHS72 = 10000; let Softline82 = 17000;
		
		let NX = 5000; let Titan = 6000; let Favorit = 4000;
		
		let profil = $('#profil').val();
		let furnit = $('#furnit').val();
		let sel_profil = Blitz;
		let sel_furnit = NX;
		
		//alert (profil+' , '+furnit);
		if (profil == 'pr-1') {
			sel_profil = Blitz;
		} else if (profil == 'pr-2') {
			sel_profil = Grazio;
		} else if (profil == 'pr-3') {
			sel_profil = Thermo;
		} else if (profil == 'pr-4') {
			sel_profil = Brillant;
		} else if (profil == 'pr-5') {
			sel_profil = Intelio;
		} else if (profil == 'pr-6') {
			sel_profil = Geneo;
		} else if (profil == 'pr-7') {
			sel_profil = Softline;
		} else if (profil == 'pr-8') {
			sel_profil = Euroline;
		} else if (profil == 'pr-9') {
			sel_profil = VHS72;
		} else if (profil == 'pr-10') {
			sel_profil = Softline82;
		} else {
			//Console.log('Ошибка выбора селектора профиля');
		}
		
		if (furnit == 'fr-1') {
			sel_furnit = NX;
		} else if (furnit == 'fr-2') {
			sel_furnit = Titan;
		} else if (furnit == 'fr-3') {
			sel_furnit = Favorit;
		} else {
			//Console.log('Ошибка выбора селектора фурнитуры');
		}
		
		xxx = $('#customRange1').val();
		yyy = $('#customRange2').val();
		square = ((xxx/1000)*(yyy/1000));
		//alert (square);
		
		if ($('#dostavka').is(':checked')){ dostavka = 3000; } else { dostavka = 0; }
		if ($('#montage').is(':checked')){ montage = 3000; } else { montage = 0; }
		if ($('#setka').is(':checked')){ setka = 3000; } else { setka = 0; }
		if ($('#otkosi').is(':checked')){ otkosi = 3000; } else { otkosi = 0; }
		if ($('#otliv').is(':checked')){ otliv = 3000; } else { otliv = 0; }
		if ($('#podokonnik').is(':checked')){ podokonnik = 3000; } else { podokonnik = 0; }
		
		summ_res = parseInt(dostavka)+parseInt(montage)+parseInt(setka)+parseInt(otkosi)+parseInt(otliv)+parseInt(podokonnik)+(Math.round(square*sel_profil))+sel_furnit;
		$('.num_res').html(summ_res);
	}
	
	calcul_summ();
	// Профиль и фурнитура
	$('#profil').change(function(){ calcul_summ(); });
	$('#furnit').change(function(){ calcul_summ(); });
	
	// чекбоксы
	$('#dostavka').click(function(){ calcul_summ(); });
	$('#montage').click(function(){ calcul_summ(); });
	$('#setka').click(function(){ calcul_summ(); });
	$('#otkosi').click(function(){ calcul_summ(); });
	$('#otliv').click(function(){ calcul_summ(); });
	$('#podokonnik').click(function(){ calcul_summ(); });
	
	
	
	// выборка окошек
	$('.select__header').click(function(){
		$('.select__body.one').toggle();
		$('.select__body.dual, .select__body.trial, .select__body.bulk').css('display', 'none');
		calcul_summ();
	});
	$('.select__header2').click(function(){
		$('.select__body.dual').toggle();
		$('.select__body.one, .select__body.trial, .select__body.bulk').css('display', 'none');
		calcul_summ();
	});
	$('.select__header3').click(function(){
		$('.select__body.trial').toggle();
		$('.select__body.dual, .select__body.one, .select__body.bulk').css('display', 'none');
		calcul_summ();
	});
	$('.select__header4').click(function(){
		$('.select__body.bulk').toggle();
		$('.select__body.dual, .select__body.trial, .select__body.one').css('display', 'none');
		calcul_summ();
	});
	//Движение ползунков
	$('#customRange1').on('input', function() {
		//console.log('Значение изменилось на:', $(this).val());
		$('.sliderValue.Range1 span').html($(this).val());
		let vval= $(this).val() - $('#customRange1').attr('min');
		let steps1 = 50;
		let steps2 = 5;
		steps2 = ($('#customRange1').attr('max') - $('#customRange1').attr('min'))/100;
		//alert(vval +', '+steps1);
		$('.sliderValue.Range1').css('left', (vval/steps2)-steps1+'%');
		calcul_summ();
	});
	$('#customRange2').on('input', function() {
		//console.log('Значение изменилось на:', $(this).val());
		$('.sliderValue.Range2 span').html($(this).val());
		let vval= $(this).val() - $('#customRange2').attr('min');
		let steps1 = 50;
		let steps2 = 5;
		steps2 = ($('#customRange2').attr('max') - $('#customRange2').attr('min'))/100;
		$('.sliderValue.Range2').css('left', (vval/steps2)-steps1+'%');
		calcul_summ();
	});
	// смена окошек
	$('.select__item').click(function() {
		let activeWin = $(this).html();
		let idWin = $(this).attr('id');
		$(this).parent().parent().prev().children().html(activeWin);
		$('.select__body.one, .select__body.dual, .select__body.trial, .select__body.bulk').css('display', 'none');
		//alert (idWin);
		$('.big_win').attr('src', '/wp-content/themes/ustrb5/assets/img/culc/'+idWin+'.png');
		if (idWin=='One_1' || idWin=='One_4' || idWin=='One_2') {
			//alert('выбрано 1 окно');
			$('#customRange1').attr('min', 500);
			$('#customRange1').attr('max', 1000);
			$('#customRange1').attr('value', 750);
			$('.value.left.r1').html(500);
			$('.value.right.r1').html(1000);
			$('.sliderValue.Range1 span').html(750);
			
			$('#customRange2').attr('min', 500);
			$('#customRange2').attr('max', 2000);
			$('#customRange2').attr('value', 1250);
			$('.value.left.r2').html(500);
			$('.value.right.r2').html(2000);
			$('.sliderValue.Range2 span').html(1250);
		} else if (idWin=='Dual_2' || idWin=='Dual_4' || idWin=='Dual_8') {
			//alert('выбрано 2 окно');
			$('#customRange1').attr('min', 900);
			$('#customRange1').attr('max', 2000);
			$('#customRange1').attr('value', 1450);
			$('.value.left.r1').html(900);
			$('.value.right.r1').html(2000);
			$('.sliderValue.Range1 span').html(1450);
			
			$('#customRange2').attr('min', 500);
			$('#customRange2').attr('max', 2000);
			$('#customRange2').attr('value', 1250);
			$('.value.left.r2').html(500);
			$('.value.right.r2').html(2000);
			$('.sliderValue.Range2 span').html(1250);
		} else if (idWin=='Trial_2' || idWin=='Trial_6' || idWin=='Trial_7') {
			//alert('выбрано 3 окно');
			$('#customRange1').attr('min', 1400);
			$('#customRange1').attr('max', 3000);
			$('#customRange1').attr('value', 2200);
			$('.value.left.r1').html(1400);
			$('.value.right.r1').html(3000);
			$('.sliderValue.Range1 span').html(2200);
			
			$('#customRange2').attr('min', 600);
			$('#customRange2').attr('max', 2000);
			$('#customRange2').attr('value', 1300);
			$('.value.left.r2').html(600);
			$('.value.right.r2').html(2000);
			$('.sliderValue.Range2 span').html(1300);
		}
		calcul_summ();
	});
	
	$('.select__item_bulk').click(function() {
		let activeWin = $(this).html();
		let idWin = $(this).attr('id');
		$(this).parent().parent().prev().children().html(activeWin);
		$('.select__body.one, .select__body.dual, .select__body.trial, .select__body.bulk').css('display', 'none');
		//alert (idWin);
		$('.big_win').attr('src', '/wp-content/themes/ustrb5/assets/img/culc/'+idWin+'.png');
		if (idWin=='Bulk_2' || idWin=='Bulk_4' || idWin=='Bulk_1') {
			//alert('выбрано балкон');
			$('#customRange1').attr('min', 1300);
			$('#customRange1').attr('max', 2000);
			$('#customRange1').attr('value', 1650);
			$('.value.left.r1').html(1300);
			$('.value.right.r1').html(2000);
			$('.sliderValue.Range1 span').html(1650);
			
			$('#customRange2').attr('min', 1600);
			$('#customRange2').attr('max', 2200);
			$('#customRange2').attr('value', 1900);
			$('.value.left.r2').html(1600);
			$('.value.right.r2').html(2200);
			$('.sliderValue.Range2 span').html(1900);
		}
		calcul_summ();
	});
	
} // END readyFn

// настройка фансибокса
	$(document).ready(function(){
		 $(".wp-block-image").find("a:has(img)").addClass('fancyboxImg');
		 $("a.fancyboxImg").fancybox({
			buttons: ["slideshow"],
			loop: true,
			protect: true,
			padding: 0,
			openEffect: 'elastic',
			closeBtn: false,
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 1600,
			speedOut: 1200,
			overlayShow: true
		});
	});

// счетчик для показателей
/*
$(document).ready(function() {
	var $element = $('.calculations');
	console.log($element);
	let counter = 0;
	$(window).scroll(function() {
	var scroll = $(window).scrollTop() + $(window).height();
	var offset = $element.offset().top;
	console.log(offset);

	if (scroll > offset && counter == 0) {
		var numb_start1 = $(".counter1").text(); // Получаем начальное число
		$({numberValue: numb_start1}).animate({numberValue: 13}, { duration: 1500, easing: "linear", step: function(val) { $(".counter1").html(Math.ceil(val)); } });
		$({numberValue: numb_start1}).animate({numberValue: 5}, { duration: 1500, easing: "linear", step: function(val) { $(".counter2").html(Math.ceil(val)); } });
		$({numberValue: numb_start1}).animate({numberValue: 13}, { duration: 1500, easing: "linear", step: function(val) { $(".counter3").html(Math.ceil(val)); } });
		$({numberValue: numb_start1}).animate({numberValue: 3000}, { duration: 1500, easing: "linear", step: function(val) { $(".counter4").html(Math.ceil(val)); } });
		counter = 1;
	}
	});
});
*/

$( window ).on( "load", readyFn );


