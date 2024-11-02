<!-- Сайдбар Попап -->
	<div class="container-fluid popup_balcons">
		<div class="xic"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg></div>
		<div class="form__popup">
		<div class="xic_f"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="slategrey" class="bi bi-x-circle-fill" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/></svg></div>
			<h2 class="popup_title">Вызвать замерщика, записаться на консультацию</h2>
			<form action="#" method="post" class="form zamer__form" enctype="multipart/form-data">
				<div class="form-group">
					<input type="hidden" name="mestosita" value="Всплывающее окно">
					<input type="hidden" name="idmesta" value="6">
					<input type="hidden" name="action" value="my_action">
					<input type="text" name="userphone" class="phone-field_z form-control form-control-lg" id="userphone" placeholder="Номер телефона">
					<label for="usermess">Сообщение:</label>
					<textarea name="usermess" class="form-control form-control-lg" id="usermess_z" rows="3" placeholder="Ваши комментарии..."></textarea>

					<div class="mess_z mb-3"></div><!-- Для сообщений об ошибке -->
					<input type="submit" class="btn btn-lg btn-primary form__submit mb-3" value="Отправить заявку">
				</div>
			</form>
		</div>
	</div>
