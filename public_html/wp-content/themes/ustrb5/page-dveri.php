<?php
/*
Template Name: ПВХ Двери
*/
?>
<?php get_header(); ?>
<main>
	<section class="container-fluid hero_dveri">
		<div class="container-fluid temn">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12">
						<h1 class="hero-title">ПВХ <br />ДВЕРИ</h1>
						<hr />
						<h2 class="hero-subtitle dveri">Даже когда за окном зима, на балконе или лоджии сохраняется комфортная температура.<br />
						Такое свойство достигается за счет ПВХ-профилей, которые не выпускают тепло из квартиры и не запускают мороз внутрь.</h2>
					</div>
					<div class="col-md-6 col-12">
						<div class="form__hero"><a name="hero_form_anchor"></a>
							<h2>Cкидка на заказ окон 25%</h2>
							<form action="#" method="post" class="form offer__form" enctype="multipart/form-data">
								<div class="form-group">
									<input type="hidden" name="mestosita" value="Верхнее место отправки">
									<input type="hidden" name="idmesta" value="4">
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
	
	<section class="type_dveri">
		<div class="container">
			<h2 class="type_dveri__title section__title">Типы дверей</h2>
			<div class="row">
				<div class="col-md-4 col-sm-6 col-12 pb-5 mb-5">
					<img class="img type_dveri_image" src="/wp-content/themes/ustrb5/assets/img/objects/Dveri_01.jpg" alt="">
					<h2 class="type_dveri_title">Двери в квартиру и на дачу</h2>
					<p class="type_dveri_text">Как правильно выбрать двери, чтобы они объединяли все достоинства и радовали своим присутствием десятилетиями?</p>
				</div>
				<div class="col-md-4 col-sm-6 col-12 pb-5 mb-5">
					<img class="img type_dveri_image" src="/wp-content/themes/ustrb5/assets/img/objects/Dveri_02.jpg" alt="">
					<h2 class="type_dveri_title">Окна в квартиру</h2>
					<p class="type_dveri_text">Как правильно выбрать двери, чтобы они объединяли все достоинства и радовали своим присутствием десятилетиями?</p>
				</div>
				<div class="col-md-4 col-sm-6 col-12 pb-5 mb-5">
					<img class="img type_dveri_image" src="/wp-content/themes/ustrb5/assets/img/objects/Dveri_03.jpg" alt="">
					<h2 class="type_dveri_title">Балконные двери</h2>
					<p class="type_dveri_text">Как правильно выбрать двери, чтобы они объединяли все достоинства и радовали своим присутствием десятилетиями?</p>
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