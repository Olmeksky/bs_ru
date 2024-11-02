<?php
/*
Template Name: Домашняя
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

<section class="vozmozhno">
	<div class="container">
		<h2 class="section__title">Последние статьи</h2>
		<div class="row">
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page'	=> 6,
				'post_type'			=> 'post',
			] );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<!-- Вывод Статей, функции цикла: the_title() и т.д. -->
					<div class="col-lg-4 col-sm-6 col-12">
						<h2 class="news_title"><a class="news_link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<a class="news_link" href="<?php the_permalink();?>"><img class="news_img" src="<?php echo get_the_post_thumbnail_url();?>" /></a>
						
						<p><?php the_truncated_post(200); ?></p>
						<a  href="<?php the_permalink();?>">Читать полностью</a>

					</div>
					<?php
				}
			} else {
				?>
					<p>Статей не найдено</p>
				<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
		?>
		</div>
	</div>
</section>

	<?php #get_sidebar('downcount32');?>
	<?php get_sidebar('questions-tel'); ?>
	<!--
	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>-->
	<section class="type">
		<div class="container">
		<h2 class="section__title">Услуги Балконы столицы</h2>
		<div class="row">
			<div class="col-md-4 col-sm-6 mb-5">
				<img class="img type__image" src="/wp-content/uploads/2024/04/type_10.webp" alt="">
				<h2 class="type_title">Пластиковые окна</h2>
				<p class="type_subtitle">Хотите обновить свою квартиру и придать ей современный вид? Пластиковые окна - идеальное решение для вашего жилья! Надежные, удобные и стильные оконные конструкции помогут сэкономить энергию и создадут уютную атмосферу в доме. Не требуют сложного ухода и долго сохраняют свой хороший вид. Выбирайте качество и комфорт - выбирайте пластиковые окна!</p>
			</div>
			<div class="col-md-4 col-sm-6 mb-5">
				<img class="img type__image" src="/wp-content/uploads/2024/04/type_20.jpg" alt="">
				<h2 class="type_title">Остекление балконов и лоджий</h2>
				<p class="type_subtitle">Хотите наслаждаться теплыми вечерами на своем балконе или лоджии круглый год? Мы предлагаем профессиональное остекление, которое защитит ваше пространство от ветра, дождя и пыли, сохраняя его теплым и уютным даже в холодные месяцы.<br />
				Наши специалисты предлагают широкий выбор различных материалов и дизайнов для остекления балконов и лоджий, чтобы подобрать идеальное решение под ваш интерьер и стиль. Мы гарантируем высокое качество материалов и монтажа, а также доступные цены и индивидуальный подход к каждому клиенту.<br />
				Обратитесь к нам сегодня и превратите ваш балкон или лоджию в уютное место для отдыха и общения с семьей и друзьями круглый год!</p>
			</div>
			<div class="col-md-4 col-sm-6 mb-5">
				<img class="img type__image" src="/wp-content/uploads/2024/04/type_30.webp" alt="">
				<h2 class="type_title">ПВХ двери</h2>
				<p class="type_subtitle">Хотите преобразить интерьер своего дома или офиса? Попробуйте установить ПВХ двери! Наша компания предлагает широкий выбор дверей из пластикового материала, которые идеально подойдут для любого интерьера. ПВХ двери отличаются от других материалов своей высокой прочностью, долговечностью, легкостью в уходе и стойкостью к влаге. Кроме того, ПВХ двери имеют стильный и современный дизайн, который подойдет под любой интерьер. Выберите из нашего каталога дверь, которая подойдет именно вам, и наслаждайтесь комфортом и красотой вашего дома.</p>
			</div>
			<div class="col-md-4 col-sm-6 mb-5">
				<img class="img type__image" src="/wp-content/uploads/2024/04/type_40.webp" alt="">
				<h2 class="type_title">Ремонт окон</h2>
				<p class="type_subtitle">Хотите сделать свои окна красивее и функциональнее? Обратитесь к нам за профессиональным ремонтом окон!<br />
				Наша команда опытных специалистов предоставит вам качественные услуги по ремонту окон любой сложности. Мы заменим стекла, уплотнители, фурнитуру, выполним регулировку механизмов.<br />
				Мы используем только высококачественные материалы и современное оборудование, чтобы гарантировать долговечность и надежность ремонта.<br />
				Доверьте нам заботу о ваших окнах и наслаждайтесь комфортом и уютом в вашем доме!</p>
			</div>
			<div class="col-md-4 col-sm-6 mb-5">
				<img class="img type__image" src="/wp-content/uploads/2024/04/type_50.jpg" alt="">
				<h2 class="type_title">Москитные сетки</h2>
				<p class="type_subtitle">Защитите свой дом от назойливых насекомых с помощью москитных сеток! Наши качественные сетки обеспечат надежную защиту от комаров, мух и других вредителей, позволяя вам наслаждаться свежим воздухом и спокойствием в своем уютном уголке. Забудьте о ночных жужжаниях и укусах - установите москитные сетки и наслаждайтесь тишиной и комфортом в своем доме! Позаботьтесь о своем здоровье и комфорте - выберите надежные москитные сетки уже сегодня!</p>
			</div>
		</div>
		</div>
	</section>


	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('questions'); ?>
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>