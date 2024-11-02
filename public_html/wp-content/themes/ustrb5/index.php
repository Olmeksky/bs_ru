<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="КонтрМаркетинг">
    <meta property="og:description" content="Мини-Digital агентство">
    <meta property="og:image" content="https://contrmarketing.ru/img/image.jpg">
    <meta property="og:url" content="https://contrmarketing.ru/">
	<link rel="icon" hreg="../favicon.ico">
	
	<title>КонтрМаркетинг / Мини-Digital агентство</title>
	<!-- шрифт -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
  </head>
  <body>
  <div class="container">
    <header>
	<div class="top-nav">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-auto">
				<div class="logo">
					<!--<img src="/wp-content/themes/ustrb5/assets/img/Logo-long.jpg" alt="КонтрМаркетинг">-->
					<?php the_custom_logo(); ?>
				</div>
				<div class="logo_after justify-content-between">
				<button class="top-nav_btn">
						<img src="/wp-content/themes/ustrb5/assets/img/navig/menu_2_sm.png" />
				</button>
				</div>
			</div>
			<div class="col-md-auto">
				<div class="top-nav_contact">
					<i><span class="top-nav_time"><b>Мини-Digital агентство</b><br />работаем с 9:00 до 18:00<br /></span><b><span class="top-nav_tel"><a href="tel:+79772500347">+7(977)250-03-47</a></span></b></i>
				</div>
				
			</div>
			<div class="col-md-auto">
				<?php wp_nav_menu( array(
					'container' => 'ul',
					'container_class' => 'top-nav_menu',
					'menu_class' => 'top-nav_menu',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => '',
				) ); ?>
				<!--
				<ul class="top-nav_menu">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Об агентстве</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Материалы</a></li>
					<li><a href="#">Контакты</a></li>
				</ul> -->
			</div>
		</div>
	</div>
    </header>
    <main>
		<div class="row">
			<div class="col-md-3">
				<div class="left-sidebar">
					<div class="left-sidebar_btn">
						Категории
					</div>
					<ul class="left-sidebar_menu">
						<?php
							$args = array(
							'orderby'            => 'name',
							'order'              => 'ASC',
							'style'              => 'list',
							'show_count'         => 0,
							'hide_empty'         => 0,
							'use_desc_for_title' => 0,
							'child_of'           => 0,
							'feed'               => '',
							'feed_type'          => '',
							'feed_image'         => '',
							'exclude'            => '1',
							'exclude_tree'       => '',
							'include'            => '',
							'hierarchical'       => true,
							'title_li'           => NULL,
							'number'             => NULL,
							'echo'               => 1,
							'depth'              => 0,
							'current_category'   => 0,
							'pad_counts'         => 0,
							'taxonomy'           => 'category',
							'walker'             => 'Walker_Category',
							'hide_title_if_empty' => false,
							'separator'          => '<br />',
						);
						wp_list_categories( $args );
						?>
					<!--
					<li><a href="#">Главная</a></li>
					<li><a href="#">Об агентстве</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Материалы</a></li>
					<li><a href="#">Контакты</a></li> -->
					</ul>
					<?php wp_reset_postdata(); ?>
				</div>
				<div class="left-sidebar_object">
					<img src="/wp-content/themes/ustrb5/assets/img/objects/marketer_month.jpg" alt="Услуга Персональный маркетолог на месяц">
					<div class="left-sidebar_object-description">
						<h3>Персональный маркетолог на месяц</h3>
						<p>Услуги маркетолога предполагают рост продаж и увеличение прибыли.<br />
						<i>Тариф рассчитан на месяц.</i></p>
						<h4>Что включает?</h4>
						<ul>
						<li>Стратегия продвижения сайта.</li>
						<li>SEO продвижение.</li>
						<li>Настройка и ведение Direct.</li>
						<li>СММ раскрутка в соцсетях.</li>
						<li>Настройка E-mail рассылки.</li>
						</ul>
						<a href="#">Узнать подробнее</a>
					</div>
				</div>
				<div class="left-sidebar_object">
					<img src="/wp-content/themes/ustrb5/assets/img/objects/metodich_pain.jpg" alt="Книга Правильные боли ЦА">
					<div class="left-sidebar_object-description">
						<h3>Методичка по болям ЦА</h3>
						<p>Нехватка денег - это не его боль, он к этому привык.<br />
						<i>Нужно уметь бить ПО БОЛЯМ так, чтобы появилось желание найти деньги, чтобы купить.</i></p>
						<h4>Методичка содержит все способы:</h4>
						<ul>
						<li>Где и как узнавать настоящие боли ваших целевых групп.</li>
						<li>Как их правильно пристроить.</li>
						<li>Как их использовать под разные форматы.</li>
						</ul>
						<p>И бонусом веселая история.</p>
						<a href="#">Узнать подробнее</a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="content">
					<h2>ТОП 3 сфер роста для бизнесмена</h2>
					<h3>Стратегический рост.</h3>
					<p>Стратегия строится на HR, рынках, маркетинге и лестнице продаж. Отвечайте постоянно по новому на такие вопросы?<br />
					Что за люди у вас работают? Как вы их нанимаете? Сколько им платите и как их прокачиваете?<br />
					В какой нише работаете? Есть ли у вас определенная подниша? Грамотно ли составлено УТП?<br />
					Достаточно ли у вас источников трафика? Хорошо ли они работают? Эффективна ли текущая тактика?<br />
					Есть ли у вас продающая воронка? Выстроена ли лестница? Бесплатность, Трипваэр и более дорогие?</p>
					
					<p><b><i>Правильные ответы, даже в общем - будут давать понимание, как работает ваш бизнес?</i></b></p>
					
					<h3>За маркетингом и продажами обычно идут Финансы.</h3>
					<p>Финансовые отчеты нужно уметь строить/создавать. Правильно их читать и делать здравые выводы.<br />
					Аналитика порой позволяет оптимизировать отчеты так, что получается некая сводная таблица, за которую нормальный предприниматель "порвет" любого.<br />
					Заполняется такая просто - в конце рабочего дня за 5-10 минут. А через неделю-месяц видно, где деньги уходят, а где их очень много спряталось.</p>
					
					<h3>Далее Управление.</h3>
					<p>Прокачка этой сферы позволяет строить большие, а главное эффективные команды, где каждый и на каждом этапе проверяет результат предыдущего. Получается некий конвейер. Управленческий конвейер. При таком подходе - обмануть вас будет сложно или невозможно, все будет во время сделано.<br />
					Все будет предсказуемо и вы чаще сможете выполнять план и превышать его.<br />
					И главное, команда будет как бы саморазвиваться. Аналог конкуренции внутри компании.<br />
					Вроде бы соперничества нет, а результативность превосходная.</p>
					
					<h3>БОНУС</h3>
					<p>Это Психологическая поддержка персонала. Психотерапия во время планерок, во время работы и вообще любая прокачка мышления ваших сотрудников пойдет на пользу вашей компании.<br />
					А если вы можете незаметно проводить такого рода психотерапию - вы и сами улучшите своё мышление.<br />
					Обращайтесь за консультациями, результатами, документацией и другими маркетинговыми инструментами.<br />
					Будем рады увеличить вашу конверсию или создать новые каналы продаж. Которые могут оказаться на 200-300% прибыльнее существующих.<br />
					Работаем легко, но не примитивно. Дешево, быстро и современно.</p>
					<a href="#" class="btn btn-primary">Убедиться самостоятельно!</a>
					
				</div>
				<div class="directions">
					<h2>Направления деятельности</h2>
					<div class="direction-blocks">
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir0.jpg);"><h3>Акции</h3></div>
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir1.jpg);"><h3>Реклама</h3></div>
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir2.jpg);"><h3>Автоматизация</h3></div>
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir3.jpg);"><h3>Аналитика</h3></div>
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir4.jpg);"><h3>Контент</h3></div>
					<div class="directions-block" style="background-image:url(/wp-content/themes/ustrb5/assets/img/directions/dir5.jpg);"><h3>Чат-Боты</h3></div>
					</div>
				</div>
			</div>
		</div>
    </main>
  </div> <!-- Container -->
  <footer class="footer">
	<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-3">
			<div class="copy">
				<p>CopyRight 22-23</p>
				<a class="footer-policy" href="#">ПолитКонф</a>
				<small>Продвижение и ракрутка сайтов, новые каналы продаж. Маркетинговые воронки под ключ. Создание и ведение эффективной рекламной компании. Дизайн и верстка уникальных рекламных материалов: баннеры, листовки, сторис. Оформление социальных сетей для продажи услуг и товаров.</small>
			</div>
		</div>
		<div class="col-md-2">
			<img class="footer-banner" src="/wp-content/themes/ustrb5/assets/img/objects/pro-35per_.png" alt="Про пакет со скидкой">
		</div>
		<div class="col-md-2 col-6">
		<ul class="footer_menu">
			<li><a href="#">Главная</a></li>
			<li><a href="#">Об агентстве</a></li>
			<li><a href="#">Услуги</a></li>
			<li><a href="#">Материалы</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
		</div>
		<div class="col-md-2 col-6">
			<ul class="footer_menu">
			<li><a href="#">Акции</a></li>
			<li><a href="#">Реклама</a></li>
			<li><a href="#">Автоматизация</a></li>
			<li><a href="#">Аналитика</a></li>
			<li><a href="#">Контент</a></li>
			<li><a href="#">Чат-Боты</a></li>
		</ul>
		</div>
		<div class="col-md-3">
			<div class="footer-contacts">
				<p class="footer-contacts_phone">+7(977)250-03-47</p>
				<p class="footer-contacts_email"><a href="mailto:ShuSashi@ya.ru">ShuSashi@ya.ru</a></p>
			</div>
			<div class="footer-social">
				<ul>
					<li><a href="#"><img src="/wp-content/themes/ustrb5/assets/img/social/vk.png" alt="ВКонтакте"></a></li>
					<li><a href="#"><img src="/wp-content/themes/ustrb5/assets/img/social/wa.png" alt="WatsApp"></a></li>
					<li><a href="#"><img src="/wp-content/themes/ustrb5/assets/img/social/tlg.png" alt="Telegram"></a></li>
				</ul>
			</div>
		</div>
	</div>
	</div> <!-- Container Футера -->
  </footer>  
  
    <!--<script src="/wp-content/themes/ustrb5/assets/js/jquery-3.6.4.min.js" defer></script>-->
	<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
	
	<!--<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/ustrb5/assets/slick/slick.min.js"></script> -->
	<script>
		$(document).ready(function(){
			$('.direction-blocks').slick({
			autoplay: true,
			arrows: false,
			dots: true,
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			var menuBtn = $('.top-nav_btn');
			var mеnu = $('.top-nav_menu');
			
			var sidebarBtn = $('.left-sidebar_btn');
			var sidebarMenu = $('.left-sidebar_menu');
			
			menuBtn.on('click', function(event) {
				event.preventDefault();
				mеnu.toggleClass('top-nav_menu__active');
			});
			sidebarBtn.on('click', function(event) {
				event.preventDefault();
				sidebarMenu.toggleClass('left-sidebar_menu__active');
			});
		});
	</script>
	<!--
	<script src="/wp-content/themes/ustrb5/assets/js/bootstrap.min.js" defer></script> -->
	<!-- Bootstrap скрипты из интернета
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
	
	<?php wp_footer(); ?>
  </body>
</html>