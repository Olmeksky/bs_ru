<?php
/*
Template Name: МУЛЬТИ
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

<?php get_sidebar('downcount32');?>
	<?php get_sidebar('complet-design');?>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('questions'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('partners'); ?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('questions-tel'); ?>
	<?php get_sidebar('zamer'); ?>

</main>

<?php get_footer(); ?>