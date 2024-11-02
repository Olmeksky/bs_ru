<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<section class="contacts">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h2 class="contacts__title section__title"><?php the_title(); ?></h2>
						<!--<?php the_content(); ?>-->
						<div class="contact-contact">
						<ul>
							<li id="con-cont"><nobr><img src="/wp-content/themes/ustrb5/assets/img/social/tel.png" alt="Телефон" /><a href="tel:+79258790977">+7 (925) 879-09-77</a></nobr></li>
							<li id="con-cont"><nobr><img src="/wp-content/themes/ustrb5/assets/img/social/email.png" alt="E-mail" /><a href="mailto:balconi.store@inbox.ru">balconi.store@inbox.ru</a></nobr></li>
						</ul>
						</div>
						<div class="contact-contact">
						<ul>
							<li id="con-cont"><nobr><a href="https://vk.com/balconystolicy" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/vk.png" alt="ВКонтакте" /> ВКонтакте</a></nobr></li>
							<li id="con-cont"><nobr><a href="https://wa.me/79258790977" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/wa.png" alt="WatsApp" /> WatsApp</a></nobr></li>
							<li id="con-cont"><nobr><a href="https://t.me/balconystolicy" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/tlg.png" alt="Telegram" /> Telegram</a></nobr></li>
						</ul>
						</div>
						<hr />
					</div>
				</div>
			</div>
			<div class="contacts-block">
				<div class="contacts-block__item">
					<i class="bi bi-phone-vibrate-fill"></i>
					<div class="contacts-block__text"><a href="tel:+79258790977">+7 (925) 879-09-77</a></div>
				</div>
				<div class="contacts-block__item">
					<i class="bi bi-house-fill"></i>
					<div class="contacts-block__text">микрорайон Гагарина, 10А</div>
				</div>
				<div class="contacts-block__item">
					<i class="bi bi-envelope-fill"></i>
					<i class="bi bi-envelope-at-fill"></i>
					<div class="contacts-block__text"><a href="mailto:balconi.store@inbox.ru">balconi.store@inbox.ru</a></div>
				</div>
			</div>
			<div class="contact-map">
				<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/10716/balashiha/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Балашиха</a><a href="https://yandex.ru/maps/10716/balashiha/house/mikrorayon_gagarina_10a/Z04YfwVgQEYEQFtvfXRzeH1lbA==/?from=api-maps&ll=37.923677%2C55.827072&origin=jsapi_2_1_79&utm_medium=mapframe&utm_source=maps&z=14.5" style="color:#eee;font-size:12px;position:absolute;top:14px;">микрорайон Гагарина, 10А: как доехать на автомобиле, общественным транспортом или пешком – Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?from=api-maps&ll=37.923677%2C55.827072&mode=search&ol=geo&origin=jsapi_2_1_79&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNjEwNzM2ODQ5EnDQoNC-0YHRgdC40Y8sINCc0L7RgdC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCDQkdCw0LvQsNGI0LjRhdCwLCDQvNC40LrRgNC-0YDQsNC50L7QvSDQk9Cw0LPQsNGA0LjQvdCwLCAxMNCQIgoNCa8XQhURUV9C&z=14.5" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
			</div>
		</section>
	</div> <!-- Container -->
	<?php get_sidebar('partners'); ?>
	<?php get_sidebar('zamer'); ?>
</main>


<?php get_footer(); ?>