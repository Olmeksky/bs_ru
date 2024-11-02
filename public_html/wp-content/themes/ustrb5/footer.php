<footer class="footer">
	<div class="container">
	<div class="row justify-content-between">
		<div class="col-md-3 col-12">
			<div class="logo"><a href="/"><img src="/wp-content/uploads/2024/06/logo_bs_03_02.png" /></a></div>
			<?php
			/*
			if( $logo = get_custom_logo() ){
				echo $logo;
			} else echo('<div class="logo"><a href="/">БАЛКОНЫ <br />СТОЛИЦЫ</a></div>');
			*/
			?>
			<hr />
			<p>ИНН 507206281111<br />ОГРНИП 321508100318774</p>
			<hr />
			<div class="copy">
				<p>Официальный дилер компании Rehau</p>
				<p>© 2011-2024 Балконы Столицы.</p>
				<small>Все права защищены, копирование любой информации запрещено.</small>
			</div>
		</div>
		<div class="col-md-5 col-12">
			<?php wp_nav_menu( array(
			'menu'	=> 4,
			'container' => 'ul',
			'container_class' => 'footer_menu',
			'menu_class' => 'footer_menu',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth' => 0,
			) ); ?>
		</div>
		<div class="col-md-4 col-12">
			<div class="footer-button"><button type="button" class="h_zz btn btn-lg btn-primary w-100">Заказать звонок</button></div>
			<div class="footer-contacts">
				<p class="footer-contacts_phone"><a href="tel:+79258790977">+7(925) 879-09-77</a></p>
				<p class="footer-contacts_email"><a href="mailto:balconi.store@inbox.ru">balconi.store@inbox.ru</a></p>
			</div>
			<div class="footer-social">
				<ul>
					<!--<li><a href="https://vk.com/contrmarketing" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/vk.png" alt="ВКонтакте"></a></li>-->
					<li><a href="https://wa.me/79258790977" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/wa.png" alt="WatsApp"></a></li>
					<li><a href="https://t.me/balconystolicy" target="_blank"><img src="/wp-content/themes/ustrb5/assets/img/social/tlg.png" alt="Telegram"></a></li>
				</ul>
				<hr />
				<a class="footer-policy" href="/policy/">Полит конф.</a>
				<a class="footer-policy" href="/about/articles/">Статьи</a>
				<a class="footer-policy" href="/about/bs-news/">Новости</a>
				<a class="footer-policy" href="/map/">Карта сайта</a>
			</div>
		</div>
	</div>
	</div> <!-- Container Футера -->
</footer>

	<?php wp_footer(); ?>
</body>
</html>