<?php
/*
Template Name: Калькулятор Оконный 01
*/
?>
<?php get_header(); ?>
<main>
	<?php get_sidebar('popup');?>
	
<section class="container-fluid slider2 mb-5">
	<div id="carouselIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="/wp-content/themes/ustrb5/assets/img/slider/Slider_04.jpg" class="d-block w-100" alt="...">
					<div class="container-fluid temn-slider22"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="slider-block2">
								<h1 class="slider-title">ГОТОВЬ САНИ ЛЕТОМ - УТЕПЛИ БАЛКОН ПОКА ЖАРА!</h1>
								<h2 class="slider-subtitle">Узнай цену со скидкой на утепление и остекление балкона или лоджии с отделкой ПОД КЛЮЧ</h2>
								<a href="/news/skidka-35-na-osteklenie-balkonov/" type="button" class="btn btn-lg btn-danger">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/wp-content/themes/ustrb5/assets/img/slider/Slider_03.jpg" class="d-block w-100" alt="...">
					<div class="container-fluid temn-slider22"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="slider-block2">
								<h1 class="slider-title">Окна и балконы в рассрочку</h1>
								<h2 class="slider-subtitle"><span class="ss-plus">0%</span> Взнос<br /><span class="ss-plus">0%</span> Переплата<br />до <span class="ss-plus">24</span> месяцев</h2>
								<br />
								<a href="/news/okna-v-rassrochku/" type="button" class="btn btn-lg btn-danger">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="/wp-content/themes/ustrb5/assets/img/slider/Slider_022.jpg" class="d-block w-100" alt="...">
					<div class="container-fluid temn-slider22"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="slider-block2">
								<h1 class="slider-title">Дополнительная скидка - суммируется с остальными</h1>
								<h2 class="slider-subtitle"><span class="ss-plus">8</span>% на всю линейку продукции Veka белого цвета</h2>
								<a href="/news/skidka-na-veka-belogo-czveta/" type="button" class="btn btn-lg btn-danger">Узнать подробнее</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	

	<section class="container">
		<h1 class="section__title">Калькулятор Пластиковых окон</h1>
		<h2 class="vidi_ostekleniya_title">Рассчитайте стоимость пластиковых окон</h2>
		<hr />
		<form action="#" name="formCalc" id="formCalc" method="post" class="form culc__form" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h2 class="vidi_ostekleniya_title">Тип профиля</h2>
					<!-- Профиль -->
					<select class="form-select form-select-lg mb-3" name="profil" id="profil" aria-label="Выберите тип профиля">
					<optgroup>
						<option value="pr-1" selected>Rehau Blitz</option>
						<option value="pr-2">Rehau Grazio</option>
						<option value="pr-3">Rehau Thermo</option>
						<option value="pr-4">Rehau Brillant</option>
						<option value="pr-5">Rehau Intelio</option>
						<option value="pr-6">Rehau Geneo</option>
						<option value="pr-7">VEKA Softline</option>
						<option value="pr-8">VEKA Euroline</option>
						<option value="pr-9">VEKA VHS 72</option>
						<option value="pr-10">VEKA Softline 82</option>
					</optgroup>
					</select>
					<!-- / Профиль -->
				</div>
				<div class="col-md-6 col-sm-12">
					<h2 class="vidi_ostekleniya_title">Выбор фурнитуры</h2>
					<!-- Профиль -->
					<select class="form-select form-select-lg mb-3" name="furnit" id="furnit" aria-label="Выберите фурнитуру">
						<option value="fr-1" selected>Roto NX</option>
						<option value="fr-2">Siegenia Titan</option>
						<option value="fr-3">Siegenia Favorit</option>
					</select>
					<!-- / Профиль -->
				</div>
				<div class="col-xs-12">
					<hr>
				</div>
			</div> <!-- /.row -->
			<div class="row">
				<h2 class="vidi_ostekleniya_title">Тип и размеры окна</h2>
				<div class="col-12">
					<div class="row">
						<div class="col-md-6 col-12">
							<div class="okno_type">
								<!-- Кастомный селект с картинками -->
								<div class="select">
									<div class="select__header">
										<div class="select__curent" id="sel_cur1"><img src="/wp-content/themes/ustrb5/assets/img/culc/one-1.png" alt="Окно одностворчатое: глухое" title="глухое"/></div>
									</div>
									<div class="select__body one">
										<nobr>
										<div class="select__item px-2" id="One_1"><img src="/wp-content/themes/ustrb5/assets/img/culc/one-1.png" alt="Окно одностворчатое: глухое" title="глухое"/></div>
										<div class="select__item px-2" id="One_4"><img src="/wp-content/themes/ustrb5/assets/img/culc/one-2.png" alt="Окно одностворчатое: с поворотно откидной створкой" title="с поворотно откидной створкой"/></div>
										<div class="select__item px-2" id="One_2"><img src="/wp-content/themes/ustrb5/assets/img/culc/one-3.png" alt="Окно одностворчатое: с поворотной створкой" title="с поворотной створкой"/></div>
										</nobr>
									</div>
								</div>
								<div class="select">
									<div class="select__header2">
										<div class="select__curent" id="sel_cur2"><img src="/wp-content/themes/ustrb5/assets/img/culc/dual-1.png" alt="Окно двухстворчатое: поворотно откидная + глухая створка" title="поворотно откидная + глухая створка"/></div>
									</div>
									<div class="select__body dual">
										<nobr>
										<div class="select__item px-2" id="Dual_2"><img src="/wp-content/themes/ustrb5/assets/img/culc/dual-1.png" alt="Окно двухстворчатое: поворотно откидная + глухая створка" title="поворотно откидная + глухая створка"/></div>
										<div class="select__item px-2" id="Dual_4"><img src="/wp-content/themes/ustrb5/assets/img/culc/dual-2.png" alt="Окно двухстворчатое: поворотно откидная + поворотная створка" title="поворотно откидная + поворотная створка"/></div>
										<div class="select__item px-2" id="Dual_8"><img src="/wp-content/themes/ustrb5/assets/img/culc/dual-3.png" alt="Окно двухстворчатое: поворотно откидная + поворотно откидная створка" title="поворотно откидная + поворотно откидная створка"/></div>
										</nobr>
									</div>
								</div>
								<div class="select">
									<div class="select__header3">
										<div class="select__curent" id="sel_cur3"><img src="/wp-content/themes/ustrb5/assets/img/culc/trial-1.png" alt="Окно трехстворчатое: поворотно откидная + 2 глухие" title="поворотно откидная + 2 глухие"/></div>
									</div>
									<div class="select__body trial">
										<nobr>
										<div class="select__item px-2" id="Trial_2"><img src="/wp-content/themes/ustrb5/assets/img/culc/trial-1.png" alt="Окно трехстворчатое: поворотно откидная + 2 глухие" title="поворотно откидная + 2 глухие"/></div>
										<div class="select__item px-2" id="Trial_6"><img src="/wp-content/themes/ustrb5/assets/img/culc/trial-2.png" alt="Окно трехстворчатое: 2 поворотно откидные + 1 глухая" title="2 поворотно откидные + 1 глухая"/></div>
										<div class="select__item px-2" id="Trial_7"><img src="/wp-content/themes/ustrb5/assets/img/culc/trial-3.png" alt="Окно трехстворчатое: 2 поворотно откидные + поворотная створка" title="2 поворотно откидные + поворотная створка"/></div>
										</nobr>
									</div>
								</div>
								<div class="select">
									<div class="select__header4">
										<div class="select__curent_bulk" id="sel_cur4"><img src="/wp-content/themes/ustrb5/assets/img/culc/bulk-1.png" alt="Балконный блок: дверь + 1 глухая створка" title="дверь + 1 глухая створка"/></div>
									</div>
									<div class="select__body bulk">
										<nobr>
										<div class="select__item_bulk px-2" id="Bulk_2"><img src="/wp-content/themes/ustrb5/assets/img/culc/bulk-1.png" alt="Балконный блок: дверь + 1 глухая створка" title="дверь + 1 глухая створка"/></div>
										<div class="select__item_bulk px-2" id="Bulk_4"><img src="/wp-content/themes/ustrb5/assets/img/culc/bulk-2.png" alt="Балконный блок: дверь + 1 глухая и 1 поворотно откидная створка" title="дверь + 1 глухая и 1 поворотно откидная створка"/></div>
										<div class="select__item_bulk px-2" id="Bulk_1"><img src="/wp-content/themes/ustrb5/assets/img/culc/bulk-3.png" alt="Балконный блок: дверь + 1 поворотно откидная створка" title="дверь + 1 поворотно откидная створка"/></div>
										</nobr>
									</div>
								</div> <!-- / Кастомный селект с картинками -->
							</div>
						</div>
						<div class="col-md-6 col-12">
							<div class="big-window">
								<div id="main-window-pic"><img class="big_win" src="/wp-content/themes/ustrb5/assets/img/culc/One_1.png"></div>
								<label for="customRange1" class="csmR form-label py-4">Ширина</label>
								<div class="v-slider py-2">
									<div class="sliderValue Range1"><span>750</span></div>
									<div class="field">
										<div class="value left r1">500</div>
										<input type="range" class="form-range" min="500" max="1000" value="750" step="5" id="customRange1">
										<div class="value right r1">1000</div>
									</div>
								</div>
								<label for="customRange2" class="csmR form-label py-4">Высота</label>
								<div class="v-slider py-2">
									<div class="sliderValue Range2"><span>1250</span></div>
									<div class="field">
										<div class="value left r2">500</div>
										<input type="range" class="form-range" min="500" max="2000" value="1250" step="5" id="customRange2">
										<div class="value right r2">2000</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- /.row -->
				</div>
				<div class="col-12">
					<div class="row vid_ostekl px-5">
						<h2 class="vidi_ostekleniya_title">Опции</h2>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="podokonnik">
								<label class="form-check-label" for="podokonnik">Подоконник</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="otliv">
								<label class="form-check-label" for="otliv">Отлив</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="otkosi">
								<label class="form-check-label" for="otkosi">Откосы</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="setka" name="setka" value="Да" checked>
								<label class="form-check-label" for="setka">Москитная сетка</label>
							</div>
						</div>
						<h2 class="vidi_ostekleniya_title">Доп.услуги</h2>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="montage" name="montage" value="Да" checked>
								<label class="form-check-label" for="montage">Монтаж</label>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 col-12 mt-3">
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="dostavka" name="dostavka" value="Да" checked>
								<label class="form-check-label" for="dostavka">Доставка</label>
							</div>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.col -->
				<div class="col-xs-12"><hr class="mt-0"></div>
			</div> <!-- /.row -->
			
			<div class="row px-5">
				<h2 class="vidi_ostekleniya_title">Стоимость окна</h2>
				<div class="col-sm-12 col-md-4 mt-3">
					<div class="row">
						<div class="col-12">
							<div class="calc_res">
								<span class="text_res"><span name="cost" class="num_res">13 426</span> руб.</span>
							</div>
						</div>
					</div> <!-- /.row -->
				</div>
				<div class="col-sm-12 col-md-4 mt-3">
					<div class="text-center mt-10">
						<input type="text" class="phone-field form-control form-control-lg" aria-describedby="inputGroup-sizing-lg" name="phone" placeholder="Номер телефона" data-rule-required="true" data-rule-minlength="10" data-msg="Введите номер телефона"/>
						<div class="mess_err mb-3"></div><!-- Для сообщений об ошибке -->
					</div>
				</div>
				<div class="col-sm-12 col-md-4 mt-3">
					<div class="text-center mt-10">
						<button type="submit" class="btn btn-danger btn-lg culc__submit px-5">Отправить расчёт</button>
					</div>
				</div>
				<div class="col-xs-12">
					<hr>
				</div>
			</div> <!-- /.row -->
			
			
		</form>
	</section>
	
	<?php get_sidebar('questions-tel'); ?>
		
	
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('questions'); ?>
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>