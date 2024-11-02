(function($) {
//тут ваш код

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

})(jQuery);

