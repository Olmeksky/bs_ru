<?php
/*
Template Name: Пластиковые окна
*/
?>
<?php get_header(); ?>
<main>
	<section class="container-fluid hero_okna">
		<div class="container-fluid temn">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12">
						<h1 class="hero-title">Пластиковые<br />окна</h1>
						<hr />
						<h2 class="hero-subtitle">Производство и установка за 10 дней с гарантией</h2>
					</div>
					<div class="col-md-6 col-12">
						<div class="form__hero"><a name="hero_form_anchor"></a>
							<h2>Cкидка на заказ окон 25%</h2>
							<form action="#" method="post" class="form offer__form" enctype="multipart/form-data">
								<div class="form-group">
									<input type="hidden" name="mestosita" value="Верхнее место отправки">
									<input type="hidden" name="idmesta" value="3">
									<input type="hidden" name="action" value="my_action">
									<input type="text" name="userphone" class="phone-field form-control form-control-lg" id="userphone" placeholder="Номер телефона">
									<label for="usermess">Сообщение:</label>
									<textarea name="usermess" class="form-control form-control-lg" id="usermess" rows="3" placeholder="Ваши комментарии..."></textarea>
									<div class="mess mb-3"></div><!-- Для сообщений об ошибке -->
									<input type="submit" class="btn btn-lg btn-primary form__submit mb-3" value="Отправить заявку">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		<?php get_sidebar('popup');?>
		<?php get_sidebar('calculations');?>
		<?php get_sidebar('downcount30');?>

	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>
	
	<section class="type_okon">
		<div class="container">
			<h2 class="type_okon__title section__title">Типы окон</h2>
			<div class="row">
				<div class="col-md-6 col-12 pb-5 mb-5">
					<img class="img type_okon_image" src="/wp-content/themes/ustrb5/assets/img/objects/Okon_01.png" alt="">
					<h2 class="type_okon_title">Окна в квартиру</h2>
					<p class="type_okon_text">Хотите добавить комфорта и уюта в свою квартиру? Установите стильные и современные окна от нашей компании! Наши окна не только прекрасно смотрятся, но и обеспечат вашей квартире тепло, свет и воздух. Приобретайте качественные окна с гарантией и защитой от шума и холода. Доверьтесь профессионалам - выберите нашу компанию для установки окон в вашей квартире!</p>
				</div>
				<div class="col-md-6 col-12 pb-5 mb-5">
					<img class="img type_okon_image" src="/wp-content/themes/ustrb5/assets/img/objects/Okon_02.png" alt="">
					<h2 class="type_okon_title">Окна в частный дом</h2>
					<p class="type_okon_text">Улучшите комфорт и безопасность своего дома с нашими качественными окнами! Надежные и энергоэффективные материалы обеспечат идеальный микроклимат в помещении, а стильный дизайн подчеркнет уют и красоту вашего дома. Закажите у нас окна и наслаждайтесь комфортом каждый день!</p>
				</div>
				<div class="col-md-6 col-12 pb-5 mb-5">
					<img class="img type_okon_image" src="/wp-content/themes/ustrb5/assets/img/objects/Okon_03.png" alt="">
					<h2 class="type_okon_title">Окна REHAU</h2>
					<p class="type_okon_text">Откройте для себя оконные решения, которые так же современны, как и ваша жизнь.</p>
				</div>
				<div class="col-md-6 col-12 pb-5 mb-5">
					<img class="img type_okon_image" src="/wp-content/themes/ustrb5/assets/img/objects/Okon_04.png" alt="">
					<h2 class="type_okon_title">Окна VEKA</h2>
					<p class="type_okon_text">В основе производства с самого начала лежит прогрессивная технология коэкструзии CO-EX, основным отличием которой является использование вторично переработанного ПВХ-сырья.</p>
				</div>
			</div>
		</div>
	</section>
	
	<?php get_sidebar('questions'); ?>

	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>