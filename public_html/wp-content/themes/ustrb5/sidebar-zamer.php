<!-- Сайдбар Заявка на замер НИЖНИЙ -->
<div class="zamer">
<div class="container">
	<div class="row">
		<div class="col-md-6 py-5">
			<h2 class="zamer_title">Заинтересовались — давайте сделаем замер</h2>
			<p class="zamer_subtitle">Специалист приедет к вам в течение часа, или в любое удобное для вас время с 8 до 19. Заполните имя и телефон, для согласования даты и времени замера.</p>
				<a name="footer_form_anchor"></a>
					<!-- Основная форма под героем -->
					<form action="#" method="post" class="form offer__form" enctype="multipart/form-data">
						<div class="form__row">
							<div class="form-group">
							<input type="hidden" name="mestosita" value="Нижнее место отправки">
							<input type="hidden" name="idmesta" value="8">
							
							<!--
								<label for="name">Ваше имя:</label>
								<input type="name" name="username" class="form-control form-control-lg" id="username" placeholder="Введите имя">
								
								<label for="phone">E-mail:</label>
								<input type="email" name="useremail" class="form-control form-control-lg" id="useremail" placeholder="Введите e-mail">
								
								<label for="phone">Номер телефона:</label>
								<input type="phone" name="userphone" class="form-control form-control-lg" id="userphone" placeholder="Введите телефон">
								
								
								-->
								<input type="text" name="userphone" class="phone-field form-control form-control-lg" id="userphone" placeholder="Номер телефона">
								
								<textarea name="usermess" class="form-control form-control-lg mt-5" id="usermess" rows="3" placeholder="Ваши комментарии..."></textarea>
								<div class="mess mb-3"></div><!-- Для сообщений об ошибке -->
								<input type="submit" class="btn btn-lg btn-primary form__submit mb-5" value="Отправить заявку">
							</div>
						</div>
					</form>
				<!--
			<form method="post" action="/wp-admin/admin-ajax.php">
				<input type="hidden" name="action" value="my_action">
				<?php #echo do_shortcode('[contact-form-7 id="6fe5000" title="Виджет Заявка На Замер низ"]');?>
				
				<div class="form-group">
				<label for="name">Ваше имя:</label>
				<input type="name" name="username" class="form-control form-control-lg" id="username" placeholder="Name">
				</div>
				<div class="form-group">
				<label for="phone">Номер телефона:</label>
				<input type="phone" name="userphone" class="form-control form-control-lg" id="userphone" placeholder="Phone">
				</div>
				<button type="submit" class="btn btn-lg btn-primary">Отправить заявку</button>
			</form>-->
			
		</div>
		<div class="col-md-6"><img class="zamer_img" src="/wp-content/uploads/2024/04/dawid-sobolewski-359.webp"></div>
	</div>
</div>
</div>